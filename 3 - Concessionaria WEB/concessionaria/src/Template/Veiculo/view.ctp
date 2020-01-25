<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Veiculo $veiculo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Veiculo'), ['action' => 'edit', $veiculo->codigo]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Veiculo'), ['action' => 'delete', $veiculo->codigo], ['confirm' => __('Are you sure you want to delete # {0}?', $veiculo->codigo)]) ?> </li>
        <li><?= $this->Html->link(__('List Veiculo'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Veiculo'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="veiculo view large-9 medium-8 columns content">
    <h3><?= h($veiculo->codigo) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Chassi') ?></th>
            <td><?= h($veiculo->chassi) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Placa') ?></th>
            <td><?= h($veiculo->placa) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Codigo') ?></th>
            <td><?= $this->Number->format($veiculo->codigo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cliente Codigo') ?></th>
            <td><?= $this->Number->format($veiculo->cliente_codigo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cor Codigo') ?></th>
            <td><?= $this->Number->format($veiculo->cor_codigo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modelo Codigo') ?></th>
            <td><?= $this->Number->format($veiculo->modelo_codigo) ?></td>
        </tr>
    </table>
</div>
