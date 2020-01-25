<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cupomvenda $cupomvenda
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cupomvenda'), ['action' => 'edit', $cupomvenda->codigo]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cupomvenda'), ['action' => 'delete', $cupomvenda->codigo], ['confirm' => __('Are you sure you want to delete # {0}?', $cupomvenda->codigo)]) ?> </li>
        <li><?= $this->Html->link(__('List Cupomvenda'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cupomvenda'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cupomvenda view large-9 medium-8 columns content">
    <h3><?= h($cupomvenda->codigo) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($cupomvenda->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Codigo') ?></th>
            <td><?= $this->Number->format($cupomvenda->codigo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cliente Codigo') ?></th>
            <td><?= $this->Number->format($cupomvenda->cliente_codigo) ?></td>
        </tr>
    </table>
</div>
