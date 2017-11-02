<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ArticlesTemplatesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ArticlesTemplatesTable Test Case
 */
class ArticlesTemplatesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ArticlesTemplatesTable
     */
    public $ArticlesTemplates;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.articles_templates',
        'app.articles',
        'app.categories',
        'app.users',
        'app.modified_users',
        'app.tags',
        'app.articles_tags',
        'app.templates'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ArticlesTemplates') ? [] : ['className' => ArticlesTemplatesTable::class];
        $this->ArticlesTemplates = TableRegistry::get('ArticlesTemplates', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ArticlesTemplates);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
