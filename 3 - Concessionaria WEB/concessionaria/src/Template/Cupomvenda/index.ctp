<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cupomvenda[]|\Cake\Collection\CollectionInterface $cupomvenda
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Cupomvenda'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cupomvenda index large-9 medium-8 columns content">
    <h3><?= __('Cupomvenda') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('codigo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cliente_codigo') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cupomvenda as $cupomvenda): ?>
            <tr>
                <td><?= $this->Number->format($cupomvenda->codigo) ?></td>
                <td><?= h($cupomvenda->descricao) ?></td>
                <td><?= $this->Number->format($cupomvenda->cliente_codigo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $cupomvenda->codigo]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cupomvenda->codigo]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cupomvenda->codigo], ['confirm' => __('Are you sure you want to delete # {0}?', $cupomvenda->codigo)]) ?>
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
