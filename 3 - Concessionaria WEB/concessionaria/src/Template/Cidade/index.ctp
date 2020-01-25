<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cidade[]|\Cake\Collection\CollectionInterface $cidade
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Cidade'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cidade index large-9 medium-8 columns content">
    <h3><?= __('Cidade') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('codigo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estado_codigo') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cidade as $cidade): ?>
            <tr>
                <td><?= $this->Number->format($cidade->codigo) ?></td>
                <td><?= h($cidade->nome) ?></td>
                <td><?= $this->Number->format($cidade->estado_codigo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $cidade->codigo]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cidade->codigo]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cidade->codigo], ['confirm' => __('Are you sure you want to delete # {0}?', $cidade->codigo)]) ?>
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
