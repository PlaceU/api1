<?php

namespace app\controllers;

use Yii;
use app\models\User;
use app\models\UserSearch;
use yii\rest\ActiveController;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UserController implements the CRUD actions for User model.
 */
class UserController extends ActiveController
{
    public $modelClass = 'app\models\User';

    public function actionHash($password)
    {
        $user = new User();
        $hash = $user->getPasswordHash($password);
        return['password_hash' => $hash];
    }
}
