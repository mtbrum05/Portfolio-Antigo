<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Modelo $modelo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Modelo'), ['action' => 'edit', $modelo->codigo]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Modelo'), ['action' => 'delete', $modelo->codigo], ['confirm' => __('Are you sure you want to delete # {0}?', $modelo->codigo)]) ?> </li>
        <li><?= $this->Html->link(__('List Modelo'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Modelo'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="modelo view large-9 medium-8 columns content">
    <h3><?= h($modelo->codigo) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($modelo->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Codigo') ?></th>
            <td><?= $this->Number->format($modelo->codigo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quantidade') ?></th>
            <td><?= $this->Number->format($modelo->quantidade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cor Codigo') ?></th>
            <td><?= $this->Number->format($modelo->cor_codigo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fabricantecarro Codigo') ?></th>
            <td><?= $this->Number->format($modelo->fabricantecarro_codigo) ?></td>
        </tr>
    </table>
</div>
