<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "patient".
 *
 * @property integer $id
 * @property string $cid
 * @property string $hn
 * @property string $pname
 * @property string $fname
 * @property string $lname
 */
class Patient extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'patient';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cid', 'hn', 'pname', 'fname', 'lname'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cid' => 'Cid',
            'hn' => 'Hn',
            'pname' => 'Pname',
            'fname' => 'Fname',
            'lname' => 'Lname',
        ];
    }
}
