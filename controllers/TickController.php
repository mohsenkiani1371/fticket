<?php
namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\data\Pagination;
use app\models\Ticket;
use yii\web\Request;

class TickController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['index', 'create', 'edit', 'register'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    // Shows the tickets
    public function actionIndex()
    {
        $query = Ticket::find();

        $pagination = new Pagination([
            'defaultPageSize' => 10,
            'totalCount' => $query->count(),
        ]);

        $tickets = $query->offset($pagination->offset)
            ->limit($pagination->limit)->all();

        return $this->render('/ticket/index', [
            'tickets' => $tickets,
            'pagination' => $pagination,
        ]);
    }

    // Registers a new ticket
    public function actionCreate()
    {
        $ticket = new Ticket();
        return self::register($ticket);
    }

    // Edits a ticket
    public function actionEdit($id)
    {
        $ticket = Ticket::findOne($id);
        return self::register($ticket);
    }

    // A common function for creating or editing tickets
    public function register(Ticket $ticket)
    {
        if ($ticket->load(Yii::$app->request->post()) && $ticket->validate()) {
            $ticket->save();
            $message = "The ticket has been successfully registered.";
            return $this->render('/ticket/registerDone', ['message' => $message]);
        } else {
            // either the page is initially displayed or there is some validation error
            return $this->render('/ticket/register', ['ticket' => $ticket]);
        }
    }

}