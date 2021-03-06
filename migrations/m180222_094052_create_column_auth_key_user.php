<?php

use yii\db\Migration;

/**
 * Class m180222_094052_create_column_auth_key_user
 */
class m180222_094052_create_column_auth_key_user extends Migration
{
    /**
     * @inheritdoc
     */
    public function up() {
        $this->addColumn('user', 'auth_key', $this->string(60)->notNull()->unique()->after('contact_phone'));
    }
    
    public function down() {
        $this->dropColumn('user', 'auth_key');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180222_094052_create_column_auth_key_user cannot be reverted.\n";

        return false;
    }
    */
}
