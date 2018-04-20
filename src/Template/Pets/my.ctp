<?php
/**
 * @var \App\View\AppView $this
 */
?>

<div class="container">
    <div class="containerAccount">
        <h1>
            Mon compte
        </h1>
        <h2>
            Changer vos informations
        </h2>
        
        <?= $this->Html->link('Ajouter un animal', array('controller' => 'pets', 'action' => 'add')); ?>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Photo de profil </th>
                    <th>Nom</th>
                    <th>Age</th>
                    <th>Animal</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pets as $pet): ?>
                    <tr>
                    	<td>
                    		<div class="pictureProfil">
                    		<?php
                				if (!empty($pet->photo)) {
                    				$url= 'files/Pets/photo/april.jpg';

                    				echo $this->Html->image($url, [
                        				'height' => '120',
                        				'width' => '120',
                    				]);
            				}?>
            				</div>
                    	</td>
                        <td><?= h($pet->name)  ?></td>
                        <td>
                            <?php
                            $birthday = new DateTime($pet['Pet']['birthday']);
                            echo $birthday->diff(new DateTime('now'))->y
                            ?> Ans
                        </td>
                        <td>
                        <?= $this->Html->link('Voir les photos', array('controller' => 'posts', 'action' => 'pet', $pet['Pet']['id'])); ?>
                        -
                        <?= $this->Html->link('Editer', array('action' => 'edit', $pet['Pet']['id'])); ?>
                        -
                        <?= $this->Form->postLink('Supprimer', array('action' => 'delete', $pet['Pet']['id']), array(), 'Voulez vous vraiment supprimer ?'); ?>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table> 
    </div>
    <div class="menuAccount">
        <ul class="navAccount">
            <li<?php if($this->request->action == 'account'): ?> class="active"<?php endif; ?>>
                <?= $this->Html->link('Mon compte', array('controller' => 'users', 'action' => 'account')); ?>
            </li>
            <li<?php if($this->request->controller == 'pets'): ?> class="active"<?php endif; ?>>
                <?= $this->Html->link('Mes animaux', array('controller' => 'pets', 'action' => 'my')); ?>
            </li>
            <li<?php if($this->request->controller == 'posts'): ?> class="active"<?php endif; ?>>
                <?= $this->Html->link('Mes photos', array('controller' => 'posts', 'action' => 'my')); ?>
            </li>
        </ul>
    </div>
</div>