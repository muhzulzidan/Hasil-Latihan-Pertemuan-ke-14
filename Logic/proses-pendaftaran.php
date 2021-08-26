<?php

include("koneksi.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['sekolah_asal'];

    // echo semua data
    // echo "Nama: ".$nama."<br>";
    // echo "Alamat: ".$alamat."<br>";
    // echo "Jenis kelamin: ".$jk."<br>";
    // echo "Agama: ".$agama."<br>";
    // echo "Sekolah Asal: ".$sekolah."<br>";

    // buat query
    $sql = "INSERT INTO calon_peserta (nama, alamat, jenis_kelamin, agama, sekolah_asal) VALUE ('$nama', '$alamat', '$jk', '$agama', '$sekolah')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        echo "berhasil";
        // header('Location: ../index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        echo "galgal";
        // header('Location: ../index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>