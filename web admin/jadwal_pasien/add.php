<?php
require_once 'header.php';
require_once 'sidebar.php';

require '../dbkoneksi.php';
if (isset($_POST["submit"])) {
    $_nama = $_POST['nama'];
    $_no_telp = $_POST['no_telp'];
    $_email = $_POST['email'];
    $_kategori = $_POST['kategori'];
    $_tanggal = $_POST['tanggal'];
    $_pesan = $_POST['pesan'];
    $_submit = $_POST['submit'];
    $data = [$_nama, $_no_telp, $_email, $_kategori, $_tanggal, $_pesan, $_submit];
    $sql = "INSERT INTO jadwal_pasien (nama, no_telp, email, kategori, tanggal, pesan, submit) VALUES (?,?,?,?,?,?,?)";
    $stmt = $dbh->prepare($sql);
    $stmt->execute($data);
    echo "<script>window.location.href = 'index.php';</script>";
}
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
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
                            <h3 class="card-title">Form Pasien dari Website</h3>

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
                            <h2 class="text-center">Tambah Data Form Pasien dari Website</h2>
                            <form action="add.php" method="POST">
                                <div class="form-group row">
                                    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label>
                                    <div class="col-8">
                                        <input id="nama" name="nama" type="text" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="no_telp" class="col-4 col-form-label">No. HP</label>
                                    <div class="col-8">
                                        <input id="no_telp" name="no_telp" type="text" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-4 col-form-label">Email</label>
                                    <div class="col-8">
                                        <input id="email" name="email" type="email" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="kategori" class="col-4 col-form-label">Kategori</label>
                                    <div class="col-8">
                                        <select id="kategori" name="kategori" class="custom-select">
                                            <option value="Umum">Umum</option>
                                            <option value="Spesialis">Spesialis</option>
                                            <option value="Bidan">Bidan</option>
                                            <option value="Dokter Gigi">Dokter Gigi</option>
                                            <option value="Anastesi">Anastesi</option>
                                            <option value="Bedah">Bedah</option>
                                            <option value="Ginekolog">Ginekolog</option>
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tanggal" class="col-4 col-form-label">Tanggal</label>
                                    <div class="col-8">
                                        <input id="tanggal" name="tanggal" type="date" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="pesan" class="col-4 col-form-label">Pesan</label>
                                    <div class="col-8">
                                        <input id="pesan" name="pesan" type="textarea" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="submit" class="col-4 col-form-label">Submit</label>
                                    <div class="col-8">
                                        <input id="submit" name="submit" type="time" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-4 col-8">
                                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            Projek 1 - Aplikasi Web Sederhana Klinik
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