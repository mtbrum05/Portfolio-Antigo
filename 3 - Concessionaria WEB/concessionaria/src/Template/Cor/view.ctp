<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cor $cor
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cor'), ['action' => 'edit', $cor->codigo]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cor'), ['action' => 'delete', $cor->codigo], ['confirm' => __('Are you sure you want to delete # {0}?', $cor->codigo)]) ?> </li>
        <li><?= $this->Html->link(__('List Cor'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cor'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cor view large-9 medium-8 columns content">
    <h3><?= h($cor->codigo) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Cor') ?></th>
            <td><?= h($cor->cor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Codigo') ?></th>
            <td><?= $this->Number->format($cor->codigo) ?></td>
        </tr>
    </table>
</div>
