<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Item $item
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $item->codigo],
                ['confirm' => __('Are you sure you want to delete # {0}?', $item->codigo)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Item'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="item form large-9 medium-8 columns content">
    <?= $this->Form->create($item) ?>
    <fieldset>
        <legend><?= __('Edit Item') ?></legend>
        <?php
            echo $this->Form->control('descricao');
            echo $this->Form->control('nome');
            echo $this->Form->control('quantidade');
            echo $this->Form->control('fabricanteItem_codigo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
