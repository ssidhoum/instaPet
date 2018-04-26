<?php
/**
 * @var \App\View\AppView $this
 */
?>

<div class="container">
    <div class="containerAccount">
        <div class="layoutPet">
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
            <h1>
                <?= h($pet->name)?>
            </h1>
            </br>
            <h2>
            <?php
                $birthday = new DateTime(h($pet->birthday));
                echo $birthday->diff(new DateTime('now'))->y
            ?> Ans / Inscrit depuis: 
            <?php  
                $add= new DateTime(h($pet->created));
                echo $add->diff(new DateTime('now'))->d
            ?> jours
            
        </h2>
        </div>

        <table class="table table-bordered">
            <tbody>
                <?php foreach ($pet->posts as $posts): ?>
                <tr>
                    <td><?= h($posts->name) ?></td>
                    <td><?= h($posts->content) ?></td>
                    <td><?php $url= 'files/Posts/photo/'.h($posts->photo);
                        echo $this->Html->image($url, [
                            'height' => '120',
                            'width' => '120',
                        ]);?>
                    </td>
                </tr> 
                <?php endforeach; ?>
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


