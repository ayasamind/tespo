<?php
use Migrations\AbstractMigration;

class AddImageToUsers extends AbstractMigration
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
        $table = $this->table('users');
        $table->addColumn('image', 'text', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('image_url', 'text', [
            'default' => null,
            'null' => true,
        ]);
        $table->update();
    }
}
