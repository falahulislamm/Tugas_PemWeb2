<?php
$ar_prodi = [
    "SI" => "Sistem Informasi",
    "TI" => "Teknik Informatika",
    "BD" => "Bisnis Digital"
];
$ar_skill = [
    "HTML" => 10,
    "CSS" => 10,
    "JavaScript" => 20,
    "RWD Bootstrap" => 20,
    "PHP" => 30,
    "Python" => 30,
    "Java" => 50
];
$ar_domisili = [
    "Jakarta",
    "Bogor",
    "Depok",
    "Tanggerang",
    "Bekasi",
    "Lainnya"
];
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Registrasi IT Club Data Science</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <fieldset class="py-5">
            <legend>Form Registrasi IT Club Data Science</legend>
            <form method="post" action="#"> 
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">NIM</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="nim" name="nim">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                </div>
                <fieldset class="row mb-3">
                    <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                    <div class="col-sm-10">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki"
                                value="Laki-laki" checked>
                            <label class="form-check-label" for="laki">
                                Laki-Laki
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan"
                                value="Perempuan">
                            <label class="form-check-label" for="perempuan">
                                Perempuan
                            </label>
                        </div>
                    </div>
                </fieldset>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Program Studi</label>
                    <div class="col-sm-10">
                        <select class="form-select" id="prodi" name="prodi">
                            <?php foreach ($ar_prodi as $key => $value): ?>
                                <option value="<?= $key ?>">
                                    <?= $value ?>
                                </option>
                            <?php endforeach ?>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Skill Web & Programming</label>
                    <div class="col-sm-10">
                        <?php foreach ($ar_skill as $tech => $nilai): ?>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="skill[]" value="<?= $tech ?>">
                                <label class="form-check-label" for="html">
                                    <?= $tech ?>
                                </label>
                            </div>
                        <?php endforeach ?>

                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Tempat Domisili</label>
                    <div class="col-sm-10">
                        <select class="form-select" id="domisili" name="domisili">
                            <?php foreach ($ar_domisili as $value): ?>
                                <option value="<?= $value ?>">
                                    <?= $value ?>
                                </option>
                            <?php endforeach ?>
                        </select>
                    </div>

                </div>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                </div>
                <div class="form-group row mt-3 mx-3">
                    <div class="offset-2 col-6">
                        <button type="submit" name="submit" class="btn btn-primary"> Submit</button>
                    </div>
                </div>
            </form>
        </fieldset>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>


<?php
$ar_prodi = [
    "SI" => "Sistem Informasi",
    "TI" => "Teknik Informatika",
    "BD" => "Bisnis Digital"
];
$ar_skill = [
    "HTML" => 10,
    "CSS" => 10,
    "JavaScript" => 20,
    "RWD Bootstrap" => 20,
    "PHP" => 30,
    "Python" => 30,
    "Java" => 50
];
$ar_domisili = [
    "Jakarta",
    "Bogor",
    "Depok",
    "Tanggerang",
    "Bekasi",
    "Lainnya"
];
function skor_skill($pilihan) {
    global $ar_skill;
    $skor = 0;
    foreach ($pilihan as $skill) {
        if (isset($ar_skill[$skill])) {
            $skor += $ar_skill[$skill];
        }
    }
    return $skor;
}

function kategori_skill($skor) {
    if ($skor <= 0) {
        return "Tidak Memadai";
    } elseif ($skor <= 40) {
        return "Kurang";
    } elseif ($skor <= 60) {
        return "Cukup";
    } elseif ($skor <= 100) {
        return "Baik";
    } elseif ($skor <= 150) {
        return "Sangat Baik";
    } elseif ($skor <= 170) {
        return "Sepuh";
    } else {
        return "Invalid";
    }
}

if (isset($_POST['submit'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jk = $_POST['jenis_kelamin'];
    $prodi = $_POST['prodi'];
    $domisili = $_POST['domisili'];
    $email = $_POST['email'];
    $skill_pilihan = isset($_POST['skill']) ? $_POST['skill'] : [];

    $skor = skor_skill($skill_pilihan);
    $kategori = kategori_skill($skor);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Registrasi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        .result {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .result h2 {
            margin-bottom: 20px;
        }
        .list-group-item {
            background-color: transparent;
            border: none;
            padding: 5px 0;
        }
        .list-group-item strong {
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="result">
            <h2>Hasil Registrasi</h2>
            <ul class="list-group">
                <li class="list-group-item"><strong>NIM :</strong> <?= $nim ?></li>
                <li class="list-group-item"><strong>Nama :</strong> <?= $nama ?></li>
                <li class="list-group-item"><strong>Jenis Kelamin :</strong> <?= $jk ?></li>
                <li class="list-group-item"><strong>Program Studi :</strong> <?= $ar_prodi[$prodi] ?></li>
                <li class="list-group-item"><strong>Skill :</strong> <?= implode(", ", $skill_pilihan) ?></li>
                <li class="list-group-item"><strong>Skor Skill :</strong> <?= $skor ?></li>
                <li class="list-group-item"><strong>Kategori Skill :</strong> <?= $kategori ?></li>
                <li class="list-group-item"><strong>Email :</strong> <?= $domisili ?></li>
                <li class="list-group-item"><strong>Email :</strong> <?= $email ?></li>
            </ul>
        </div>
    </div>
</body>
</html>

<?php
}
?>