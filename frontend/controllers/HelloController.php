<?php 
namespace frontend\controllers;
 
use Yii;
use yii\web\Controller;
use common\models\Book;
use common\models\User;
use common\components\AccessRule;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
 
class HelloController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
      return [
        'verbs' => [
          'class' => VerbFilter::className(),
          'actions' => [
            'delete' => ['post'],
          ],
        ],
        'access' => [
          'class' => AccessControl::className(),
          // We will override the default rule config with the new AccessRule class
          'ruleConfig' => [
            'class' => AccessRule::className(),
          ],
          'only' => ['index','create', 'update', 'delete', 'admin', 'user'],
          'rules' => [
            [
              'actions' => ['index','create'],
              'allow' => true,
              // Allow users, moderators and admins to create
              'roles' => [
                '?'
              ],
            ],
            [
              'actions' => ['update', 'user'],
              'allow' => true,
              'roles' => [
                User::ROLE_USER
              ],
            ],
            [
              'actions' => ['delete', 'admin'],
              'allow' => true,
              // Allow admins to delete
              'roles' => [
                User::ROLE_ADMIN
              ],
            ],
          ],
        ],            
      ];
    }
    public function actionIndex()
    {
      $books = Book::find()->all();
      var_dump($books);
      die;
    }

    public function actionAdmin(){
      echo 'This is admin';
    }

    public function actionUser(){
      echo 'This is user';
    }
}
