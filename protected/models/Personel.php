<?php

/**
 * This is the model class for table "Personel".
 *
 * The followings are the available columns in table 'Personel':
 * @property integer $Id
 * @property string $Name
 * @property string $Surname
 * @property string $Namekg
 * @property string $Surnamekg
 * @property string $Nameru
 * @property string $Surnameru
 * @property string $Nameen
 * @property string $Surnameen
 * @property integer $Gorev_Id
 * @property integer $Unvan_Id
 * @property string $OdaN
 * @property string $Tel
 * @property string $Faks
 * @property string $Dahili
 * @property string $Cep
 * @property string $Eposta
 * @property string $Kimlik
 * @property integer $Type_Id
 * @property integer $SubType_Id
 * @property integer $Bina_Id
 * @property string $Hidden
 * @property integer $Ireet
 */
class Personel extends CActiveRecord
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
		return 'Personel';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Name, Surname, Namekg, Surnamekg, Nameru, Surnameru, Nameen, Surnameen, Gorev_Id, Unvan_Id, OdaN, Faks, Dahili, Cep, Kimlik, Type_Id, SubType_Id, Ireet', 'required'),
			array('Gorev_Id, Unvan_Id, Type_Id, SubType_Id, Bina_Id, Ireet', 'numerical', 'integerOnly'=>true),
			array('Name, Namekg, Surnamekg, Nameru, Surnameru, Nameen, Surnameen, Faks', 'length', 'max'=>50),
			array('Surname, Tel', 'length', 'max'=>100),
			array('OdaN', 'length', 'max'=>30),
			array('Dahili', 'length', 'max'=>10),
			array('Cep', 'length', 'max'=>20),
			array('Eposta', 'length', 'max'=>70),
			array('Kimlik', 'length', 'max'=>4),
			array('Hidden', 'length', 'max'=>11),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Id, Name, Surname, Namekg, Surnamekg, Nameru, Surnameru, Nameen, Surnameen, Gorev_Id, Unvan_Id, OdaN, Tel, Faks, Dahili, Cep, Eposta, Kimlik, Type_Id, SubType_Id, Bina_Id, Hidden, Ireet', 'safe', 'on'=>'search'),
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
			'Name' => Yii::t('dictionary', 'Name'),
			'Surname' => Yii::t('dictionary', 'Surname'),
			'Namekg' => Yii::t('dictionary', 'Namekg'),
			'Surnamekg' => Yii::t('dictionary', 'Surnamekg'),
			'Nameru' => 'Nameru',
			'Surnameru' => 'Surnameru',
			'Nameen' => 'Nameen',
			'Surnameen' => 'Surnameen',
			'Gorev_Id' => Yii::t('dictionary', 'Gorev'),
			'Unvan_Id' => Yii::t('dictionary', 'Unvan'),
			'OdaN' => 'Oda N',
			'Tel' => 'Tel',
			'Faks' => 'Faks',
			'Dahili' => 'Dahili',
			'Cep' => 'Cep',
			'Eposta' => 'Eposta',
			'Kimlik' => 'Kimlik',
			'Type_Id' => Yii::t('dictionary', 'Type'),
			'SubType_Id' => Yii::t('dictionary', 'Sub Type'),
			'Bina_Id' => 'Bina',
			'Hidden' => 'Hidden',
			'Ireet' => 'Ireet',
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
		$criteria->compare('Name',$this->Name,true);
		$criteria->compare('Surname',$this->Surname,true);
		$criteria->compare('Namekg',$this->Namekg,true);
		$criteria->compare('Surnamekg',$this->Surnamekg,true);
		$criteria->compare('Nameru',$this->Nameru,true);
		$criteria->compare('Surnameru',$this->Surnameru,true);
		$criteria->compare('Nameen',$this->Nameen,true);
		$criteria->compare('Surnameen',$this->Surnameen,true);
		$criteria->compare('Gorev_Id',$this->Gorev_Id);
		$criteria->compare('Unvan_Id',$this->Unvan_Id);
		$criteria->compare('OdaN',$this->OdaN,true);
		$criteria->compare('Tel',$this->Tel,true);
		$criteria->compare('Faks',$this->Faks,true);
		$criteria->compare('Dahili',$this->Dahili,true);
		$criteria->compare('Cep',$this->Cep,true);
		$criteria->compare('Eposta',$this->Eposta,true);
		$criteria->compare('Kimlik',$this->Kimlik,true);
		$criteria->compare('Type_Id',$this->Type_Id);
		$criteria->compare('SubType_Id',$this->SubType_Id);
		$criteria->compare('Bina_Id',$this->Bina_Id);
		$criteria->compare('Hidden',$this->Hidden,true);
		$criteria->compare('Ireet',$this->Ireet);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Personel the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
function getFullName()
{
    $lang = Yii::app()->language;
    if($lang=='ky') $lang='kg';
    $unvan=Unvan::model()->findByPk($this->Unvan_Id)->$lang;
    $langname=$lang;
    if($lang=='tr') $langname='Name'; else $langname='Namekg';//$langname='Name'.$lang;
    return $unvan.' '.$this->$langname.' '.$this->Surname;
}
}
