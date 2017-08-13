<?php 

namespace common\models;
 
use Yii;
 
 
/**
 * This is the model class for table "image".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 *
 * @property Book $book
 */
class Book extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'book';
    }
 
    public function rules()
    {
        return [
            [['name', 'description'], 'required'],
            [['name', 'description'], 'string', 'max' => 100]
        ];
    }
}
