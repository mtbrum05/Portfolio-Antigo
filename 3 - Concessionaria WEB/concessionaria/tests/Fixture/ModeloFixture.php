<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ModeloFixture
 */
class ModeloFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'modelo';
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'codigo' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'nome' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'quantidade' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'cor_codigo' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'fabricantecarro_codigo' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'FKhy6wbjthjrrp3hev8cnp5ffth' => ['type' => 'index', 'columns' => ['cor_codigo'], 'length' => []],
            'FK6hlkvy5khdxke7ifrwiihu47r' => ['type' => 'index', 'columns' => ['fabricantecarro_codigo'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['codigo'], 'length' => []],
            'FK6hlkvy5khdxke7ifrwiihu47r' => ['type' => 'foreign', 'columns' => ['fabricantecarro_codigo'], 'references' => ['fabricantecarro', 'codigo'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FKhy6wbjthjrrp3hev8cnp5ffth' => ['type' => 'foreign', 'columns' => ['cor_codigo'], 'references' => ['cor', 'codigo'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'nome' => 'Lorem ipsum dolor sit amet',
                'quantidade' => 1,
                'cor_codigo' => 1,
                'fabricantecarro_codigo' => 1,
            ],
        ];
        parent::init();
    }
}
