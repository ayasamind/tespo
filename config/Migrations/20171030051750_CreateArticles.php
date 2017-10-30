<?php
use Migrations\AbstractMigration;

class CreateArticles extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('articles');
        $table->addColumn('title', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('body', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
        ]);
        $table->addColumn('templates', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
        ]);
        $table->addColumn('commit_log', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
        ]);
        $table->addColumn('category_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('user_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('created', 'timestamp', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('modified_user_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => true,
        ]);
        $table->addColumn('modified', 'timestamp', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('delete_flg', 'boolean', [
            'default' => false,
            'null' => false,
        ]);
        $table->addColumn('deleted', 'timestamp', [
            'default' => null,
            'null' => true,
        ]);
        $table->addIndex([
            'id',
        ], [
            'name' => 'BY_ID',
            'unique' => false,
        ]);
        $table->addIndex([
            'title',
        ], [
            'name' => 'BY_TITLE',
            'unique' => false,
        ]);
        $table->addIndex([
            'body',
        ], [
            'name' => 'BY_BODY',
            'unique' => false,
        ]);
        $table->addIndex([
            'templates',
        ], [
            'name' => 'BY_TEMPLATES',
            'unique' => false,
        ]);
        $table->addIndex([
            'category_id',
        ], [
            'name' => 'BY_CATEGORY_ID',
            'unique' => false,
        ]);
        $table->create();
    }
}
