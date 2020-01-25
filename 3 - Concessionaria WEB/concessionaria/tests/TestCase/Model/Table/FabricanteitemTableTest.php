<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FabricanteitemTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FabricanteitemTable Test Case
 */
class FabricanteitemTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FabricanteitemTable
     */
    public $Fabricanteitem;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Fabricanteitem',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Fabricanteitem') ? [] : ['className' => FabricanteitemTable::class];
        $this->Fabricanteitem = TableRegistry::getTableLocator()->get('Fabricanteitem', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Fabricanteitem);

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
