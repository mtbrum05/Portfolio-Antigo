<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FuncionarioFixture
 */
class FuncionarioFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'funcionario';
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'codigo' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'ativo' => ['type' => 'string', 'length' => null, 'null' => false, 'default' => null, 'collate' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'tipo' => ['type' => 'string', 'length' => 1, 'fixed' => true, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null],
        'pessoa_codigo' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'FKmx5ooktj8cc6iuy6puti3eq7h' => ['type' => 'index', 'columns' => ['pessoa_codigo'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['codigo'], 'length' => []],
            'FKmx5ooktj8cc6iuy6puti3eq7h' => ['type' => 'foreign', 'columns' => ['pessoa_codigo'], 'references' => ['pessoa', 'codigo'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'tipo' => 'L',
                'pessoa_codigo' => 1,
            ],
        ];
        parent::init();
    }
}
