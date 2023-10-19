<?php
error_reporting(0);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-4">
        <div class="card">
            <form class="card-body" method="get">
                <?php
                $pertama = $_GET['pertama'];
                $kedua = $_GET['kedua'];
                $operasi = $_GET['operasi'];
                $final_operasi = null;

                if ($operasi == "add") {
                    $final_operasi = "+";
                } else if ($operasi == "min") {
                    $final_operasi = "-";
                } else if ($operasi == "div") {
                    $final_operasi = "/";
                } else if ($operasi == "mul") {
                    $final_operasi = "*";
                }

                if (isset($pertama) && isset($kedua) && isset($operasi)) {
                    echo '<div class="alert alert-success" role="alert">
                    Hasil ' . $pertama . $final_operasi . $kedua . ': '.eval("return $pertama$final_operasi$kedua ;").'
                  </div>';
                }
                ?>
                <h1>Hitung!</h1>
                <div class="mb-3">
                    <label class="form-label">Angka Pertama</label>
                    <input type="number" name="pertama" class="form-control" placeholder="5">
                </div>
                <div class="mb-3">
                    <label class="form-label">Pilih Operasi</label>
                    <select class="form-select" name="operasi">
                        <option value="add" selected>Tambah</option>
                        <option value="min">Kurang</option>
                        <option value="div">Bagi</option>
                        <option value="mul">Kali</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Angka Kedua</label>
                    <input type="number" class="form-control" name="kedua" placeholder="7">
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button id="calculate" class="btn btn-primary" type="submit">Hitung</button>
                </div>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- <script>
        const angkaPertama = document.getElementById("calculate").val()
        const angkaPertama = document.getElementById("calculate").val()
        document.getElementById("calculate").addEventListener("click", function(){

        });
    </script> -->
</body>

</html>