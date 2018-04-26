
<h3>
    <?= h($pet->name) ?>
</h3>

    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($pet->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Species') ?></th>
            <td><?= $pet->has('species') ? $this->Html->link($pet->species->name, ['controller' => 'Species', 'action' => 'view', $pet->species->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gender') ?></th>
            <td><?= h($pet->gender) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $pet->has('user') ? $this->Html->link($pet->user->id, ['controller' => 'Users', 'action' => 'view', $pet->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($pet->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Birthday') ?></th>
            <td><?= h($pet->birthday) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($pet->created) ?></td>
        </tr>
    </table>

    <h4><?= __('Ses photos:') ?></h4>
    <?php foreach ($pet->posts as $posts): ?>
    <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Nom') ?></th>
                <th scope="col"><?= __('Espèce') ?></th>
            </tr>
            <tr>
                <td><?= h($posts->name) ?></td>
                <td></td>
            </tr>              
        </table>
        <?php endforeach; ?>

