<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Funcionario[]|\Cake\Collection\CollectionInterface $funcionario
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Funcionario'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="funcionario index large-9 medium-8 columns content">
    <h3><?= __('Funcionario') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('codigo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ativo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pessoa_codigo') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($funcionario as $funcionario): ?>
            <tr>
                <td><?= $this->Number->format($funcionario->codigo) ?></td>
                <td><?= h($funcionario->ativo) ?></td>
                <td><?= h($funcionario->tipo) ?></td>
                <td><?= $this->Number->format($funcionario->pessoa_codigo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $funcionario->codigo]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $funcionario->codigo]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $funcionario->codigo], ['confirm' => __('Are you sure you want to delete # {0}?', $funcionario->codigo)]) ?>
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
