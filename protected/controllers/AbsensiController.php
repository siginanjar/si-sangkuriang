<?php

class AbsensiController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
        array('allow',
                    'actions'=>array('index','view','update','delete','admin','create'),
                    'expression'=>'$user->getLevel()<=3',
            ),
        array('allow',
                    'actions'=>array('view'),
                    'expression'=>'$user->getLevel()==3',
            ),
		/*	array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),*/
			array('deny',  // deny all users
				'users'=>array('*'),
			),
	
        
        );
    }
=======
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','create'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','create','dataabsensi'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
>>>>>>> .r52

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        
        if (isset($_GET['Absensi'])) {
            $model = new Absensi('search');
            $allt = new Absensi('search');
            $allt->unsetAttributes();
            $allt->id_daftar_kelas = $_GET['Absensi'];

            $dataProvider = new CActiveDataProvider('Absensi');

            $this->render('viewAbsensi', array(
                'allt' => $allt,
                'dataProvider' => $dataProvider,
                'model' => $model->id_daftar_kelas = $_GET['Absensi'],
            ));

        } else {
		
		$criteria=new CDbCriteria(array(
			//order by
	  		'order'=>'id_daftar_kelas DESC',
	  		'condition'=>'id_kelas='.$id.''
		));
		
		$peserta=DaftarKelas::model()->findAll($criteria);
		$kelas=Kelas::model()->findByAttributes(array('id_kelas'=>$id));
		//$DaftarKelas=DaftarKelas::model()->findAll($criteria);
		$DaftarKelas = new DaftarKelas('search');
		$DaftarKelas->id_kelas = $id;
		$this->render('dataabsensi',array(
			'data'=>$peserta,
			'kelas'=>$kelas,
			'DaftarKelas'=>$DaftarKelas,
		));
			
        }
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
	public function actionCreate($id)
	{
		$model=new Dataabsensi('search');
		
		if($_POST['Dataabsensi'])
		{
			 
			for($i=1;$i<=$_POST['jumlahloop'];$i++){
				//$model->attributes=$_POST['Dataabsensi'];
				
				//$model=Dataabsensi::model()->findByPk($_POST['idabsn'.$i]);
				$model=new Dataabsensi;
				$model->nis=$_POST['idp'.$i];
				$model->id_kelas=$_POST['idkelas'];
				$model->pertemuanke=$_POST['pke'];
				$model->absensi=$_POST['absn'.$i];
			
				$model->save();
				/*
				$sql="UPDATE dataabsensi set pertemuanke='".$_POST['pke']."',absensi='".$_POST['absn'.$i]."' WHERE peserta_id='".$_POST['idp'.$i]."' AND id_kelas='".$_POST['idkelas']."'";
				$conncection=Yii::app()->db;
				$command=$conncection->createCommand($sql);
				$command->execute();*/
			}
			if(!$model->save()){
				Yii::app()->user->setFlash('error', "Data absensi tidak bisa disimpan karena pertemuan sudah habis!"); 
			}else{
				Yii::app()->user->setFlash('success', "Data absensi berhasil disimpan!"); 
			}
			
		}
		$criteria=new CDbCriteria(array(
			//order by
	  		'order'=>'id DESC',
	  		'condition'=>'id_kelas='.$id_kelas.''		 
		));
		
		//untuk find semua data dengan parameter $criteria	
		$peserta = siswa::model()->findAll($criteria);
		
		
		$criteriapertemuan=new CDbCriteria(array(
			//order by
	  		'order'=>'pertemuanke DESC LIMIT 0,1',
	  		'condition'=>'kelas_id='.$id_kelas.'', 
	  			 
		));
		$pertemuan = Dataabsensi::model()->findAll($criteriapertemuan);
		 
		//namakelas
		$namakelas=Kelas::model()->findByPk($id_kelas);
		
		$this->render('create',array(
			'model'=>$model,
			'peserta'=>$peserta,
			'id'=>$id_kelas,
			'pertemuanke'=>$pertemuan,
			'namakelas'=>$namakelas,
			'jloop'=>count($peserta)
		));
	}
	public function actionDataabsensi($id){
		$criteria=new CDbCriteria(array(
			//order by
	  		'order'=>'id DESC',
	  		'condition'=>'kelas_id='.$id_kelas.''
		));
		
		$peserta=Peserta::model()->findAll($criteria);
		$kelas=Kelas::model()->findByAttributes(array('id'=>$id_kelas));
		$DaftarKelas=DaftarKelas::model()->findByAttributes(array('id'=>$id_daftar_kelas));
		$this->render('dataabsensi',array(
			'data'=>$peserta,
			'kelas'=>$kelas,
			'DaftarKelas'=>$DaftarKelas,
		));
	}

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Absensi'])) {
            $model->attributes = $_POST['Absensi'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id_absensi));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('DaftarKelas');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Absensi('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Absensi']))
            $model->attributes = $_GET['Absensi'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer the ID of the model to be loaded
     */
    public function loadModel($id) {
        $model = Absensi::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'absensi-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
