<?php
//untuk menghubngkan ke database phpdasar
$conn = mysqli_connect("localhost", "root", "", "interview2");

function query($query)
{
    global $conn; // mengambil variabel $conn diluar function query
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


function tambah($data)
{
    global $conn;
    //ambil data tiap elemen dalam form
    // htmlspecialchars berfungsi agar usertidak bisa menginput kode dalam inpurtan form karena berbahaya
    $nim = htmlspecialchars($data["nim"]);
    $nama = htmlspecialchars($data["nama"]);
    $pstudi = htmlspecialchars($data["pstudi"]);
    $nohp = htmlspecialchars($data["nohp"]);

    // query insert data
    $query = "INSERT INTO mahasiswa VALUES ('', '$nim','$nama','$pstudi','$nohp')";
    mysqli_query($conn, "$query");

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;

    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id= $id");

    return mysqli_affected_rows($conn);
}

function edit($data)
{
    global $conn;

    $id = $data["id"];

    $nim = htmlspecialchars($data["nim"]);
    $nama = htmlspecialchars($data["nama"]);
    $pstudi = htmlspecialchars($data["pstudi"]);
    $nohp = htmlspecialchars($data["nohp"]);

    // query insert data
    $query = "UPDATE mahasiswa SET 
    nim = '$nim',
    nama = '$nama',
    pstudi = '$pstudi',
    nohp = '$nohp' 
    WHERE id = $id
    ";

    mysqli_query($conn, $query);

    //kembalikan return angka ketika ada data yang berhasil diupdate
    return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    $query = "SELECT * FROM mahasiswa
    WHERE
    nim LIKE '%$keyword%' OR
    nama LIKE '%$keyword%' OR
    pstudi LIKE '%$keyword%' OR
    nohp LIKE '%$keyword%'
    ";
    return query($query);
}
