<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ServicoFixture
 */
class ServicoFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'servico';
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'codigo' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'ativo' => ['type' => 'string', 'length' => null, 'null' => false, 'default' => null, 'collate' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'descricao' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'cupomVenda_codigo' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'funcionario_codigo' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'item_codigo' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'FK9wgwy6pnn3k7rb1dt8a2nrnne' => ['type' => 'index', 'columns' => ['cupomVenda_codigo'], 'length' => []],
            'FK3e38ac9yr93q7ecythc9neho4' => ['type' => 'index', 'columns' => ['funcionario_codigo'], 'length' => []],
            'FKjkyrw6jxqf93gpuvtshhfw4tm' => ['type' => 'index', 'columns' => ['item_codigo'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['codigo'], 'length' => []],
            'FK3e38ac9yr93q7ecythc9neho4' => ['type' => 'foreign', 'columns' => ['funcionario_codigo'], 'references' => ['funcionario', 'codigo'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK9wgwy6pnn3k7rb1dt8a2nrnne' => ['type' => 'foreign', 'columns' => ['cupomVenda_codigo'], 'references' => ['cupomvenda', 'codigo'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FKjkyrw6jxqf93gpuvtshhfw4tm' => ['type' => 'foreign', 'columns' => ['item_codigo'], 'references' => ['item', 'codigo'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8mb4_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'codigo' => 1,
                'ativo' => 'Lorem ipsum dolor sit amet',
                'descricao' => 'Lorem ipsum dolor sit amet',
                'cupomVenda_codigo' => 1,
                'funcionario_codigo' => 1,
                'item_codigo' => 1,
            ],
        ];
        parent::init();
    }
}
