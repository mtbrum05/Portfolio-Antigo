<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Veiculo[]|\Cake\Collection\CollectionInterface $veiculo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Veiculo'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="veiculo index large-9 medium-8 columns content">
    <h3><?= __('Veiculo') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('codigo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('chassi') ?></th>
                <th scope="col"><?= $this->Paginator->sort('placa') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cliente_codigo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cor_codigo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modelo_codigo') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($veiculo as $veiculo): ?>
            <tr>
                <td><?= $this->Number->format($veiculo->codigo) ?></td>
                <td><?= h($veiculo->chassi) ?></td>
                <td><?= h($veiculo->placa) ?></td>
                <td><?= $this->Number->format($veiculo->cliente_codigo) ?></td>
                <td><?= $this->Number->format($veiculo->cor_codigo) ?></td>
                <td><?= $this->Number->format($veiculo->modelo_codigo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $veiculo->codigo]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $veiculo->codigo]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $veiculo->codigo], ['confirm' => __('Are you sure you want to delete # {0}?', $veiculo->codigo)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
