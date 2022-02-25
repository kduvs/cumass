<?php

namespace app\modules\api\modules\open\controllers;

use yii\web\Controller;

/**
 * Default controller for the `open` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
