<?php

use yii\db\Migration;

/**
 * Class m191212_203755_fill_tickets_table
 */
class m191212_203755_fill_tickets_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('tickets',[
            'ownerId' => 6,
            'flyingFrom' => 'Tehran',
            'flyingTo' => 'Mashhad',
            'departureDate' => '2019-12-15',
            'departureTime' => '11:30:00',
            'adults' => 2,
            'children' => 0,
            'infants' => 0,
            'class' => 'business',
            'airline' => 'Mahan',
            'price' => 600,
        ]);
        $this->insert('tickets',[
            'ownerId' => 2,
            'flyingFrom' => 'Tehran',
            'flyingTo' => 'Esfahan',
            'departureDate' => '2019-11-07',
            'departureTime' => '15:45:00',
            'adults' => 1,
            'children' => 1,
            'infants' => 0,
            'class' => 'economy',
            'airline' => 'Iran Air',
            'price' => 500,
        ]);
        $this->insert('tickets',[
            'ownerId' => 8,
            'flyingFrom' => 'Tabriz',
            'flyingTo' => 'Shiraz',
            'departureDate' => '2020-01-05',
            'departureTime' => '22:00:00',
            'adults' => 1,
            'class' => 'economy',
            'airline' => 'Qeshm Air',
            'price' => 350,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete('tickets');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191212_203755_fill_tickets_table cannot be reverted.\n";

        return false;
    }
    */
}
