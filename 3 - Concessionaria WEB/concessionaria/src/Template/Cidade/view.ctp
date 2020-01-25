<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cidade $cidade
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cidade'), ['action' => 'edit', $cidade->codigo]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cidade'), ['action' => 'delete', $cidade->codigo], ['confirm' => __('Are you sure you want to delete # {0}?', $cidade->codigo)]) ?> </li>
        <li><?= $this->Html->link(__('List Cidade'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cidade'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cidade view large-9 medium-8 columns content">
    <h3><?= h($cidade->codigo) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($cidade->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Codigo') ?></th>
            <td><?= $this->Number->format($cidade->codigo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado Codigo') ?></th>
            <td><?= $this->Number->format($cidade->estado_codigo) ?></td>
        </tr>
    </table>
</div>
