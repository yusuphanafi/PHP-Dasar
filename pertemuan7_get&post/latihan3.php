<!DOCTYPE html>
<html lang="en">
<head>
    <title>POST</title>
</head>
<body>

<?php if(isset($_POST["submit"]) ) : ?>
<h1>Halo, Selamat Datang <?= $_POST["nama"] ?></h1>
<?php endif; ?>

<form action="latihan4.php" method="post">
    Masukan nama :
    <input type="text" name="nama">
    <br>
    <button type="submit" name="submit">Kirim</button>
</form>

</body>
</html>