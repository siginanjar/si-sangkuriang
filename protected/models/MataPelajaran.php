<?php

/**
 * This is the model class for table "tbl_mata_pelajaran".
 *
 * The followings are the available columns in table 'tbl_mata_pelajaran':
 * @property string $id_mata_pelajaran
 * @property string $nama_pelajaran
 * @property string $id_kelas
 * @property string $km_metpel
 */
class MataPelajaran extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return MataPelajaran the static model class
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
		return 'tbl_mata_pelajaran';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_mata_pelajaran, nama_pelajaran, id_kelas, km_metpel', 'required'),
			array('id_mata_pelajaran', 'length', 'max'=>5),
			array('nama_pelajaran', 'length', 'max'=>20),
			array('id_kelas, km_metpel', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_mata_pelajaran, nama_pelajaran, id_kelas, km_metpel', 'safe', 'on'=>'search'),
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
			'id_mata_pelajaran' => 'Id Mata Pelajaran',
			'nama_pelajaran' => 'Nama Pelajaran',
			'id_kelas' => 'Kelas',
			'km_metpel' => 'Kurikulum',
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

		$criteria->compare('id_mata_pelajaran',$this->id_mata_pelajaran,true);
		$criteria->compare('nama_pelajaran',$this->nama_pelajaran,true);
		$criteria->compare('id_kelas',$this->id_kelas,true);
		$criteria->compare('km_metpel',$this->km_metpel,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public function getKelas ()
        {
            $modelKelas = Kelas::model()->findAll(array('order'=>'id_kelas'));
            $arrayKelas = CHtml::listData($modelKelas, 'id_kelas', 'nama_kelas');
            return $arrayKelas;
        }
}