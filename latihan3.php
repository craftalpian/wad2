<?php
error_reporting(0);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kalkulator Suhu Celcius</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-4">
        <div class="card">
            <form class="card-body" method="get">
                <?php
                $suhu = $_GET['suhu'];
                $jenis_suhu = $_GET['jenis_suhu'];
                $hasil = null;

                if ($jenis_suhu == "c") {
                    $hasil = "$suhu °C";
                } else if ($jenis_suhu == "k") {
                    $hasil = $suhu+273.15." °K";
                } else if ($jenis_suhu == "f") {
                    $hasil = ((9/5)*$suhu+32)." °F";
                } else if ($jenis_suhu == "r") {
                    $hasil = ((4/5)*$suhu)." °R";
                }

                if (isset($suhu) && isset($jenis_suhu) && isset($hasil)) {
                    echo '<div class="alert alert-success" role="alert">
                    Hasil '.$suhu.'°C → ' . $hasil .'
                  </div>';
                }
                ?>
                <h1>Hitung!</h1>
                <div class="mb-3">
                    <label class="form-label">Suhu (Celcius)</label>
                    <input type="number" name="suhu" class="form-control" placeholder="5" value="<?php echo $suhu ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Jenis Suhu Yang Diubah</label>
                    <select class="form-select" name="jenis_suhu">
                        <option value="c" selected>Celcius</option>
                        <option value="k">Kelvin</option>
                        <option value="r">Reamur</option>
                        <option value="f">Fahrennheit</option>
                    </select>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button id="calculate" class="btn btn-primary" type="submit">Hitung</button>
                </div>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>