<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Species $species
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Supprimer'),
                ['action' => 'delete', $species->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $species->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Index espèces'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="species form large-9 medium-8 columns content">
    <?= $this->Form->create($species) ?>
    <fieldset>
        <legend><?= __('Editer l\'espèce') ?></legend>
        <?php
            echo $this->Form->control('name', ['label'=>'Nom espèce']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
