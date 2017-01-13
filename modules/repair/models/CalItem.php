<?php

namespace app\modules\repair\models;

use Yii;

/**
 * This is the model class for table "cal_item".
 *
 * @property integer $id
 * @property integer $tool_id
 * @property string $result
 * @property string $number_group
 * @property string $numberpas
 * @property integer $department_id
 * @property integer $cal_id
 * @property string $remark
 */
class CalItem extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    
    const UPDATE_TYPE_CREATE = 'create';
    const UPDATE_TYPE_UPDATE = 'update';
    const UPDATE_TYPE_DELETE = 'delete';

    const SCENARIO_BATCH_UPDATE = 'batchUpdate';


    private $_updateType;

    public function getUpdateType()
    {
        if (empty($this->_updateType)) {
            if ($this->isNewRecord) {
                $this->_updateType = self::UPDATE_TYPE_CREATE;
            } else {
                $this->_updateType = self::UPDATE_TYPE_UPDATE;
            }
        }

        return $this->_updateType;
    }

    public function setUpdateType($value)
    {
        $this->_updateType = $value;
    }
    
    public static function tableName()
    {
        return 'cal_item';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
             ['updateType', 'required', 'on' => self::SCENARIO_BATCH_UPDATE],
            ['updateType',
                'in',
                'range' => [self::UPDATE_TYPE_CREATE, self::UPDATE_TYPE_UPDATE, self::UPDATE_TYPE_DELETE],
                'on' => self::SCENARIO_BATCH_UPDATE]
            ,
            
            [['tool_id', 'department_id', 'cal_id'], 'integer'],
            [['result', 'remark'], 'string', 'max' => 255],
            [['number_group'], 'string', 'max' => 20],
            [['numberpas'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tool_id' => 'รายการ',
            'result' => 'ผลการสอบเทียบ',
            'number_group' => 'เลขที่ประจำรายการ',
            'numberpas' => 'เลขครุภัณฑ์',
            'department_id' => 'หน่วยงาน',
            'cal_id' => 'Cal ID',
            'remark' => 'เพิ่มเติม',
        ];
    }
    public function getCals(){
        return $this->hasOne(Cal::className(), ['id'=>'cal_id']);
    }
     public function getCaltool(){
        return $this->hasOne(Tools::className(), ['id'=>'tool_id']);
    }
}
