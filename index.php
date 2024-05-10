<?php
date_default_timezone_set("Asia/Jakarta");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Puskesmas Faljet</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
	<!-- <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"> -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

  </head>
  <body>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

		<!--NAVBAR-->

		<nav class="container-fluid navbar navbar-expand-lg sticky-top pt-3 mb-5 ">
			<div class="container">
            <a href="index.php">
			  <img class="rounded-circle" src="img/logo_fj.png" alt="logo_faljet">
			  <a class="navbar-brand theme-text fs-3" href="#home">Puskesmas Faljet</a>
            </a>
			  <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
				<div class="offcanvas-header">
				  <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Puskesmas Faljet</h5>
				  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
				</div>
				  <div class="offcanvas-body">
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
				  <li class="nav-item">
					<a class="nav-link act" aria-current="page" href="#home">Home</a>
				  </li>

				  <li class="nav-item">
					<a class="nav-link" href="#about">Tentang</a>
				  </li>

				  <li class="nav-item">
					<a class="nav-link" href="#doctor">Dokter</a>
				  </li>

				  <li class="nav-item">
					<a class="nav-link" href="#lokasi">Lokasi</a>
				  </li>

				 
				  <li class="nav-item">
					<a class="nav-link" href="#contact">Kontak</a>
				  </li>
				
                </ul>
                  <a class="btn btn-primary" href="#jadwal" role="button">Buat Jadwal</a>
			  </div>
			</div>
			</div>
		</nav>
<!--END NAVBAR-->

<!-- HOME -->
	<div class="container mb-3" id="home">
				<div class="page-header">
					<h1>
						<small>Kesehatan Anda Adalah Prioritas Kami</small>
					</h1>
				</div>
	</div>

				<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
					<div class="carousel-inner">
					  <div class="carousel-item active" data-bs-interval="10000">
						<img src="img/carousel/slide-1.jpg" class="d-block w-100" alt="...">
					  </div>
					  <div class="carousel-item" data-bs-interval="2000">
						<img src="img/carousel/slide-2.jpg" class="d-block w-100" alt="...">
					  </div>
					  <div class="carousel-item">
						<img src="img/carousel/slide-3.jpg" class="d-block w-100" alt="...">
					  </div>
					</div>
					<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
					  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					  <span class="visually-hidden">Previous</span>
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
					  <span class="carousel-control-next-icon" aria-hidden="true"></span>
					  <span class="visually-hidden">Next</span>
					</button>
				</div>
<!-- END HOME -->

<!-- ABOUT -->
	  <div class="container deskripsi mt-5 mb-5" id="about" data-aos="fade-in">
		<div class="row gy-3">
			<div class="kolom-kosong col-md-1">
				
			</div>
			
			<div class="konten-kiri col-md-6 pt-4">
				<div>
					<h1 class="text-black fw-bold display-10 mb-4">Apa itu Puskesmas Faljet?</h1>
				</div>
				<div style="text-align: justify;" class="mb-3">Pusat layanan kesehatan yang menyediakan pelayanan yang komprehensif dan berkualitas untuk masyarakat setempat. Puskesmas Faljet memiliki fasilitas yang memadai, tenaga kesehatan yang profesional, dan mampu memberikan pelayanan promotif, preventif, kuratif, dan rehabilitatif secara merata dan terjangkau bagi seluruh lapisan masyarakat.</div>
			</div>

			<div class="konten-kanan col-md-5">
				<img src="img/departments-3.jpg" class="mt-2 ms-3 rounded float-start foto-konten-kanan" width="300px" alt="">
			</div>
	  	</div>
	  </div>
<!-- END ABOUT -->


