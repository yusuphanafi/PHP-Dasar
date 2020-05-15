<?php 

session_start();
if ( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

// pagination
// konfigurasi
$jumlahDataPerHalaman = 2;
$jumlahData = count(query("SELECT * FROM mahasiswa"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = ( isset($_GET["halaman"]) ) ? $_GET["halaman"] : 1;
/*
    (Rumus halaman aktif ^^)
    if ( isset($_GET["halaman"]) ) {
        $halamanAktif = $_GET["halaman"];   
    } else {
        $halamanAktif = 1;
    } 
*/

// halaman = 2, awalData = 3    -> index dimulai dari 0
$awalData = ( $jumlahDataPerHalaman * $halamanAktif ) - $jumlahDataPerHalaman;

$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awalData, $jumlahDataPerHalaman");

// tombol cari diklik
if( isset($_POST["cari"]) ) {
    $mahasiswa = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Admin</title>
</head>
<body>

<a href="logout.php">Logout</a>
    
<h1>Daftar Mahasiswa</h1>

<a href="tambah.php">Tambah data mahasiswa</a>
<br><br>

<form action="" method="post">

    <input type="text" name="keyword" size="30" autofocus 
    placeholder="Masukkan keyword pencarian.." autocomplete="off">
    <button type="submit" name="cari">Cari!</button>

</form>
<br><br>

<!-- navigasi -->

<?php if ( $halamanAktif > 1 ) : ?>
    <a href="?halaman=<?= $halamanAktif - 1; ?>">&laquo;</a> 
<?php endif; ?>

<?php for( $i = 1; $i <= $jumlahHalaman; $i++ ) : ?>
    
    <?php if( $i == $halamanAktif ) : ?>
        <a href="?halaman=<?= $i; ?>" style="font-weight: bold; color: red;"> 
            <?= $i; ?> 
        </a>
    <?php else : ?>
        <a href="?halaman=<?= $i; ?>"> 
            <?= $i; ?> 
        </a>
    <?php endif; ?>

<?php endfor; ?>

<?php if ( $halamanAktif < $jumlahHalaman ) : ?>
    <a href="?halaman=<?= $halamanAktif + 1; ?>">&raquo ;</a> 
<?php endif; ?>

<br>
<table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>Npm</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach( $mahasiswa as $row ) : ?>
        <tr>
            <td> <?= $i; ?> </td>
            <td>
                <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a> |
                <a href="hapus.php?id=<?= $row["id"]; ?>" 
                onclick="return confirm('Apakah anda yakin akan menghapus data?');">hapus</a>
            </td>
            <td><img src="img/<?= $row["gambar"]; ?>" 
            width="50" ></td>
            <td> <?= $row["npm"]; ?> </td>
            <td> <?= $row["nama"]; ?> </td>
            <td> <?= $row["email"]; ?> </td>
            <td> <?= $row["jurusan"]; ?> </td>
        </tr>
    <?php $i++; ?>
    <?php endforeach; ?>

</table>

</body>
</html>