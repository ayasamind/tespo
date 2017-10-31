<?php
use Migrations\AbstractMigration;

class CreateTags extends AbstractMigration
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
        $table = $this->table('tags');
        $table->addColumn('name', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addIndex([
            'name',
        ], [
            'unique' => true,
        ]);
        $table->addColumn('created', 'timestamp', [
            'default' => null,
        ]);
        $table->addColumn('modified', 'timestamp', [
            'default' => null,
            'null' => true,
        ]);
        $table->create();
    }
}