<!-- DOKTER -->
	<div class="container mt-5" id="doctor">
		<div class="page-header">
			<h1 class="text-center">
				Dokter Kami
			</h1>
		</div>
	</div>


		<div class="container">
			<div class="row mt-5 gy-3">
				<div class="col-md-4">
					<div class="card" data-aos="zoom-in">
                        <img src="img/doctors/doctors-1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h4 class="card-title">Dr. Jack Sparrow</h4>
						  <ul>
							<li>
								<h5 class="card-text" style="text-align: justify;">Dokter Umum</h5>
							</li>
						  </ul>
						  <p class="card-text" style="text-align: justify;">Seorang profesional medis yang bertanggung jawab untuk memberikan perawatan kesehatan dasar kepada pasien dari berbagai kelompok usia. Memiliki pengetahuan luas tentang berbagai kondisi kesehatan umum dan mampu melakukan diagnosis awal, memberikan perawatan, serta merujuk pasien ke spesialis jika diperlukan</p>
                          <a href="#jadwal" class="btn button-maps btn-primary btn-sm" >Buat Jadwal</a>
                        </div>
                      </div>
				</div>
				<div class="col-md-4">
					<div class="card" data-aos="zoom-in">
                        <img src="img/doctors/doctors-2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
							<h4 class="card-title">Dr. Elena Grande</h4>
							<ul>
							  <li>
								  <h5 class="card-text" style="text-align: justify;">Dokter Gigi</h5>
							  </li>
							</ul>
							<p class="card-text" style="text-align: justify;">Seorang profesional medis yang mengkhususkan diri dalam diagnosis, pengobatan, dan pencegahan penyakit serta gangguan yang terkait dengan gigi, gusi, dan struktur mulut lainnya serta melakukan perawatan mulut yang meliputi pembersihan gigi, perawatan akar gigi, pemasangan gigi palsu.</p>
						  <br>
                          <a href="#jadwal" class="btn button-maps btn-primary btn-sm">Buat Jadwal</a>
                        </div>
                      </div>
				</div>
				<div class="col-md-4">
					<div class="card" data-aos="zoom-in">
                        <img src="img/doctors/doctors-4.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
							<h4 class="card-title">Dr. Exelyn Paramoe</h4>
							<ul>
							  <li>
								  <h5 class="card-text" style="text-align: justify;">Dokter Bedah</h5>
							  </li>
							</ul>
							<p class="card-text" style="text-align: justify;">Seorang profesional medis yang memiliki keahlian khusus dalam melakukan operasi untuk mengobati berbagai kondisi medis. Memiliki pengetahuan mendalam tentang anatomi tubuh manusia dan teknik bedah yang canggih untuk melakukan berbagai jenis operasi, mulai dari operasi sederhana hingga yang kompleks. </p>
							<br>
						  
                          <a href="#jadwal" class="btn button-maps btn-primary btn-sm">Buat Jadwal</a>
                        </div>
                      </div>
				</div>
			</div>
		</div>
<!-- END DOKTER -->

<!--CONTENT DESCRIPTIONS-->
<div class="container mt-5 mb-5">
	<div class="row gy-3 mt-5">
	  <div class="col-lg-6 left-content">
		<div class="subtitle fw-semibold" style="color: #000000;"><h1>KENAPA HARUS DI FALJET?</h1></div>
		<p class="mt-3" style="text-align: justify;">Kami menyediakan pelayanan yang komprehensif dan berkualitas untuk masyarakat setempat. Puskesmas Faljet memiliki fasilitas yang memadai, tenaga kesehatan yang profesional, dan mampu memberikan pelayanan promotif, preventif, kuratif, dan rehabilitatif secara merata dan terjangkau bagi seluruh lapisan masyarakat.</p>
	  </div>
	  <div class="col-lg-6 right-content">
		<div class="subtitle fw-semibold" style="color: #070707;"><h1>BANYAK PROMO MENARIK!</h1></div>
		<p class="mt-3" style="text-align: justify;">Dengan banyaknya promosi, tentunya Anda bisa mengakses layanan kami tanpa khawatir dengan biaya yang mahal. Pastikan memilih Puskesmas Faljet untuk menjadi bagian dari keluarga yang sehat. Setelah Anda berlangganan, kami tidak akan melupakan Anda! Akan ada banyak promo spesial hanya untuk Anda.</p>
	  </div>
	</div>
