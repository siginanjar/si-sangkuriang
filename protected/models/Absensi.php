<?php

/**
 * This is the model class for table "tbl_absensi".
 *
 * The followings are the available columns in table 'tbl_absensi':
 * @property integer $id_absensi
 * @property string $id_daftar_kelas
 * @property string $nis
 * @property string $tanggal
 * @property string $status
 * @property string $keterangan
 */
class Absensi extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Absensi the static model class
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
		return 'tbl_absensi';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_daftar_kelas, nis, status', 'required'),
			array('id_daftar_kelas', 'length', 'max'=>20),
			array('nis', 'length', 'max'=>8),
			array('status', 'length', 'max'=>5),
			array('keterangan', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_absensi, id_daftar_kelas, nis, tanggal, status, keterangan', 'safe', 'on'=>'search'),
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
			'id_absensi' => 'Id Absensi',
			'id_daftar_kelas' => 'Id Daftar Kelas',
			'nis' => 'Siswa',
			'tanggal' => 'Tanggal',
			'status' => 'Status',
			'keterangan' => 'Keterangan',
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

		$criteria->compare('id_absensi',$this->id_absensi);
		$criteria->compare('id_daftar_kelas',$this->id_daftar_kelas,true);
		$criteria->compare('nis',$this->nis,true);
		$criteria->compare('tanggal',$this->tanggal,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('keterangan',$this->keterangan,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public function getSiswa ()
        {
            $modelSiswa = Siswa::model()->findAll(array('order'=>'nama_siswa'));
            $arraySiswa = CHtml::listData($modelSiswa, 'nis', 'nama_siswa');
            return $arraySiswa;
        }
}