<?php

/**
 * This is the model class for table "Unvan".
 *
 * The followings are the available columns in table 'Unvan':
 * @property integer $Id
 * @property string $Unvan
 * @property string $kg
 * @property string $en
 * @property string $tr
 * @property string $ru
 */
class Unvan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
    public function getDbConnection()
    {
        return Yii::app()->erehber;
    }
	public function tableName()
	{
		return 'Unvan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Unvan, kg, en, tr, ru', 'required'),
			array('Unvan', 'length', 'max'=>50),
			array('kg, en, tr, ru', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Id, Unvan, kg, en, tr, ru', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Id' => 'ID',
			'Unvan' => 'Unvan',
			'kg' => 'Kg',
			'en' => 'En',
			'tr' => 'Tr',
			'ru' => 'Ru',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('Id',$this->Id);
		$criteria->compare('Unvan',$this->Unvan,true);
		$criteria->compare('kg',$this->kg,true);
		$criteria->compare('en',$this->en,true);
		$criteria->compare('tr',$this->tr,true);
		$criteria->compare('ru',$this->ru,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Unvan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
