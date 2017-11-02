<?php
use Migrations\AbstractMigration;

class CreateArticlesTemplates extends AbstractMigration
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
        $table = $this->table('articles_templates');
        $table->addColumn('article_id', 'integer', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('template_id', 'integer', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('created', 'timestamp', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('modified', 'timestamp', [
            'default' => null,
            'null' => true,
        ]);
        $table->addIndex([
            'template_id',
        ], [
            'unique' => false,
        ]);
        $table->create();
    }
}
