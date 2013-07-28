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
          <li class="active dropdown">
              <a href="index.php" class="dropdown-toggle">
                Home
              </a>
          </li>
          <li>
              <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/siswa/index" class="dropdown-toggle">
                Siswa
              </a>
          </li>
          <li>
              <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/absensi/index" class="dropdown-toggle">
                Absensi
              </a>
          </li>
          <li>
              <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/kelas/index">
                Kelas
              </a>
          </li>
          <li>
              <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/guru/index" class="dropdown-toggle" >
                Guru
              </a>
          </li>
          <li>
              <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/nilai/index">
                Nilai
              </a>
          </li>
          <li>
              <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/mataPelajaran/index" class="dropdown-toggle">
                Mata Pelajaran
              </a>
          </li>          
          <li>
              <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/login">
                Login
              </a>
          </li>
          <li>
              <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/logout">
                Logout
              </a>
          </li>
        </ul><!--/.nav -->
      </div><!--/.nav-collapse -->
    </div><!--/ .container -->
  </div><!--/.nav-inner -->
</div><!--/.navbar-inverse -->