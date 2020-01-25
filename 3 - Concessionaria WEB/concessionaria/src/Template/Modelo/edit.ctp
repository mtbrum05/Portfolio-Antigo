<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Modelo $modelo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $modelo->codigo],
                ['confirm' => __('Are you sure you want to delete # {0}?', $modelo->codigo)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Modelo'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="modelo form large-9 medium-8 columns content">
    <?= $this->Form->create($modelo) ?>
    <fieldset>
        <legend><?= __('Edit Modelo') ?></legend>
        <?php
            echo $this->Form->control('nome');
            echo $this->Form->control('quantidade');
            echo $this->Form->control('cor_codigo');
            echo $this->Form->control('fabricantecarro_codigo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
