<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FabricantecarroTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FabricantecarroTable Test Case
 */
class FabricantecarroTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FabricantecarroTable
     */
    public $Fabricantecarro;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Fabricantecarro',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Fabricantecarro') ? [] : ['className' => FabricantecarroTable::class];
        $this->Fabricantecarro = TableRegistry::getTableLocator()->get('Fabricantecarro', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Fabricantecarro);

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
