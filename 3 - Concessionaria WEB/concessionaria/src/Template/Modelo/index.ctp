<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Modelo[]|\Cake\Collection\CollectionInterface $modelo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Modelo'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="modelo index large-9 medium-8 columns content">
    <h3><?= __('Modelo') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('codigo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('quantidade') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cor_codigo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fabricantecarro_codigo') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($modelo as $modelo): ?>
            <tr>
                <td><?= $this->Number->format($modelo->codigo) ?></td>
                <td><?= h($modelo->nome) ?></td>
                <td><?= $this->Number->format($modelo->quantidade) ?></td>
                <td><?= $this->Number->format($modelo->cor_codigo) ?></td>
                <td><?= $this->Number->format($modelo->fabricantecarro_codigo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $modelo->codigo]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $modelo->codigo]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $modelo->codigo], ['confirm' => __('Are you sure you want to delete # {0}?', $modelo->codigo)]) ?>
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
