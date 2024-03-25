<?php include 'template/header.php'; ?>
<?php $page = 'home'; include 'template/menubar.php'; ?>



  <!-- END nav -->
  
  <section class="hero-wrap js-fullheight" style="background-image: url('assets/images/imagebg.jpeg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
        <div class="col-lg-6 ftco-animate">
          <div class="mt-5">
            <h1 class="mb-4">PPDB <br>Online</h1>
            <p class="mb-4">Penerimaan Peserta Didik Baru</p>
            <p><a href="#" class="btn btn-primary">Mendaftar</a> <a href="#" class="btn btn-white" data-toggle="modal" data-target="#exampleModalCenter2">Login Calon</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section ftco-no-pt ftco-no-pb ftco-services-2">
    <div class="container">
      <div class="row no-gutters d-flex">
        <div class="col-lg-4 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services d-flex">
            <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-engineer-1"></span></div>
            <div class="media-body pl-4">
              <h3 class="heading mb-3">Quality Construction</h3>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            </div>
          </div>      
        </div>
        <div class="col-lg-4 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services services-2 d-flex">
            <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-worker-1"></span></div>
            <div class="media-body pl-4">
              <h3 class="heading mb-3">Professional Liability</h3>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            </div>
          </div>      
        </div>
        <div class="col-lg-4 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services d-flex">
            <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-engineer"></span></div>
            <div class="media-body pl-4">
              <h3 class="heading mb-3">Dedicated To Our Clients</h3>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            </div>
          </div>      
        </div>
      </div>
    </div>
  </section>

  
  
  <section class="ftco-section bg-half-light">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-2">
        <div class="col-md-8 text-center heading-section ftco-animate">
       
          <h2 class="mb-4">Program Keahlian/Jurusan</h2>
        </div>
      </div>


      <div class="row">
        <?php include 'database/koneksi.php'; ?>

        <?php 
                        $query_mysqli = mysqli_query($koneksi, "SELECT * FROM tb_jurusan")or die(mysqli_error());
                        $nomor = 1;
                        while($data = mysqli_fetch_array($query_mysqli))
                        { 
                      ?>
                <div class="col-md-4">
          <div class="services-wrap ftco-animate">

            <div class="img" style="background-image: url('./jurusan/files/<?php echo $data['gambar'] ?>');" width="80px" height="80px"></div>
            <div class="text">
              <div class="icon"><span class="flaticon-architect"></span></div>
              <h2><?php echo $data['nama_jurusan'] ?></h2>
              <p><?php echo $data['deskripsi'] ?></p>
              <a href="#" class="btn-custom">Read more</a>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>

    </div>

      </div>
    </div>

  </section>

  <?php include 'template/footer.php'; ?>

