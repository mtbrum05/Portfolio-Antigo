<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pessoa $pessoa
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Pessoa'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="pessoa form large-9 medium-8 columns content">
    <?= $this->Form->create($pessoa) ?>
    <fieldset>
        <legend><?= __('Add Pessoa') ?></legend>
        <?php
            echo $this->Form->control('bairro');
            echo $this->Form->control('celular');
            echo $this->Form->control('cep');
            echo $this->Form->control('complemento');
            echo $this->Form->control('cpf');
            echo $this->Form->control('email');
            echo $this->Form->control('nome');
            echo $this->Form->control('numero');
            echo $this->Form->control('rg');
            echo $this->Form->control('rua');
            echo $this->Form->control('telefone');
            echo $this->Form->control('cidade_codigo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
