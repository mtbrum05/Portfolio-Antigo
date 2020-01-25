<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Servico $servico
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Servico'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="servico form large-9 medium-8 columns content">
    <?= $this->Form->create($servico) ?>
    <fieldset>
        <legend><?= __('Add Servico') ?></legend>
        <?php
            echo $this->Form->control('ativo');
            echo $this->Form->control('descricao');
            echo $this->Form->control('cupomVenda_codigo');
            echo $this->Form->control('funcionario_codigo');
            echo $this->Form->control('item_codigo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
