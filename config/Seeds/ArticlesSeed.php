<?php
use Migrations\AbstractSeed;

/**
 * Articles seed.
 */
class ArticlesSeed extends AbstractSeed
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
                'title' => 'タイトル1',
                'body' => '質問その1',
                'templates' => 'メールテンプレート1',
                'commit_log' => 'コミットログ1',
                'category_id' => 1,
                'user_id' => 1,
                'created' => date('Y-m-d H:i:s')
            ],
            [
                'title' => 'タイトル2',
                'body' => '質問その2',
                'templates' => 'メールテンプレート2',
                'commit_log' => 'コミットログ2',
                'category_id' => 2,
                'user_id' => 2,
                'created' => date('Y-m-d H:i:s')
            ],
            [
                'title' => 'タイトル3',
                'body' => '質問その3',
                'templates' => 'メールテンプレート3',
                'commit_log' => 'コミットログ3',
                'category_id' => 3,
                'user_id' => 3,
                'created' => date('Y-m-d H:i:s')
            ]
        ];

        $table = $this->table('articles');
        $table->insert($data)->save();
    }
}
