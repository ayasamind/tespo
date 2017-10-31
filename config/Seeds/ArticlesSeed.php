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
            ],
            [
                'title' => 'タイトル4',
                'body' => '質問その4',
                'templates' => 'メールテンプレート4',
                'commit_log' => 'コミットログ4',
                'category_id' => 4,
                'user_id' => 4,
                'created' => date('Y-m-d H:i:s')
            ],
            [
                'title' => 'タイトル5',
                'body' => '質問その5',
                'templates' => 'メールテンプレート5',
                'commit_log' => 'コミットログ5',
                'category_id' => 5,
                'user_id' => 5,
                'created' => date('Y-m-d H:i:s')
            ],
            [
                'title' => 'タイトル6',
                'body' => '質問その6',
                'templates' => 'メールテンプレート6',
                'commit_log' => 'コミットログ6',
                'category_id' => 6,
                'user_id' => 6,
                'created' => date('Y-m-d H:i:s')
            ]
        ];

        $table = $this->table('articles');
        $table->insert($data)->save();
    }
}
