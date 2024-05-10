<?php
require_once 'header.php';
require_once 'sidebar.php';

require '../dbkoneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // Query untuk mengambil data users berdasarkan id
    $sql = "SELECT * FROM jadwal_pasien WHERE id = ?";
    $stmt = $dbh->prepare($sql);
    $stmt->execute([$id]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
}

if (isset($_POST['submit'])) {
    $_nama = $_POST['nama'];
    $_no_telp = $_POST['no_telp'];
    $_email = $_POST['email'];
    $_kategori = $_POST['kategori'];
    $_tanggal = $_POST['tanggal'];
    $_pesan = $_POST['pesan'];
    $_submit = $_POST['submit'];
    $data = [$_nama, $_no_telp, $_email, $_kategori, $_tanggal, $_pesan, $_submit, $id];
    // Query SQL untuk update data users berdasarkan id
    $sql = "UPDATE jadwal_pasien SET nama = ?, no_telp = ?, email = ?, kategori = ?, tanggal = ?, pesan = ?, submit = ? WHERE id = ?";
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
                            <h2 class="text-center">Edit Form Pasien dari Website</h2>
                            <form action="edit.php?id=<?= $row['id'] ?>" method="POST">

                            <div class="form-group row">
                                    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label>
                                    <div class="col-8">
                                        <input id="nama" name="nama" type="text" class="form-control" value="<?= $row['nama'] ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="no_telp" class="col-4 col-form-label">No. HP</label>
                                    <div class="col-8">
                                        <input id="no_telp" name="no_telp" type="text" class="form-control" value="<?= $row['no_telp'] ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-4 col-form-label">Email</label>
                                    <div class="col-8">
                                        <input id="email" name="email" type="email" class="form-control" value="<?= $row['email'] ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="kategori" class="col-4 col-form-label">Kategori</label>
                                    <div class="col-8">
                                        <select id="kategori" name="kategori" class="custom-select">
                                            <option value="Umum" <?= ($row['kategori'] == 'Umum') ? 'selected' : '' ?>>Umum</option>
                                            <option value="Spesialis" <?= ($row['kategori'] == 'Spesialis') ? 'selected' : '' ?>>Spesialis</option>
                                            <option value="Bidan" <?= ($row['kategori'] == 'Bidan') ? 'selected' : '' ?>>Bidan</option>
                                            <option value="Dokter Gigi" <?= ($row['kategori'] == 'Dokter Gigi') ? 'selected' : '' ?>>Dokter Gigi</option>
                                            <option value="Anastesi" <?= ($row['kategori'] == 'Anastesi') ? 'selected' : '' ?>>Anastesi</option>
                                            <option value="Bedah" <?= ($row['kategori'] == 'Bedah') ? 'selected' : '' ?>>Bedah</option>
                                            <option value="Ginekolog" <?= ($row['kategori'] == 'Ginekolog') ? 'selected' : '' ?>>Ginekolog</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tanggal" class="col-4 col-form-label">Tanggal</label>
                                    <div class="col-8">
                                        <input id="tanggal" name="tanggal" type="date" class="form-control" value="<?= $row['tanggal'] ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="pesan" class="col-4 col-form-label">Pesan</label>
                                    <div class="col-8">
                                        <input id="pesan" name="pesan" type="textarea" class="form-control" value="<?= $row['pesan'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="submit" class="col-4 col-form-label">Submit</label>
                                    <div class="col-8">
                                        <input id="submit" name="submit" type="time" class="form-control" value="<?= $row['submit'] ?>" required>
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