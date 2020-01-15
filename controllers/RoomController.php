<?php

namespace app\controllers;

use Yii;
use app\models\Room;
use app\models\RoomSearch;
use yii\rest\ActiveController;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RoomController implements the CRUD actions for Room model.
 */
class RoomController extends ActiveController
{
    public $modelClass = 'app\models\Room';
}
