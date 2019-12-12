<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tickets}}`.
 */
class m191211_144517_create_tickets_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        $this->createTable('{{%tickets}}', [
            'id' => $this->primaryKey(),
            'ownerId' => $this->integer()->notNull(),
            'flyingFrom' => $this->string()->notNull(),
            'flyingTo' => $this->string()->notNull(),
            'departureDate' => $this->date()->notNull(),
            'departureTime' => $this->time()->notNull(),
            'adults' => $this->tinyInteger()->unsigned()->notNull()->defaultValue(1),
            'children' => $this->tinyInteger()->unsigned()->unsigned()->defaultValue(0),
            'infants' => $this->tinyInteger()->unsigned()->unsigned()->defaultValue(0),
            'class' => $this->string(),
            'airline' => $this->string(),
            'price' => $this->Integer()->unsigned(),
            'purchaseDate' => $this->timestamp()
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%tickets}}');
    }
}
