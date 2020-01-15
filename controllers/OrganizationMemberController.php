<?php

namespace app\controllers;

use Yii;
use app\models\OrganizationMember;
use app\models\OrganizationMemberSearch;
use yii\rest\ActiveController;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * OrganizationMemberController implements the CRUD actions for OrganizationMember model.
 */
class OrganizationMemberController extends ActiveController
{
    public $modelClass = 'app\models\OrganizationMember';
}
