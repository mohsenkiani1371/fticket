<?php
namespace app\controllers;

use yii\rest\ActiveController;
use Yii;

class TicketController extends ActiveController
{
    public $modelClass = 'app\models\Ticket';

    /**
     * checks if the user can access $action and $model
     * throw ForbiddenHttpException if access should be denied
     */
    public function checkAccess($action, $model = null, $params = [])
    {
        if (Yii::$app->user->isGuest) {
                throw new \yii\web\ForbiddenHttpException(sprintf('Unauthorized Access!', $action));
        }
    }

}