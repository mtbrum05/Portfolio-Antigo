<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fabricanteitem $fabricanteitem
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Fabricanteitem'), ['action' => 'edit', $fabricanteitem->codigo]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Fabricanteitem'), ['action' => 'delete', $fabricanteitem->codigo], ['confirm' => __('Are you sure you want to delete # {0}?', $fabricanteitem->codigo)]) ?> </li>
        <li><?= $this->Html->link(__('List Fabricanteitem'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fabricanteitem'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="fabricanteitem view large-9 medium-8 columns content">
    <h3><?= h($fabricanteitem->codigo) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($fabricanteitem->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Codigo') ?></th>
            <td><?= $this->Number->format($fabricanteitem->codigo) ?></td>
        </tr>
    </table>
</div>
