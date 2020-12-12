<?php
use Migrations\AbstractMigration;

class AddColumnToBiditems extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('biditems');
        $table->addColumn('detail', 'string', [
            'default' => '',
            'limit' => 255,
            'null' => true,
            'after' => 'name',
        ]);
        $table->addColumn('image', 'string', [
            'default' => '',
            'limit' => 255,
            'null' => true,
            'after' => 'detail',
        ]);
        $table->update();
    }
}
