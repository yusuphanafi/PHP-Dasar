<?php 
require 'functions.php';

// ambil data di url
$id = $_GET["id"];
// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

// cek apakah tombol submit sudah ditekan atau belum
if ( isset($_POST["submit"]) ) {

    // cek apakah data berhasil diubah atau tidak
    if ( ubah($_POST) > 0 ) {
        echo "
            <script>
                alert('data berhasil diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    }

}


?>

<!DOCTYPE html>
<html>
<head>
    <title>Ubah data mahasiswa</title>
</head>
<body>
    <h1>Ubah data mahasiswa</h1>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
        <ul>
            <li>
                <label>
                    Nama : 
                    <input type="text" name="nama"
                    value="<?= $mhs["nama"]; ?>">
                </label>
            </li>
            <li>
                <label for="npm">NPM : </label>
                <input type="text" name="npm" id="npm" required
                value="<?= $mhs["npm"]; ?>">
                
            </li>
            <li>
                <label>
                    Email : 
                    <input type="text" name="email" 
                    value="<?= $mhs["email"]; ?>" >
                </label>
            </li>   
            <li>
                <label>
                    Jurusan :
                    <input type="text" name="jurusan" 
                    value="<?= $mhs["jurusan"]; ?>" >
                </label>
            </li>
            <li>
                <label>
                    Gambar : 
                    <input type="text" name="gambar"
                    value="<?= $mhs["gambar"]; ?>" >
                </label>
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data!</button>
            </li>
        </ul>
    
    </form>

</body>
</html>