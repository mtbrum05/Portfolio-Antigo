<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * VeiculoFixture
 */
class VeiculoFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'veiculo';
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'codigo' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'chassi' => ['type' => 'string', 'length' => 30, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'placa' => ['type' => 'string', 'length' => 30, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'cliente_codigo' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'cor_codigo' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'modelo_codigo' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'FK2tncvg64rhf6o2druhmf36plc' => ['type' => 'index', 'columns' => ['cliente_codigo'], 'length' => []],
            'FK12e8tuyejsnoji9qrm5m6b8ok' => ['type' => 'index', 'columns' => ['cor_codigo'], 'length' => []],
            'FKfy11cfexfo7a2fx7285xeyj38' => ['type' => 'index', 'columns' => ['modelo_codigo'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['codigo'], 'length' => []],
            'FK12e8tuyejsnoji9qrm5m6b8ok' => ['type' => 'foreign', 'columns' => ['cor_codigo'], 'references' => ['cor', 'codigo'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK2tncvg64rhf6o2druhmf36plc' => ['type' => 'foreign', 'columns' => ['cliente_codigo'], 'references' => ['cliente', 'codigo'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FKfy11cfexfo7a2fx7285xeyj38' => ['type' => 'foreign', 'columns' => ['modelo_codigo'], 'references' => ['modelo', 'codigo'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'chassi' => 'Lorem ipsum dolor sit amet',
                'placa' => 'Lorem ipsum dolor sit amet',
                'cliente_codigo' => 1,
                'cor_codigo' => 1,
                'modelo_codigo' => 1,
            ],
        ];
        parent::init();
    }
}
