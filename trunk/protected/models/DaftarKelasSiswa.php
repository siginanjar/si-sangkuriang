<?php

/**
 * This is the model class for table "tbl_daftar_kelas_siswa".
 *
 * The followings are the available columns in table 'tbl_daftar_kelas_siswa':
 * @property integer $id
 * @property integer $id_daftar_kelas
 * @property string $nis
 */
class DaftarKelasSiswa extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return DaftarKelasSiswa the static model class
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
		return 'tbl_daftar_kelas_siswa';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_daftar_kelas, nis', 'required'),
			array('id_daftar_kelas', 'numerical', 'integerOnly'=>true),
			array('nis', 'length', 'max'=>8),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, id_daftar_kelas, nis', 'safe', 'on'=>'search'),
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
			'id_daftar_kelas' => 'Id Daftar Kelas',
			'nis' => 'Nis',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('id_daftar_kelas',$this->id_daftar_kelas);
		$criteria->compare('nis',$this->nis,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
    public function getSiswa(){
            $modelSiswa = Siswa::model()->findAll(array ('order'=>'nis'));
            $arraySiswa = CHtml::listData($modelSiswa, 'nis', 'nama_siswa');
            return $arraySiswa;
    }
    public function getDaftarKelas(){
            $modelDaftarKelas = DaftarKelas::model()->findAll(array ('order'=>'id_daftar_kelas'));
            $arrayDaftarKelas = CHtml::listData($modelDaftarKelas, 'id_daftar_kelas', 'nama_daftar_kelas');
            return $arrayDaftarKelas;
    }
}