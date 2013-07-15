<?php

/**
 * This is the model class for table "tbl_siswa".
 *
 * The followings are the available columns in table 'tbl_siswa':
 * @property string $nis
 * @property string $nama_siswa
 * @property string $tempat_lahir
 * @property string $tanggal_lahir
 * @property string $agama
 * @property string $alamat
 * @property string $tahun_ajaran
 * @property string $nama_wali
 * @property string $no_tlpn_wali
 * @property string $sekolah_asal
 */
class Siswa extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Siswa the static model class
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
		return 'tbl_siswa';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nis, nama_siswa, tempat_lahir, tanggal_lahir, agama, alamat, tahun_ajaran, nama_wali, no_tlpn_wali', 'required'),
			array('nis, agama', 'length', 'max'=>8),
			array('nama_siswa, nama_wali, sekolah_asal', 'length', 'max'=>50),
			array('tempat_lahir', 'length', 'max'=>25),
			array('tahun_ajaran', 'length', 'max'=>20),
			array('no_tlpn_wali', 'length', 'max'=>15),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('nis, nama_siswa, tempat_lahir, tanggal_lahir, agama, alamat, tahun_ajaran, nama_wali, no_tlpn_wali, sekolah_asal', 'safe', 'on'=>'search'),
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
			'nis' => 'Nis',
			'nama_siswa' => 'Nama Siswa',
			'tempat_lahir' => 'Tempat Lahir',
			'tanggal_lahir' => 'Tanggal Lahir',
			'agama' => 'Agama',
			'alamat' => 'Alamat',
			'tahun_ajaran' => 'Tahun Ajaran',
			'nama_wali' => 'Nama Wali',
			'no_tlpn_wali' => 'No Tlpn Wali',
			'sekolah_asal' => 'Sekolah Asal',
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

		$criteria->compare('nis',$this->nis,true);
		$criteria->compare('nama_siswa',$this->nama_siswa,true);
		$criteria->compare('tempat_lahir',$this->tempat_lahir,true);
		$criteria->compare('tanggal_lahir',$this->tanggal_lahir,true);
		$criteria->compare('agama',$this->agama,true);
		$criteria->compare('alamat',$this->alamat,true);
		$criteria->compare('tahun_ajaran',$this->tahun_ajaran,true);
		$criteria->compare('nama_wali',$this->nama_wali,true);
		$criteria->compare('no_tlpn_wali',$this->no_tlpn_wali,true);
		$criteria->compare('sekolah_asal',$this->sekolah_asal,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public function getTahunAjaran()
        {
            $modelTahunAjaran = TahunAjaran::model()->findAll(array ('order'=>'tahun_ajaran'));
            $arrayTahunAjaran = CHtml::listData($modelTahunAjaran, 'tahun_ajaran', 'tahun_ajaran');
            return $arrayTahunAjaran;
        }
}