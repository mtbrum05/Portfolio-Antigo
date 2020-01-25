<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VeiculoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VeiculoTable Test Case
 */
class VeiculoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\VeiculoTable
     */
    public $Veiculo;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Veiculo',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Veiculo') ? [] : ['className' => VeiculoTable::class];
        $this->Veiculo = TableRegistry::getTableLocator()->get('Veiculo', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Veiculo);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
