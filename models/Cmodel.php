<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cmodel".
 *
 * @property int $id
 * @property int $manufacturer_id
 * @property string $name
 * @property string $color
 * @property int $year
 * @property string $regno
 * @property string $note
 * @property resource $pic1
 * @property resource $pic2
 *
 * @property Manufacturer $manufacturer
 */
class Cmodel extends \yii\db\ActiveRecord
{
    const SCENARIO_CREATE = 'create';
    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        $scenarios = parent::scenarios();
        $scenarios['create'] = ['manufacturer_id', 'name', 'color', 'year', 'regno', 'note', 'pic1', 'pic2']; 
        return $scenarios; 
    }
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cmodel';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['manufacturer_id', 'name', 'color', 'year', 'regno'], 'required'],
            [['manufacturer_id', 'year'], 'integer'],
            [['color', 'pic1', 'pic2'], 'string'],
            [['name', 'regno'], 'string', 'max' => 100],
            [['note'], 'string', 'max' => 1000],
            [['manufacturer_id'], 'exist', 'skipOnError' => true, 'targetClass' => Manufacturer::className(), 'targetAttribute' => ['manufacturer_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'manufacturer_id' => 'Manufacturer ID',
            'name' => 'Name',
            'color' => 'Color',
            'year' => 'Year',
            'regno' => 'Regno',
            'note' => 'Note',
            'pic1' => 'Pic1',
            'pic2' => 'Pic2',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getManufacturer()
    {
        return $this->hasOne(Manufacturer::className(), ['id' => 'manufacturer_id']);
    }
}
