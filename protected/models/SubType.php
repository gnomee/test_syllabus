<?php

/**
 * This is the model class for table "SubType".
 *
 * The followings are the available columns in table 'SubType':
 * @property integer $Id
 * @property string $SubType
 * @property integer $Type_Id
 */
class SubType extends CActiveRecord
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
		return 'SubType';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('SubType, Type_Id', 'required'),
			array('Type_Id', 'numerical', 'integerOnly'=>true),
			array('SubType', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Id, SubType, Type_Id', 'safe', 'on'=>'search'),
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
			'SubType' => 'Sub Type',
			'Type_Id' => 'Type',
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
		$criteria->compare('SubType',$this->SubType,true);
		$criteria->compare('Type_Id',$this->Type_Id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SubType the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
