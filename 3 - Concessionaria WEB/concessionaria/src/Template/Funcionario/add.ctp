<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Funcionario $funcionario
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Funcionario'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="funcionario form large-9 medium-8 columns content">
    <?= $this->Form->create($funcionario) ?>
    <fieldset>
        <legend><?= __('Add Funcionario') ?></legend>
        <?php
            echo $this->Form->control('ativo');
            echo $this->Form->control('tipo');
            echo $this->Form->control('pessoa_codigo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
