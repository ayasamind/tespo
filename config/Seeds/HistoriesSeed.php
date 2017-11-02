<?php
use Migrations\AbstractSeed;

/**
 * Categories seed.
 */
class HistoriesSeed extends AbstractSeed
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
                'comment' => 'comment1',
                'body' => 'body1',
                'article_id' => '1',
                'created' => date('Y-m-d H:i:s')
            ],
        ];
        $table = $this->table('histories');
        $table->insert($data)->save();
    }
}
