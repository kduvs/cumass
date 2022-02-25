<?php

namespace app\modules\api\modules\shut\controllers;

use yii\data\ActiveDataProvider;
use yii\rest\ActiveController;

/**
 * User controller for the `shut` module
 */
class UserController extends ActiveController
{
    public $modelClass = 'app\models\entities\User';
    
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
