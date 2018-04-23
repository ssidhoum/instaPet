<?php
/**
 * @var \App\View\AppView $this
 */
?>
<div class="posts form large-9 medium-8 columns content">
    <?= $this->Form->create($post) ?>
    <fieldset>
        <legend><?= __('Edit Post') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('content');
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('photo',['type' => 'file', 'label'=>'Photo:']);
            echo $this->Form->control('pets._ids', ['options' => $pets]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
