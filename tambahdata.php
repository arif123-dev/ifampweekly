<?php

require "fungsi.php";

if (isset($_POST["submit"])) {

    $nama    = $_POST["nama"];
    $nim     = $_POST["nim"];
    $jurusan = $_POST["jurusan"];
    $email   = $_POST["email"];
    $no_hp   = $_POST["no_hp"];
    $foto    = $_POST["foto"];

    $query = "INSERT INTO mahasiswa
              (nama, nim, jurusan, email, no_hp, foto)
              VALUES
              ('$nama', '$nim', '$jurusan', '$email', '$no_hp', '$foto')";

    mysqli_query($koneksi, $query);

    echo "
    <script>
        alert('Data berhasil ditambahkan!');
        document.location.href='mahasiswa.php';
    </script>
    ";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>

    <h2>Tambah Data Mahasiswa</h2>

    <form action="" method="post">

        <table cellpadding="8">

            <tr>
                <td>Nama</td>
                <td>
                    <input type="text" name="nama" required>
                </td>
            </tr>

            <tr>
                <td>NIM</td>
                <td>
                    <input type="text" name="nim" required>
                </td>
            </tr>

            <tr>
                <td>Jurusan</td>
                <td>
                    <input type="text" name="jurusan" required>
                </td>
            </tr>

            <tr>
                <td>Email</td>
                <td>
                    <input type="email" name="email" required>
                </td>
            </tr>

            <tr>
                <td>No HP</td>
                <td>
                    <input type="text" name="no_hp" required>
                </td>
            </tr>

            <tr>
                <td>Foto</td>
                <td>
                    <input type="text" name="foto" placeholder="nama_file.jpg">
                </td>
            </tr>

            <tr>
                <td></td>
                <td>
                    <button type="submit" name="submit">
                        Simpan Data
                    </button>
                </td>
            </tr>

        </table>

    </form>

</body>
</html>
