<?php 
$mahasiswa = [
    ["Yucub", "17111100019", "Teknik Informatika", "yhan4fi@gmail.com"],
    ["Kampang", "17111100020", "Teknik Informatika", "kampank@gmail.com"],
    ["Keple", "17111100030", "Teknik Informatika", "keple@gmail.com"]
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>

    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs) : ?>
    <ul>
        <li> Nama : <?= $mhs[0]; ?> </li>
        <li> NPM : <?= $mhs[1]; ?> </li>
        <li> Jurusan : <?= $mhs[2]; ?> </li>
        <li> E-mail : <?= $mhs[3]; ?> </li>
    </ul>
    <?php endforeach; ?>

</body>
</html>