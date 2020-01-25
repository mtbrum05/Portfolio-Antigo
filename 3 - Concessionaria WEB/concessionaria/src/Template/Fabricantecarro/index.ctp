<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fabricantecarro[]|\Cake\Collection\CollectionInterface $fabricantecarro
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Fabricantecarro'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="fabricantecarro index large-9 medium-8 columns content">
    <h3><?= __('Fabricantecarro') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('codigo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($fabricantecarro as $fabricantecarro): ?>
            <tr>
                <td><?= $this->Number->format($fabricantecarro->codigo) ?></td>
                <td><?= h($fabricantecarro->nome) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $fabricantecarro->codigo]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $fabricantecarro->codigo]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $fabricantecarro->codigo], ['confirm' => __('Are you sure you want to delete # {0}?', $fabricantecarro->codigo)]) ?>
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
