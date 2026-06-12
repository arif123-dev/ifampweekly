<?php
require "fungsi.php";

$qmahasiswa = "SELECT * FROM mahasiswa";
$mahasiswas = tampildata($qmahasiswa);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa Informatika 2026</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            margin: 20px;
            background: #f5f5f5;
        }

        h1{
            text-align: center;
            color: #333;
        }

        .menu{
            margin-bottom: 20px;
        }

        .menu a{
            text-decoration: none;
            padding: 10px 15px;
            background: #007bff;
            color: white;
            border-radius: 5px;
            margin-right: 5px;
        }

        .menu a:hover{
            background: #0056b3;
        }

        .btn-tambah{
            margin-bottom: 15px;
        }

        .btn-tambah button{
            background: green;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
        }

        table{
            width: 100%;
            border-collapse: collapse;
            background: white;
        }

        table th,
        table td{
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }

        table th{
            background: #007bff;
            color: white;
        }

        img{
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 5px;
        }

        .btn-edit{
            background: orange;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-hapus{
            background: red;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        .aksi{
            display: flex;
            justify-content: center;
            gap: 5px;
        }
    </style>
</head>
<body>

<h1>Data Mahasiswa Informatika 2026</h1>

<div class="menu">
    <a href="index.php">Home</a>
    <a href="profile.php">Profile</a>
    <a href="contact.php">Contact</a>
    <a href="mahasiswa.php">Data Mahasiswa</a>
</div>

<div class="btn-tambah">
    <a href="tambahdata.php">
        <button>+ Tambah Data</button>
    </a>
</div>

<table>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Jurusan</th>
        <th>Email</th>
        <th>No. HP</th>
        <th>Foto</th>
        <th>Aksi</th>
    </tr>

    <?php $no = 1; ?>

    <?php foreach ($mahasiswas as $mhs) : ?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= $mhs["nama"]; ?></td>
        <td><?= $mhs["nim"]; ?></td>
        <td><?= $mhs["jurusan"]; ?></td>
        <td><?= $mhs["email"]; ?></td>
        <td><?= $mhs["no_hp"]; ?></td>
        <td>
           <img src="aset/image/<?= $mhs['foto']; ?>" alt="Foto">
        </td>
        <td>
            <div class="aksi">
                <a href="editdata.php?id=<?= $mhs['id']; ?>">
                    <button class="btn-edit">Edit</button>
                </a>

                <a href="hapusdata.php?id=<?= $mhs["id"]; ?>"
                   onclick="return confirm('Yakin ingin menghapus data?');">
                    <button class="btn-hapus">Hapus</button>
                </a>
            </div>
        </td>
    </tr>
    <?php endforeach; ?>

</table>

</body>
</html>