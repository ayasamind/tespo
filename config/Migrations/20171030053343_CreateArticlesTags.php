<?php
use Migrations\AbstractMigration;

class CreateArticlesTags extends AbstractMigration
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
        $table = $this->table('articles_tags');
        $table->addColumn('article_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('tag_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addIndex([
            'article_id',
        ], [
            'name' => 'BY_ARTICLE_ID',
            'unique' => false,
        ]);
        $table->addIndex([
            'tag_id',
        ], [
            'name' => 'BY_TAG_ID',
            'unique' => false,
        ]);
        $table->create();
    }
}
