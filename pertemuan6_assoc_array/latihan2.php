<?php 
// $mahasiswa = [
//     ["Yucubbb", "17111100019", "yhan4fi@gmail.com", "Teknik Informtika"],
//     ["Yusup Hanafi", "17111100020", "yhanafi19@gmail.com", "Teknik Informtika"]
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri

$mahasiswa = [
    [
    "nama" => "Yucubbb", 
    "npm" => "17111100019",
    "email" => "yhan4fi@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "yucup.jpg"
    ],
    [
    "nama" => "Yusup Hanafi", 
    "npm" => "17111100020",
    "email" => "yhanafi19@gmail.com",
    "jurusan" => "Teknik Informatika",
    // "tugas" => [90, 80, 100]
    "gambar" => "yucup.jpg"
    ],
];

// echo $mahasiswa [1]["tugas"][0];

?>

<!DOCTYPE html>
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
        <li>
            <img src="img/vita.jpg">
        </li>
        <li> Nama : <?= $mhs["nama"]; ?> </li>
        <li> NPM : <?= $mhs["npm"]; ?> </li>
        <li> Email : <?= $mhs["jurusan"]; ?> </li>
        <li> Jurusan : <?= $mhs["email"]; ?> </li>
    </ul>
    <?php endforeach; ?>

</body>
</html>