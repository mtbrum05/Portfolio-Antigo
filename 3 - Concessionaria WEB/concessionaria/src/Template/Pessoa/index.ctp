<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pessoa[]|\Cake\Collection\CollectionInterface $pessoa
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Pessoa'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pessoa index large-9 medium-8 columns content">
    <h3><?= __('Pessoa') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('codigo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bairro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('celular') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cep') ?></th>
                <th scope="col"><?= $this->Paginator->sort('complemento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cpf') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('numero') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rg') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rua') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telefone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cidade_codigo') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pessoa as $pessoa): ?>
            <tr>
                <td><?= $this->Number->format($pessoa->codigo) ?></td>
                <td><?= h($pessoa->bairro) ?></td>
                <td><?= h($pessoa->celular) ?></td>
                <td><?= h($pessoa->cep) ?></td>
                <td><?= h($pessoa->complemento) ?></td>
                <td><?= h($pessoa->cpf) ?></td>
                <td><?= h($pessoa->email) ?></td>
                <td><?= h($pessoa->nome) ?></td>
                <td><?= $this->Number->format($pessoa->numero) ?></td>
                <td><?= h($pessoa->rg) ?></td>
                <td><?= h($pessoa->rua) ?></td>
                <td><?= h($pessoa->telefone) ?></td>
                <td><?= $this->Number->format($pessoa->cidade_codigo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $pessoa->codigo]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pessoa->codigo]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pessoa->codigo], ['confirm' => __('Are you sure you want to delete # {0}?', $pessoa->codigo)]) ?>
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
