<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->input('firstname', ['label' => 'Prénom']);
            echo $this->Form->input('lastname', ['label' => 'Nom']);
            echo $this->Form->input('email');
            echo $this->Form->input('password', ['label' => 'Mot de passe']);
            echo $this->Form->input('steamId', ['label' => 'Identifiant du compte Steam']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
