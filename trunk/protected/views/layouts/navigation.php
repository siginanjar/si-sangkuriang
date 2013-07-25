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
              <a href="index.php" data-description="beranda sekolah" class="dropdown-toggle" data-toggle="dropdown">
                Home
              </a>
          </li>
          <li>
              <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/siswa/index" data-description="daftar siswa" class="dropdown-toggle" data-toggle="dropdown">
                Siswa
              </a>
          </li>
          <li>
              <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/absensi/index" data-description="cool features" class="dropdown-toggle" data-toggle="dropdown">
                Absensi
              </a>
          </li>
          <li>
              <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/kelas/index" data-description="what we are about">
                Kelas
              </a>
          </li>
          <li>
              <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/guru/index" data-description="some of our work" class="dropdown-toggle" data-toggle="dropdown" >
                Guru
              </a>
          </li>
          <li>
              <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/nilai/index" data-description="our services">
                Nilai
              </a>
          </li>
          <li>
              <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/mataPelajaran/index" data-description="blog examples" class="dropdown-toggle" data-toggle="dropdown">
                Mata Pelajaran
              </a>
          </li>          
          <li>
              <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/login" data-description="get hold of us">
                Login
              </a>
          </li>
          <li>
              <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/logout" data-description="get hold of us">
                Logout
              </a>
          </li>
        </ul><!--/.nav -->
      </div><!--/.nav-collapse -->
    </div><!--/ .container -->
  </div><!--/.nav-inner -->
</div><!--/.navbar-inverse -->