<!-- <?php 
// variable scope / lingkup variabel
$x = 10;

function tampilX(){
    global $x;
    echo $x;
}

tampilX();
?>

<?php 
// SUPERGLOBALS
// bariable global milik PHP
// merupakan Array Associative
echo $_SERVER["SERVER_NAME"];
?> -->

<!-- <?php 
$_GET["nama"] = "Yucub Hanafi";
var_dump($_GET);
?> -->

<?php 
// $_GET
$mahasiswa = [
    [
    "nama" => "Yucubbb", 
    "npm" => "17111100019",
    "email" => "yhan4fi@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "yucubb.jpg"
    ],

    [
    "nama" => "Vitaaa", 
    "npm" => "18111100020",
    "email" => "vita@gmail.com",
    "jurusan" => "Administrasi Perkantoran",
    // "tugas" => [90, 80, 100]
    "gambar" => "vita.jpg"
    ]
];
?>
<!DOCTYPE html>
<html>
<head>
    <title>GET</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<ul>
<?php foreach( $mahasiswa as $mhs ) : ?>
    <li>
        <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&npm=<?= $mhs["npm"]; ?>
        &email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>
        &gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?> </a>
    </li>
<?php endforeach; ?>
</ul>
</body>
</html>