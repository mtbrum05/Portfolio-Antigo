<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fabricantecarro $fabricantecarro
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Fabricantecarro'), ['action' => 'edit', $fabricantecarro->codigo]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Fabricantecarro'), ['action' => 'delete', $fabricantecarro->codigo], ['confirm' => __('Are you sure you want to delete # {0}?', $fabricantecarro->codigo)]) ?> </li>
        <li><?= $this->Html->link(__('List Fabricantecarro'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fabricantecarro'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="fabricantecarro view large-9 medium-8 columns content">
    <h3><?= h($fabricantecarro->codigo) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($fabricantecarro->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Codigo') ?></th>
            <td><?= $this->Number->format($fabricantecarro->codigo) ?></td>
        </tr>
    </table>
</div>
