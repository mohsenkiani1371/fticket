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
//			If there's a problem in validating date and time when working on front end, disable following validations.
           ['departureDate', 'date'],
           ['departureTime', 'time']
        ];
    }
}