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
        $table->addColumn('title', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('body', 'text', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('templates', 'text', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('commit_log', 'text', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('category_id', 'integer', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('user_id', 'integer', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('created', 'timestamp', [
            'default' => null,
        ]);
        $table->addColumn('modified_user_id', 'integer', [
            'default' => null,
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
            'title',
        ], [
            'unique' => false,
        ]);
        $table->addIndex([
            'templates',
        ], [
            'unique' => false,
        ]);
        $table->addIndex([
            'category_id',
        ], [
            'unique' => false,
        ]);
        $table->create();
    }
}
