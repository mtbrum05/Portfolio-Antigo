<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CupomvendaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CupomvendaTable Test Case
 */
class CupomvendaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CupomvendaTable
     */
    public $Cupomvenda;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Cupomvenda',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Cupomvenda') ? [] : ['className' => CupomvendaTable::class];
        $this->Cupomvenda = TableRegistry::getTableLocator()->get('Cupomvenda', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Cupomvenda);

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
