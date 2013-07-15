<?php

/**
 * This is the model class for table "tbl_daftar_kelas".
 *
 * The followings are the available columns in table 'tbl_daftar_kelas':
 * @property string $id_daftar_kelas
 * @property string $id_kelas
 * @property string $nis
 * @property string $tahun_ajaran
 * @property string $nip
 */
class DaftarKelas extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return DaftarKelas the static model class
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
		return 'tbl_daftar_kelas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_kelas, nis, tahun_ajaran, nip', 'required'),
			array('id_daftar_kelas', 'length', 'max'=>25),
			array('id_kelas', 'length', 'max'=>10),
			array('nis', 'length', 'max'=>8),
			array('tahun_ajaran', 'length', 'max'=>9),
			array('nip', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_daftar_kelas, id_kelas, nis, tahun_ajaran, nip', 'safe', 'on'=>'search'),
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
			'id_daftar_kelas' => 'Id Daftar Kelas',
			'id_kelas' => 'Kelas',
			'nis' => 'Siswa',
			'tahun_ajaran' => 'Tahun Ajaran',
			'nip' => 'Wali Kelas',
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

		$criteria->compare('id_daftar_kelas',$this->id_daftar_kelas,true);
		$criteria->compare('id_kelas',$this->id_kelas,true);
		$criteria->compare('nis',$this->nis,true);
		$criteria->compare('tahun_ajaran',$this->tahun_ajaran,true);
		$criteria->compare('nip',$this->nip,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public function getTahunAjaran ()
        {
            $modelTahunAjaran = TahunAjaran::model()->findAll(array('order'=>'tahun_ajaran'));
            $arrayTahunAjaran = CHtml::listData($modelTahunAjaran, 'tahun_ajaran', 'tahun_ajaran');
            return $arrayTahunAjaran;
        }
        
        public function getSiswa ()
        {
            $modelSiswa = Siswa::model()->findAll(array('order'=>'nama_siswa'));
            $arraySiswa = CHtml::listData($modelSiswa, 'nis', 'nama_siswa');
            return $arraySiswa;
        }
        
        public function getGuru ()
        {
            $modelGuru = Guru::model()->findAll(array('order'=>'nama_guru'));
            $arrayGuru = CHtml::listData($modelGuru, 'nip', 'nama_guru');
            return $arrayGuru;
        }
        
        public function getKelas ()
        {
            $modelKelas = Kelas::model()->findAll(array('order'=>'id_kelas'));
            $arrayKelas = CHtml::listData($modelKelas, 'id_kelas', 'nama_kelas');
            return $arrayKelas;
        }
}