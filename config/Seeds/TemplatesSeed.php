<?php
use Migrations\AbstractSeed;

/**
 * Tags seed.
 */
class TemplatesSeed extends AbstractSeed
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
                'body' => 'template1',
                'created' => date('Y-m-d H:i:s')
            ],
            [
                'body' => 'template2',
                'created' => date('Y-m-d H:i:s')
            ],
            [
                'body' => 'templete3',
                'created' => date('Y-m-d H:i:s')
            ],
        ];

        $table = $this->table('templates');
        $table->insert($data)->save();
    }
}
