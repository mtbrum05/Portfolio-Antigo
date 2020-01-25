<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Estado $estado
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Estado'), ['action' => 'edit', $estado->codigo]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Estado'), ['action' => 'delete', $estado->codigo], ['confirm' => __('Are you sure you want to delete # {0}?', $estado->codigo)]) ?> </li>
        <li><?= $this->Html->link(__('List Estado'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Estado'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="estado view large-9 medium-8 columns content">
    <h3><?= h($estado->codigo) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($estado->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sigla') ?></th>
            <td><?= h($estado->sigla) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Codigo') ?></th>
            <td><?= $this->Number->format($estado->codigo) ?></td>
        </tr>
    </table>
</div>