</div>
<!--END CONTENT DESCRIPTIONS-->

<!--PROMO-->
  <div class="container mt-5">
	<div class="row gy-3 mt-5">
	  <div class="col-lg-6">
		<div class="card card-promo" data-aos="zoom-in" >
		  <img src="img/promo/PROMO-1.png" class="card-img-top" alt="...">
		  <div class="card-body">
			<p class="card-text text-center fw-semibold smaller-subtitle">PROMO KUNJUNGAN PERTAMA</p>
			<p class="fw-light text-center">Hai pendatang baru! Jangan lewatkan promo menarik ini dengan datang ke tempat kami dan tunjukkan nama dan nomor telepon Anda. Dapatkan diskon 50% hanya disini!</p>
			<p class="text-center" style="color: #5DB8B1;">Berlaku sampai : 31 December 2024</p>
		  </div>
		</div>
	  </div>
	  <div class="col-lg-6">
		<div class="card card-promo"data-aos="zoom-in" >
		  <img src="img/promo/PROMO-4.png" class="card-img-top" alt="...">
		  <div class="card-body">
			<p class="card-text text-center fw-semibold smaller-subtitle">FALJETVERSARY PROMO</p>
			<p class="fw-light text-center">Penawaran Spesial Hari Jadi ke-10! Nikmati diskon 40% jika Anda hadir pada tanggal 17 Agustus 2024 di HUT Puskesmas Faljet. Promo ini berlaku untuk semua kalangan.</p>
			<p class="text-center" style="color: #5DB8B1;">Berlaku sampai : 17 Agustus 2024</p>
		  </div>
		</div>
	  </div>
	</div>
  </div>
<!--END PROMO-->


<!-- FORM JADWAL -->
<div class="container mt-5 mb-5" id="jadwal" data-aos="zoom-out">
	<h1 align="center" class="mb-5">BUAT JADWAL</h1>
    <form action="web admin/jadwal_pasien/proses.php" method="POST">
        <div class="form-group row">
          <label class="col-4 col-form-label" for="nama">Nama Lengkap</label> 
          <div class="col-8">
            <input id="nama" name="nama" placeholder="Masukkan Nama Lengkap" type="text" class="form-control" required="required">
          </div>
        </div>
        <div class="form-group row">
          <label for="no_telp" class="col-4 col-form-label">No. HP</label> 
          <div class="col-8">
            <input id="no_telp" name="no_telp" placeholder="Masukkan No. HP" type="number" class="form-control" required="required">
          </div>
        </div>
        <div class="form-group row">
          <label for="email" class="col-4 col-form-label">Email</label> 
          <div class="col-8">
            <input id="email" name="email" placeholder="Masukkan Email" type="email" class="form-control" required="required">
          </div>
        </div>
        
        <div class="form-group row">
          <label for="kategori" class="col-4 col-form-label">Kategori</label> 
          <div class="col-8">
            <select id="kategori" name="kategori" class="custom-select" required="required">
              <option value="Umum">Umum</option>
              <option value="Spesialis">Spesialis</option>
              <option value="Bidan">Bidan</option>
              <option value="Dokter Gigi">Dokter Gigi</option>
              <option value="Anastesi">Anastesi</option>
              <option value="Bedah">Bedah</option>
              <option value="Ginekolog">Ginekolog</option>
            </select>
            <span id="radioHelpBlock" class="form-text text-muted">Klik untuk Memilih</span>
          </div>
        </div>

        <div class="form-group row">
          <label for="tanggal" class="col-4 col-form-label">Pilih Tanggal</label> 
          <div class="col-8">
            <input id="tanggal" name="tanggal" placeholder="Pilih Tanggal" type="date" class="form-control" required="required">
          </div>
        </div>

        <div class="form-group row">
          <label for="pesan" class="col-4 col-form-label">Pesan</label> 
          <div class="col-8">
            <textarea id="pesan" name="pesan" cols="40" rows="5" class="form-control" placeholder="Masukkan Pesan Anda"></textarea>
          </div>
        </div> 
        <div class="form-group row">
          <div class="offset-4 col-8">
            <button name="submit" type="submit" value=<?php echo date("h:i:sa")?> class="btn btn-primary">Kirim</button>
          </div>
        </div>
    </form>
