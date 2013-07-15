<?php

/**
 * This is the model class for table "tbl_guru".
 *
 * The followings are the available columns in table 'tbl_guru':
 * @property string $nip
 * @property string $nama_guru
 * @property string $tempat_lahir
 * @property string $tanggal_lahir
 * @property string $golongan
 * @property string $spesialisai
 */
class Guru extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Guru the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_guru';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nip, nama_guru, tempat_lahir, tanggal_lahir, golongan', 'required'),
			array('nip', 'length', 'max'=>20),
			array('nama_guru, spesialisai', 'length', 'max'=>25),
			array('tempat_lahir', 'length', 'max'=>15),
			array('golongan', 'length', 'max'=>4),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('nip, nama_guru, tempat_lahir, tanggal_lahir, golongan, spesialisai', 'safe', 'on'=>'search'),
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
			'nip' => 'Nip',
			'nama_guru' => 'Nama Guru',
			'tempat_lahir' => 'Tempat Lahir',
			'tanggal_lahir' => 'Tanggal Lahir',
			'golongan' => 'Golongan',
			'spesialisai' => 'Spesialisai',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('nip',$this->nip,true);
		$criteria->compare('nama_guru',$this->nama_guru,true);
		$criteria->compare('tempat_lahir',$this->tempat_lahir,true);
		$criteria->compare('tanggal_lahir',$this->tanggal_lahir,true);
		$criteria->compare('golongan',$this->golongan,true);
		$criteria->compare('spesialisai',$this->spesialisai,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}