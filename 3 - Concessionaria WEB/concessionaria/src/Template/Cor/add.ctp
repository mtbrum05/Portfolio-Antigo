<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cor $cor
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Cor'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="cor form large-9 medium-8 columns content">
    <?= $this->Form->create($cor) ?>
    <fieldset>
        <legend><?= __('Add Cor') ?></legend>
        <?php
            echo $this->Form->control('cor');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