</div>
<!-- END FORM JADWAL -->

<!-- TESTIMONI -->
<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" data-aos="zoom-in">
	<div class="carousel-inner">
	  <div class="carousel-item active">
		<div style="background-color: #F8F9F2; border: 1px solid transparent;" class="card text-align-center">
			<div class="card-body">
				<center>
				<h1 class="card-title pt-5 pb-5">Testimoni</h1>
				<div class="reviews-stars">
					<i class="bi-star-fill"></i>
					<i class="bi-star-fill"></i>
					<i class="bi-star-fill"></i>
					<i class="bi-star-fill"></i>
					<i class="bi-star-fill"></i>
				</div>
				<h5 class="card-title">Pelayanan Ramah dan Profesional</h5>
				<p class="card-text col-md-5" style="font-style: italic; text-align: center;">"Saya sangat puas dengan pelayanan di Puskesmas Faljet. Petugasnya ramah dan profesional dalam memberikan layanan kesehatan. Mereka selalu memberikan penjelasan yang jelas dan mendalam tentang kondisi kesehatan saya."</p>
				</center>
				<div style="display: flex;" class="col-md-2 mt-5 container">
				<img src="img/doctors/dr.1.JPG" class="img-fluid reviews-image rounded-circle" style="width: 90px; height: 90px;" alt="">
				<figcaption class="mt-4">
					<strong>Falah</strong><br>
					<span class="text-muted">Pasien</span>
				</figcaption>
				</div>
				<br>
			</div>
		</div>
	  </div>
	  <div class="carousel-item">
		<div style="background-color: #F8F9F2; border: 1px solid transparent;" class="card text-align-center">
			<div class="card-body">
				<center>
					<h1 class="card-title pt-5 pb-5">Testimoni</h1>
				<div class="reviews-stars">
					<i class="bi-star-fill"></i>
					<i class="bi-star-fill"></i>
					<i class="bi-star-fill"></i>
					<i class="bi-star-fill"></i>
					<i class="bi-star-fill"></i>
				</div>
				<h5 class="card-title">Fasilitas yang Memadai</h5>
				<p class="card-text col-md-5" style="font-style: italic;">"Puskesmas Faljet memiliki fasilitas yang sangat memadai. Mulai dari ruang tunggu yang nyaman hingga peralatan medis yang modern. Saya merasa aman dan percaya diri mendapatkan perawatan kesehatan di sini."</p>
				</center>
				<div style="display: flex;" class="col-md-2 mt-5 container">
					<img src="img/doctors/dr.2.JPG" class="img-fluid reviews-image rounded-circle" style="width: 90px; height: 90px;" alt="">
					<figcaption class="mt-4">
						<strong>Rahma</strong><br>
						<span class="text-muted">Pasien</span>
					</figcaption>
				</div>
				<br>
			</div>
		  </div>
	  </div>
	  <div class="carousel-item">
		<div style="background-color: #F8F9F2; border: 1px solid transparent;" class="card text-align-center">
			<div class="card-body">
				<center>
					<h1 class="card-title pt-5 pb-5">Testimoni</h1>
				<div class="reviews-stars">
					<i class="bi-star-fill"></i>
					<i class="bi-star-fill"></i>
					<i class="bi-star-fill"></i>
					<i class="bi-star-fill"></i>
					<i class="bi-star-fill"></i>
				</div>
				<h5 class="card-title">Dokter dan Tenaga Medis Kompeten</h5>
				<p class="card-text col-md-5" style="font-style: italic;">"Dokter dan tenaga medis di Puskesmas Faljet sangat kompeten. Mereka memiliki pengetahuan yang luas dan keterampilan yang sangat baik dalam menangani berbagai masalah kesehatan."</p>
				</center>
				<div style="display: flex;" class="col-md-2 mt-5 container">
					<img src="img/doctors/dr.3.JPG" class="img-fluid reviews-image rounded-circle" style="width: 90px; height: 90px;" alt="">
					<figcaption class="mt-4">
						<strong>Salwa</strong><br>
						<span class="text-muted">Pasien</span>
					</figcaption>
				</div>
				<br>
			</div>
		  </div>
	  </div>
	</div>
	<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
	  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	  <span class="visually-hidden">Previous</span>
	</button>
	<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
	  <span class="carousel-control-next-icon" aria-hidden="true"></span>
	  <span class="visually-hidden">Next</span>
	</button>
