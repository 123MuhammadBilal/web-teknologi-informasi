<?php

require 'function.php';

$mahasiswa =  query("SELECT * FROM mahasiswa ORDER BY nim ASC ");

// tombol cari diklik
if (isset($_POST["cari"])) {
    $mahasiswa = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- MY CSS -->
    <link rel="stylesheet" href="css/style.css?<?= time() ?>" />

    <title>Document</title>
</head>

<body>
    <section id="data-page">
        <div class="card container">
            <div class="row justify-content-around">
                <div class="col-lg-8 col-md-10 col-sm-12">
                    <h1 class="text-center mt-5 mb-4">Daftar mahasiswa</h1>
                    <a href="data.php"><button class="btn btn-danger float-end">Kembali</button></a>

                    <a href="tambah.php" class="d-block"><button class="btn btn-success mb-3">Tambah Data</button></a>

                    <form action="" method="post">
                        <input type="text" name="keyword" autofocus placeholder="Cari mahasiswa" autocomplete="off">
                        <button type="submit" name="cari" class="btn btn-primary">Cari</button>
                    </form>

                    <table class="table table-dark justify-content-center mt-2">
                        <tr>
                            <th>No.</th>
                            <th>Aksi</th>
                            <th>Nim</th>
                            <th>Nama</th>
                            <th>Program Studi</th>
                            <th>No Hp</th>
                        </tr>

                        <?php $i = 1; ?>
                        <?php foreach ($mahasiswa as $row) : ?>
                            <tr class="table-secondary">
                                <td><?= $i++; ?></td>
                                <td>
                                    <a href="edit.php?id=<?= $row["id"]; ?>"><button class="btn btn-primary">Ubah</button></a>
                                    <!-- "onclick" dari JS untuk membuat alert pilihan YES or NO saat menekanan hapus -->
                                    <a href="hapus.php?id=<?= $row["id"] ?>" onclick="return confirm('yakin?')"><button class="btn btn-danger">Hapus</button></a>
                                </td>
                                <td><?= $row["nim"]; ?></td>
                                <td><?= $row["nama"]; ?></td>
                                <td><?= $row["pstudi"]; ?></td>
                                <td><?= $row["nohp"]; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </section>
</body>

</html>