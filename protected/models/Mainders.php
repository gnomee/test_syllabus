<?php

/**
 * This is the model class for table "mainders".
 *
 * The followings are the available columns in table 'mainders':
 * @property integer $id
 * @property integer $fid
 * @property integer $bid
 * @property integer $koordinatorid
 * @property string $derskod
 * @property string $dersad_kg
 * @property string $dersad_tr
 * @property integer $yariyil
 * @property integer $dersturu
 * @property integer $onkosullumu
 * @property integer $onkosulmu
 * @property integer $krediteori
 * @property integer $krediuygulama
 * @property integer $kreditoplam
 * @property integer $akts
 */
class Mainders extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'mainders';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fid, bid, koordinatorid, derskod, dersad_kg, dersad_tr, yariyil, dersturu, onkosullumu, onkosulmu, krediteori, krediuygulama, kreditoplam, akts', 'required'),
			array('fid, bid, koordinatorid, yariyil, dersturu, onkosullumu, onkosulmu, krediteori, krediuygulama, kreditoplam, akts', 'numerical', 'integerOnly'=>true),
			array('derskod', 'length', 'max'=>10),
			array('dersad_kg, dersad_tr', 'length', 'max'=>150),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, fid, bid, koordinatorid, derskod, dersad_kg, dersad_tr, yariyil, dersturu, onkosullumu, onkosulmu, krediteori, krediuygulama, kreditoplam, akts', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'fid' => 'Fid',
			'bid' => 'Bid',
			'koordinatorid' => 'Koordinatorid',
			'derskod' => 'Derskod',
			'dersad_kg' => 'Dersad Kg',
			'dersad_tr' => 'Dersad Tr',
			'yariyil' => 'Yariyil',
			'dersturu' => 'Dersturu',
			'onkosullumu' => 'Onkosullumu',
			'onkosulmu' => 'Onkosulmu',
			'krediteori' => 'Krediteori',
			'krediuygulama' => 'Krediuygulama',
			'kreditoplam' => 'Kreditoplam',
			'akts' => 'Akts',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('fid',$this->fid);
		$criteria->compare('bid',$this->bid);
		$criteria->compare('koordinatorid',$this->koordinatorid);
		$criteria->compare('derskod',$this->derskod,true);
		$criteria->compare('dersad_kg',$this->dersad_kg,true);
		$criteria->compare('dersad_tr',$this->dersad_tr,true);
		$criteria->compare('yariyil',$this->yariyil);
		$criteria->compare('dersturu',$this->dersturu);
		$criteria->compare('onkosullumu',$this->onkosullumu);
		$criteria->compare('onkosulmu',$this->onkosulmu);
		$criteria->compare('krediteori',$this->krediteori);
		$criteria->compare('krediuygulama',$this->krediuygulama);
		$criteria->compare('kreditoplam',$this->kreditoplam);
		$criteria->compare('akts',$this->akts);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mainders the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
