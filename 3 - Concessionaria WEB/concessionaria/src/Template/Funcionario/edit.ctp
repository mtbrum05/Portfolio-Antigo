<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Funcionario $funcionario
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $funcionario->codigo],
                ['confirm' => __('Are you sure you want to delete # {0}?', $funcionario->codigo)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Funcionario'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="funcionario form large-9 medium-8 columns content">
    <?= $this->Form->create($funcionario) ?>
    <fieldset>
        <legend><?= __('Edit Funcionario') ?></legend>
        <?php
            echo $this->Form->control('ativo');
            echo $this->Form->control('tipo');
            echo $this->Form->control('pessoa_codigo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
