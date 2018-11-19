<?php

use yii\db\Migration;

/**
 * Class m181119_075507_add_user_email_confirm_token
 */
class m181119_075507_add_user_email_confirm_token extends Migration
{
    /* неявно заключены в транзакции. В результате, если какая-либо операция в этих методах не удается, все предыдущие операции будут отменены автоматически
    public function safeUp()
    {

    }

    public function safeDown()
    {
        echo "m181119_075507_add_user_email_confirm_token cannot be reverted.\n";

        return false;
    } */


    public function up()
    {
        $this->addColumn('{{%user}}', 'email_confirm_token', $this->string()->unique()->after('email'));
    }


    public function down()
    {
        $this->dropColumn('{{%user}}', 'email_confirm_token');
    }
}