</div>
<!-- END TESTIMONI -->

<!-- LOKASI -->
<div data-aos="zoom-in" id="lokasi">
<div class="container mt-5">
	<div class="page-header">
		<h1 class="text-center">
			Lokasi Kami
		</h1>
	</div>
</div>

<div class="mt-5">
	<iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d89745.88902554788!2d106.80365004027017!3d-6.23134279604534!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1715276976674!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
</div>
<!-- LOKASI -->
		
<!-- FOOTER -->
<footer class="text-black pt-5 mt-5 ms-0" id="contact">
    <div class="container mx-auto">
      <div class="row gy-3">
        
        <div class="col-md-6 col-lg-6 col-xl-3 mx-auto mt-3">
            
          <h5 class="text-uppercase mb-4 font-weight-bold theme-text">Faljet</h5>
          <p style="text-align: justify;">Puskesmas Faljet memiliki fasilitas yang memadai, tenaga kesehatan yang profesional, dan mampu memberikan pelayanan promotif, preventif, kuratif, dan rehabilitatif secara merata dan terjangkau bagi seluruh lapisan masyarakat.</p>
        </div>

        <div class="col-md-6 col-lg-6 col-xl-2 mx-auto mt-3 ml-5">
          <h5 class="text-uppercase mb-4 font-weight-bold theme-text">Link</h5>
          <p>
            <a href="#home" class="text-black" style="text-decoration: none;">Home</a>
          </p>
          <p>
            <a href="#about" class="text-black" style="text-decoration: none;">Tentang</a>
          </p>
		  <p>
            <a href="#doctor" class="text-black" style="text-decoration: none;">Dokter</a>
          </p>
          <p>
            <a href="#lokasi" class="text-black" style="text-decoration: none;">Lokasi Kami</a>
          </p>
		  <p>
            <a href="#contact" class="text-black" style="text-decoration: none;">Kontak Kami</a>
          </p>
        </div>

        <div class="col-md-6 col-lg-6 col-xl-3 mx-auto mt-3">
          <h5 class="text-uppercase mb-4 font-weight-bold theme-text">Kontak</h5>
          <p>
            <i class="fas fa-home mr-3"></i><span class="ps-3">Jakarta, Indonesia. 18229</span>
          </p>
          <p>
            <i class="fas fa-envelope mr-3"></i><span class="ps-3">faljet@gmail.com</span>
          </p>
          <p>
            <i class="fas fa-phone mr-3"></i><span class="ps-3">+62 8889 7776</span>
          </p>
         </div>
      </div>

    	<div class="row align-items-center mt-5">
            <div class="mx-auto p-2" align="center" style="width: 500px;">
              <p>Copyright ©2024 All rights reserved by:
                <a href="#" style="text-decoration: none;">
                  <strong class="theme-text">Faljet</strong>
                </a>
				<br><small>Login Admin <a href="web admin/login.php">Here</a></small>
              </p>
			</div>
        </div>
	</div>
</footer>
<!-- END FOOTER-->

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	<script>
		AOS.init();
	  </script>
  </body>
</html>