<?php
use Migrations\AbstractSeed;

/**
 * ArticlesTags seed.
 */
class ArticlesTagsSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'article_id' => 1,
                'tag_id' => 1,
                'created' => date('Y-m-d H:i:s')
            ],
            [
                'article_id' => 2,
                'tag_id' => 2,
                'created' => date('Y-m-d H:i:s')
            ],
            [
                'article_id' => 3,
                'tag_id' => 3,
                'created' => date('Y-m-d H:i:s')
            ]
        ];

        $table = $this->table('articles_tags');
        $table->insert($data)->save();
    }
}
