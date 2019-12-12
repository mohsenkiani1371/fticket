<?php

namespace app\models;

use yii\db\ActiveRecord;

class Ticket extends ActiveRecord
{
    public static function tableName ()
    {
        return 'tickets';
    }

    public function rules()
    {
        return [
            [['ownerId', 'flyingFrom', 'flyingTo', 'departureDate', 'departureTime', 'adults', 'airline', 'price'], 'required'],
            [['ownerId', 'adults', 'children', 'infants', 'price'], 'integer'],
// There is some problem in validating date and time, so I'm not performing any validation on them until I find a solution.
//            ['departureDate', 'date'],
//            ['departureTime', 'time']
        ];
    }
}