<?php
use Migrations\AbstractSeed;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
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
                'email' => 'example1@gmail.com',
                'password' => 'example1',
                'name' => 'example1',
                'role' => 0,
                'created' => date('Y-m-d H:i:s'),
                'image' => 'miho.jpg',
                'image_url' => 'files/Users/image/'
            ],
            [
                'email' => 'example2@gmail.com',
                'password' => 'example2',
                'name' => 'example2',
                'role' => 0,
                'created' => date('Y-m-d H:i:s')
            ],
            [
                'email' => 'example3@gmail.com',
                'password' => 'example3',
                'name' => 'example3',
                'role' => 0,
                'created' => date('Y-m-d H:i:s')
            ],
            [
                'email' => 'example4@gmail.com',
                'password' => 'example4',
                'name' => 'example4',
                'role' => 0,
                'created' => date('Y-m-d H:i:s'),
                'image' => 'miho.jpg',
                'image_url' => 'files/Users/image/'
            ],
            [
                'email' => 'example5@gmail.com',
                'password' => 'example5',
                'name' => 'example5',
                'role' => 0,
                'created' => date('Y-m-d H:i:s'),
                'image' => 'miho.jpg',
                'image_url' => 'files/Users/image/'
            ],
            [
                'email' => 'example6@gmail.com',
                'password' => 'example6',
                'name' => 'example6',
                'role' => 0,
                'created' => date('Y-m-d H:i:s'),
                'image' => 'miho.jpg',
                'image_url' => 'files/Users/image/'
            ],
            [
                'email' => 'example7@gmail.com',
                'password' => 'example7',
                'name' => 'example7',
                'role' => 0,
                'created' => date('Y-m-d H:i:s'),
                'image' => 'miho.jpg',
                'image_url' => 'files/Users/image/'
            ],
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
