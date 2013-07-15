<?php

/**
 * This is the model class for table "tbl_nilai".
 *
 * The followings are the available columns in table 'tbl_nilai':
 * @property integer $id
 * @property string $id_daftar_kelas
 * @property string $id_mata_pelajaran
 * @property string $nis
 * @property integer $nilai_ulangan1
 * @property integer $nilai_ulangan2
 * @property integer $nilai_ulangan3
 * @property integer $nilai_uts
 * @property integer $nilai_uas
 * @property integer $nilai_akhir
 */
class Nilai extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Nilai the static model class
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
		return 'tbl_nilai';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_daftar_kelas, id_mata_pelajaran, nis', 'required'),
			array('nilai_ulangan1, nilai_ulangan2, nilai_ulangan3, nilai_uts, nilai_uas, nilai_akhir', 'numerical', 'integerOnly'=>FALSE),
			array('id_daftar_kelas, id_mata_pelajaran', 'length', 'max'=>20),
			array('nis', 'length', 'max'=>8),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, id_daftar_kelas, id_mata_pelajaran, nis, nilai_ulangan1, nilai_ulangan2, nilai_ulangan3, nilai_uts, nilai_uas, nilai_akhir', 'safe', 'on'=>'search'),
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
			'id_daftar_kelas' => 'Id Kelas',
			'id_mata_pelajaran' => 'Mata Pelajaran',
			'nis' => 'Siswa',
			'nilai_ulangan1' => 'Nilai Ulangan 1',
			'nilai_ulangan2' => 'Nilai Ulangan 2',
			'nilai_ulangan3' => 'Nilai Ulangan 3',
			'nilai_uts' => 'Nilai UTS',
			'nilai_uas' => 'Nilai UAS',
			'nilai_akhir' => 'Nilai Akhir',
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
		$criteria->compare('id_daftar_kelas',$this->id_daftar_kelas,true);
		$criteria->compare('id_mata_pelajaran',$this->id_mata_pelajaran,true);
		$criteria->compare('nis',$this->nis,true);
		$criteria->compare('nilai_ulangan1',$this->nilai_ulangan1);
		$criteria->compare('nilai_ulangan2',$this->nilai_ulangan2);
		$criteria->compare('nilai_ulangan3',$this->nilai_ulangan3);
		$criteria->compare('nilai_uts',$this->nilai_uts);
		$criteria->compare('nilai_uas',$this->nilai_uas);
		$criteria->compare('nilai_akhir',$this->nilai_akhir);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public function getDaftarKelas ()
        {
            $modelDaftarKelas = DaftarKelas::model()->findAll(array('order'=>'id_kelas'));
            $arrayDaftarKelas = CHtml::listData($modelKelas, 'id_kelas', 'nama_kelas');
            return $arrayDaftarKelas;
        }
        
        public function getSiswa ()
        {
            $modelSiswa = Siswa::model()->findAll(array('order'=>'nama_siswa'));
            $arraySiswa = CHtml::listData($modelSiswa, 'nis', 'nama_siswa');
            return $arraySiswa;
        }
        
        public function getMataPelajaran ()
        {
            $modelMataPelajaran = MataPelajaran::model()->findAll(array('order'=>'nama_pelajaran'));
            $arrayMataPelajaran = CHtml::listData($modelMataPelajaran, 'id_mata_pelajaran', 'nama_pelajaran');
            return $arrayMataPelajaran;
        }
}