<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fabricanteitem[]|\Cake\Collection\CollectionInterface $fabricanteitem
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Fabricanteitem'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="fabricanteitem index large-9 medium-8 columns content">
    <h3><?= __('Fabricanteitem') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('codigo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($fabricanteitem as $fabricanteitem): ?>
            <tr>
                <td><?= $this->Number->format($fabricanteitem->codigo) ?></td>
                <td><?= h($fabricanteitem->nome) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $fabricanteitem->codigo]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $fabricanteitem->codigo]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $fabricanteitem->codigo], ['confirm' => __('Are you sure you want to delete # {0}?', $fabricanteitem->codigo)]) ?>
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
