<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Servico $servico
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Servico'), ['action' => 'edit', $servico->codigo]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Servico'), ['action' => 'delete', $servico->codigo], ['confirm' => __('Are you sure you want to delete # {0}?', $servico->codigo)]) ?> </li>
        <li><?= $this->Html->link(__('List Servico'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Servico'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="servico view large-9 medium-8 columns content">
    <h3><?= h($servico->codigo) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Ativo') ?></th>
            <td><?= h($servico->ativo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($servico->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Codigo') ?></th>
            <td><?= $this->Number->format($servico->codigo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CupomVenda Codigo') ?></th>
            <td><?= $this->Number->format($servico->cupomVenda_codigo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Funcionario Codigo') ?></th>
            <td><?= $this->Number->format($servico->funcionario_codigo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Item Codigo') ?></th>
            <td><?= $this->Number->format($servico->item_codigo) ?></td>
        </tr>
    </table>
</div>
