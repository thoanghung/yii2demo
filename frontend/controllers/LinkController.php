<?php 
namespace frontend\controllers;
 
use Yii;
use yii\web\Controller;
use common\models\Book;
use common\models\User;
use common\components\AccessRule;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
 
class LinkController extends Controller
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
          'only' => ['index', 'create'],
          'rules' => [
            [
              'actions' => ['index', 'new'],
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

    public function actionNew()
    {
      $this->view->title = 'New - Hug.org';
      return $this->render('new', [
        // 'model' => $model,
      ]);
    }
}
