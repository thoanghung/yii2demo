<?php 
namespace frontend\controllers;
 
use Yii;
use yii\web\Controller;
use common\models\Book;
 
class HelloController extends Controller
{
    public function actionIndex()
    {
      $books = Book::find()->all();
      var_dump($books);
      die;
    }

    public function actionDemo()
    {
      echo 'this is demo controller';
      die;
    }
}
