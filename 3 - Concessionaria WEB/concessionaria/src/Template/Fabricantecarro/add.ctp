<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fabricantecarro $fabricantecarro
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Fabricantecarro'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="fabricantecarro form large-9 medium-8 columns content">
    <?= $this->Form->create($fabricantecarro) ?>
    <fieldset>
        <legend><?= __('Add Fabricantecarro') ?></legend>
        <?php
            echo $this->Form->control('nome');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
