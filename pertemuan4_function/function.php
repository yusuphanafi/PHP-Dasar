<?php 

function salam($waktu ="Datang", $nama="Yucub"){
    return "Selamat $waktu, $nama!";
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan Function</title>
</head>
<body>
    <h1><?= salam("Malam", "Yucubbb"); ?></h1>
</body>
</html>