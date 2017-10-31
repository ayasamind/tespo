<?php
use Migrations\AbstractSeed;

/**
 * Tags seed.
 */
class TagsSeed extends AbstractSeed
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
                'name' => 'tag1',
                'created' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'tag2',
                'created' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'tag3',
                'created' => date('Y-m-d H:i:s')
            ],
        ];

        $table = $this->table('tags');
        $table->insert($data)->save();
    }
}
