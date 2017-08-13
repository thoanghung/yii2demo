<?php 
namespace backend\controllers;
 
use Yii;
use yii\web\Controller;
 
class AdminController extends Controller
{
    public function actionIndex()
    {
      echo 'this is admin controller';
      die;
    }

    public function actionDemo()
    {
      echo 'this is demo admin controller';
      die;
    }
}
