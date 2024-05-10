<?php
require_once 'header.php';
require_once 'sidebar.php';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Dashboard Website</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Projek 1 - Aplikasi Web Sederhana Puskesmas</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                        <h4 class="text-center mt-4"><b>Selamat Datang Di Aplikasi Web Sederhana Puskesmas Faljet</b> <br><i>Projek 1 - Pemrograman Web 2</i></h4>
                        <hr style="border-bottom: 1px solid black;">

                        <fieldset>
                        <legend style="color: black; font-weight: bold;">Pengumuman</legend>
                        <article style="text-align: justify; color: black;"><span style="font-size: 150%;">D</span>iberitahukan kepada seluruh pegawai Faljet, bahwa terdapat beberapa pembaruan dan informasi penting yang perlu diperhatikan. Mohon untuk membaca dengan seksama dan mengambil tindakan yang diperlukan:
                        <ol>
                        <li>
                            <b>Jadwal Pelayanan:</b> Mulai tanggal 30 Mei 2024, jadwal pelayanan akan diperpanjang hingga pukul 20.00 WIB setiap hari Senin hingga Jumat. Sabtu dan Minggu tetap beroperasi hingga pukul 13.00 WIB.
                        </li>
                        <li>
                            <b>Pelatihan Kesehatan:</b> Akan ada pelatihan kesehatan tentang "Penanganan Awal Cidera Ringan" pada tanggal 25 Mei 2024, pukul 09.00 di ruang pertemuan utama.
                        </li>
                        <li>
                            <b>Penggantian Jadwal:</b> Dr. Jack Sparrow akan menggantikan jadwal Dr. Robert Brown pada hari Rabu, 28 Mei 2024.
                        </li>
                        </ol>    
                        Mohon perhatikan pengumuman ini dengan baik dan seksama. Terima kasih atas perhatiannya.
                        </article>
                        </fieldset>

                        <!-- KALENDER -->
                        <hr style="border-bottom: 1px solid black;">
                        <fieldset class="mb-3">
                        
                        
                        <legend style="color: black; font-weight: bold;">Calendar</legend>

                        <div class="row">
				<div class="col-md-12">
					<div class="elegant-calencar d-md-flex">
						<div class="wrap-header d-flex align-items-center img" style="background-image: url(calendar-07/images/bg.jpg);">
				      <p id="reset">Today</p>
			        <div id="header" class="p-0">
								<!-- <div class="pre-button d-flex align-items-center justify-content-center"><i class="fa fa-chevron-left"></i></div> -->
		            <div class="head-info">
		            	<div class="head-month"></div>
		                <div class="head-day"></div>
		            </div>
		            <!-- <div class="next-button d-flex align-items-center justify-content-center"><i class="fa fa-chevron-right"></i></div> -->
			        </div>
			      </div>
			      <div class="calendar-wrap">
			      	<div class="w-100 button-wrap">
				      	<div class="pre-button d-flex align-items-center justify-content-center"><i class="fa fa-chevron-left"></i></div>
				      	<div class="next-button d-flex align-items-center justify-content-center"><i class="fa fa-chevron-right"></i></div>
			      	</div>
			        <table id="calendar">
		            <thead>
		                <tr>
	                    <th>Sun</th>
	                    <th>Mon</th>
	                    <th>Tue</th>
	                    <th>Wed</th>
	                    <th>Thu</th>
	                    <th>Fri</th>
	                    <th>Sat</th>
		                </tr>
		            </thead>
		            <tbody>
	                <tr>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                </tr>
	                <tr>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                </tr>
	                <tr>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                </tr>
	                <tr>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                </tr>
	                <tr>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                </tr>
	                <tr>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                </tr>
		            </tbody>
			        </table>
			      </div>
			    </div>
				</div>
			</div>              
                        </fieldset>
                        <!-- KALENDER -->
                        
                        <!-- /.card-body -->
                        <div class="card-footer">
                            Projek 1 - Aplikasi Web Sederhana Puskesmas
                        </div>
                        <!-- /.card-footer-->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
require_once 'footer.php';
?>