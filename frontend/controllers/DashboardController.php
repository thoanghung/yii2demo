<?php 
namespace frontend\controllers;
 
use Yii;
use yii\web\Controller;
use common\models\Book;
use common\models\User;
use common\components\AccessRule;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
 
class DashboardController extends Controller
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
          'only' => ['index'],
          'rules' => [
            [
              'actions' => ['index'],
              'allow' => true,
              // Allow users, moderators and admins to create
              'roles' => [
                User::ROLE_USER
              ],
            ],
          ],
        ],            
      ];
    }

    public function actionIndex()
    {
      $this->view->title = 'Dashboard - Hug.org';
      return $this->render('index', [
        // 'model' => $model,
      ]);
    }
}
