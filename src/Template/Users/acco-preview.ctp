<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pet $pet
 */
?>

<div class="row">
    <div class="span8">
    <?=
    $this->Html->link(
        'Mes animaux',
        '/pets/my'
    );
    ?>

    </div> 
</div>

<div class="row">
	<div class="span8">
         <?= $this->Form->create($user, ['type' => 'file']) ?>
    	<fieldset>
        	<legend><?= __('Mon compte') ?></legend>

            <?php

                echo $this->Form->control('email', ['disabled' => 'true', 'label' => 'Votre adresse mail']);
                echo $this->Form->control('created', ['disabled' => 'true', 'label' => 'Votre date d\'inscription']);
            
           echo $this->Form->input('avatar', ['type' => 'file']);
            if (!empty($user->avatar)) {
                $url= '/files/Users/avatar/'.$user->avatar;

                echo $this->Html->image($url, [
                    'height' => '100',
                    'width' => '100',
                ]);
            }

                echo $this->Form->control('firstname',['label' => 'Votre prénom']);
                echo $this->Form->control('lastname',['label' => 'Votre nom']);

			?>





    	</fieldset>
    	<?= $this->Form->button(__('Modifier vos informations')) ?>
    	<?= $this->Form->end() ?>
	</div>
    <div class="span4">
        <h2>Navigation</h2>
        <ul class="nav nav-tabs nav-stacked">
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

