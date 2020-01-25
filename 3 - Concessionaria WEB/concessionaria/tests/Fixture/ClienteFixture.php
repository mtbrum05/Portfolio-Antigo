<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ClienteFixture
 */
class ClienteFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'cliente';
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'codigo' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'ativo' => ['type' => 'string', 'length' => null, 'null' => false, 'default' => null, 'collate' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'pessoa_codigo' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'veiculo_codigo' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'FKc4lj33kirbp7g6ml69pifsad3' => ['type' => 'index', 'columns' => ['pessoa_codigo'], 'length' => []],
            'FK1rndkmm5rexx4d0tpqhlgbpy0' => ['type' => 'index', 'columns' => ['veiculo_codigo'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['codigo'], 'length' => []],
            'FK1rndkmm5rexx4d0tpqhlgbpy0' => ['type' => 'foreign', 'columns' => ['veiculo_codigo'], 'references' => ['veiculo', 'codigo'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FKc4lj33kirbp7g6ml69pifsad3' => ['type' => 'foreign', 'columns' => ['pessoa_codigo'], 'references' => ['pessoa', 'codigo'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'pessoa_codigo' => 1,
                'veiculo_codigo' => 1,
            ],
        ];
        parent::init();
    }
}
