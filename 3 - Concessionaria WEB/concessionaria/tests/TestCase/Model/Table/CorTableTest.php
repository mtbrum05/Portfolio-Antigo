<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CorTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CorTable Test Case
 */
class CorTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CorTable
     */
    public $Cor;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Cor',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Cor') ? [] : ['className' => CorTable::class];
        $this->Cor = TableRegistry::getTableLocator()->get('Cor', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Cor);

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
