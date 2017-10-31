<?php
use Migrations\AbstractSeed;

/**
 * Categories seed.
 */
class CategoriesSeed extends AbstractSeed
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
                'name' => 'category1',
                'created' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'category2',
                'created' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'category3',
                'created' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'category4',
                'created' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'category5',
                'created' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'category6',
                'created' => date('Y-m-d H:i:s')
            ]
        ];

        $table = $this->table('categories');
        $table->insert($data)->save();
    }
}
