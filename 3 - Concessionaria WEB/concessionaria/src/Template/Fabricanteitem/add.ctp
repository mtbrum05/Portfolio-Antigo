<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fabricanteitem $fabricanteitem
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Fabricanteitem'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="fabricanteitem form large-9 medium-8 columns content">
    <?= $this->Form->create($fabricanteitem) ?>
    <fieldset>
        <legend><?= __('Add Fabricanteitem') ?></legend>
        <?php
            echo $this->Form->control('nome');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
