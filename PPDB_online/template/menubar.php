<?php 
                                          include 'database/koneksi.php';
                                        
                                            $data = mysqli_query($koneksi, "SELECT * FROM tb_sekolah ")or die(mysqli_error());
                                          $nomor = 1;
                                          while($d = mysqli_fetch_array($data)){
                                          ?>
<body>
  <div class="py-1 top">
    <div class="container">
      <div class="row">
        <div class="col-sm text-center text-md-left mb-md-0 mb-2 pr-md-4 d-flex topper align-items-center">
          <p class="mb-0 w-100">
            <span class="fa fa-paper-plane"></span>
            <span class="text"><?php echo $d['email'] ?></span>
          </p>
        </div>
        <div class="col-sm justify-content-center d-flex mb-md-0 mb-2">
          <div class="social-media">
            <p class="mb-0 d-flex">
              
            </p>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-7 d-flex topper align-items-center text-lg-right justify-content-end">
          <p class="mb-0 register-link"><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Login Admin</a></p>
        </div>
      </div>
    </div>
  </div>
  <div class="pt-4 pb-5">
    <div class="container">
      <div class="row d-flex align-items-start align-items-center px-3 px-md-0">
        <div class="col-md-4 d-flex mb-2 mb-md-0">
          <a class="navbar-brand d-flex align-items-center" href="index.html">
            <img src="./sekolah/files/<?php echo $d['logo'] ?>" style="height: 40px; margin-top: 5px; margin-left:5px;">
            <span class="ml-2">PPDB Online<small><?php echo $d['nama_sekolah'] ?></small></span>
          </a>
        </div>
        <div class="col-md-4 d-flex topper mb-md-0 mb-2 align-items-center">
          
          <div class="pr-md-4 pl-md-3 pl-3 text">
            
          </div>
        </div>
        <div class="col-md-4 d-flex topper mb-md-0 align-items-center">
          <div class="icon d-flex justify-content-center align-items-center"><span class="fa fa-paper-plane"></span>
          </div>
          <div class="text pl-3 pl-md-3">
            <p class="hr"><span>Alamat Sekolah :</span></p>
            <p class="con">Jl. Kebangsaan No. 3 Batang</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container d-flex align-items-center">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fa fa-bars"></span> Menu
      </button>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav mr-auto">
          <li class="<?php if ($page=='home'){echo 'nav-item active';} else {echo 'nav-item';} ?>"><a href="index.php"  class="nav-link">Home</a></li>
          <li class="<?php if ($page=='about'){echo 'nav-item active';} else {echo 'nav-item';} ?>"><a href="about.php" class="nav-link">About</a></li>
          <li class="<?php if ($page=='pendaftaran'){echo 'nav-item active';} else {echo 'nav-item';} ?>"><a href="pendaftaran.php" class="nav-link">Pendaftaran</a></li>
 

        </ul>
       
      </div>
    </div>
  </nav>

  <?php } ?>