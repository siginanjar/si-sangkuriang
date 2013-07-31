<div class="navbar">
  <div class="navbar-inner">
    <div class="container">
     
      <!-- NOTE: Do not remove this. It is the navigation dropdown for mobile devices. It only shows on small screens-->
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a><!--/.btn-navbar -->

      <div class="nav-collapse collapse">
        <ul class="nav">
        <!--
          <li class="active dropdown">
              <a href="index.php" class="dropdown-toggle">
                Home
              </a>
          </li>
          <li>
              <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/tahunAjaran/index" class="dropdown-toggle">
                Tahun Ajaran
              </a>
          </li>
          <li>
              <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/guru/index" class="dropdown-toggle" >
                Guru
              </a>
          </li>
          <li>
              <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/kelas/index">
                Kelas
              </a>
          </li>
          <li>
              <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/daftarKelas/index">
                Daftar Kelas
              </a>
          </li>
          <li>
              <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/siswa/index" class="dropdown-toggle">
                Siswa
              </a>
          </li>
          <li>
              <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/mataPelajaran/index" class="dropdown-toggle">
                Mata Pelajaran
              </a>
          </li>
          <li>
              <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/absensi/index" class="dropdown-toggle">
                Absensi
              </a>
          </li>
          <li>
              <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/nilai/index">
                Nilai
              </a>
          </li>-->
          <li>
            <?php
            $this->widget('zii.widgets.CMenu',array(
                'htmlOptions'=>array('class'=>'nav'),
        		'items'=>array(
        			array(
                          'label'=>'Beranda',
                          'url'=>array('/site/index'),
                          'itemOptions'=>array('class'=>'nav'),
                    ),
                    array(
                        'label'=>'Tahun Ajaran',
                        'url'=>array('/tahunAjaran/index'),
                        'visible'=>!Yii::app()->user->isGuest,
                        'itemOptions'=>array('class'=>'nav'),
                    ),
                    array(
                          'label'=>'Guru',
                          'url'=>array('/guru/index'),
                          'visible'=>!Yii::app()->user->isGuest,
                          'itemOptions'=>array('class'=>'nav'),
                    ),
                    array(
                          'label'=>'Kelas',
                          'url'=>array('/kelas/index'),
                          'visible'=>!Yii::app()->user->isGuest,
                          'itemOptions'=>array('class'=>'nav'),
                    ),
                    array(
                          'label'=>'Daftar Kelas',
                          'url'=>array('/daftarKelas/index'),
                          'visible'=>!Yii::app()->user->isGuest,
                          'itemOptions'=>array('class'=>'nav'),
                    ),
                    array(
                          'label'=>'Siswa',
                          'url'=>array('/siswa/index'),
                          'visible'=>!Yii::app()->user->isGuest,
                          'itemOptions'=>array('class'=>'nav'),
                    ),
                    array(
                          'label'=>'Mata Pelajaran',
                          'url'=>array('/mataPelajaran/index'),
                          'visible'=>!Yii::app()->user->isGuest,
                          'itemOptions'=>array('class'=>'nav'),
                    ),
                    array(
                          'label'=>'Absensi',
                          'url'=>array('/absensi/index'),
                          'visible'=>!Yii::app()->user->isGuest,
                          'itemOptions'=>array('class'=>'nav'),
                    ),
                    array(
                          'label'=>'Nilai',
                          'url'=>array('/nilai/index'),
                          'visible'=>!Yii::app()->user->isGuest,
                          'itemOptions'=>array('class'=>'nav'),
                    ),
                    array(
                          'label'=>'Login',
                          'url'=>array('/site/login'),
                          'visible'=>Yii::app()->user->isGuest,
                          'itemOptions'=>array('class'=>'nav'),
                    ),
        			array(
                          'label'=>'Logout ('.Yii::app()->user->name.')',
                          'url'=>array('/site/logout'),
                          'visible'=>!Yii::app()->user->isGuest),
                          'itemOptions'=>array('class'=>'nav')
        			),
        		));
        ?>
          </li>  
        </ul><!--/.nav -->
      </div><!--/.nav-collapse -->
    </div><!--/ .container -->
  </div><!--/.nav-inner -->
</div><!--/.navbar-inverse -->