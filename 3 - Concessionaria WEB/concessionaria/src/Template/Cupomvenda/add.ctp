<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cupomvenda $cupomvenda
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Cupomvenda'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="cupomvenda form large-9 medium-8 columns content">
    <?= $this->Form->create($cupomvenda) ?>
    <fieldset>
        <legend><?= __('Add Cupomvenda') ?></legend>
        <?php
            echo $this->Form->control('descricao');
            echo $this->Form->control('cliente_codigo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
