<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<!-- KONTEN KIRI -->
<div class="row">
<div class="konten-kiri col-md-6 mb-5">
<h2>Belanja Online</h2>
<div class="container-fluid mt-5">
<form method="GET" action="#">
  <div class="form-group row">
    <label for="nama" class="col-3 col-form-label">Customer</label> 
    <div class="col-7">
      <input id="nama" name="nama_cust" placeholder="Nama Customer" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-3">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio" id="radio_0" type="radio" class="custom-control-input" value="TV" required="required"> 
        <label for="radio_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio" id="radio_1" type="radio" class="custom-control-input" value="Kulkas" required="required"> 
        <label for="radio_1" class="custom-control-label">Kulkas</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio" id="radio_2" type="radio" class="custom-control-input" value="Mesin Cuci" required="required"> 
        <label for="radio_2" class="custom-control-label">Mesin Cuci</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="text" class="col-3 col-form-label">Jumlah</label> 
    <div class="col-4">
      <input id="text" name="total" placeholder="Masukkan Jumlah" type="text" class="form-control" required="required">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-3 col-8 mt-2">
      <button name="submit" type="submit" class="btn btn-primary">Kirim</button>
    </div>
  </div>
</form>
</div>
</div>

<!-- KONTEN KANAN -->
  <div class="konten-kanan col-md-6">
    <div class="ml-5">
        <div class="ml-5">
            <div class="ml-5">
                <div class="ml-5">
                  <div class="ml-5">
                    <ul class="list-group">
                      <li class="list-group-item active">Daftar Harga</li>
                      <li class="list-group-item">TV : Rp. 4.200.000</li>
                      <li class="list-group-item">Kulkas : Rp. 3.100.000</li>
                      <li class="list-group-item">Mesin Cuci : Rp. 3.800.000</li>
                      <li class="list-group-item active">Harga Dapat Berubah Setiap Saat</li>
                    </ul>
                  </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>

<!-- PHP -->
<div class="container-fluid">
<?php
// MENGECEK VALUE AGAR TIDAK ERROR
if (isset($_GET['nama_cust']) && isset($_GET['radio']) && isset($_GET['total']))
{
  
// DEKLARASI VARIABEL
$nama_customer = $_GET["nama_cust"];
$pilih_produk = $_GET["radio"];
$total_produk = $_GET["total"];
$harga_tv = 4200000;
$harga_kulkas = 3100000;
$harga_mesin_cuci = 3800000;

// MENGHITUNG TOTAL BELANJA
switch ($pilih_produk) 
{
    case 'TV':
        $total = $harga_tv * $total_produk;
        break;
    case 'Kulkas':
        $total = $harga_kulkas * $total_produk;
        break;
    case 'Mesin Cuci':
        $total = $harga_mesin_cuci * $total_produk;
        break;
    default:
        echo "Produk tidak valid";
        break;
}

// MENAMPILKAN OUTPUT
echo "Nama Customer: ". $nama_customer . "<br>";
echo "Produk Pilihan: ". $pilih_produk . "<br>";
echo "Jumlah Beli: ". $total_produk . "<br>";
echo "Total Belanja: " . "Rp. ".  $total;
}
?>
</div>