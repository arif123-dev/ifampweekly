<?php
require "fungsi.php";

    

    //if($koneksi)
    //{
    //echo "Koneksi Berhasil!";
    //}

  $qmahasiswa = "SELECT * from mahasiswa";
  $mahasiswas = tampildata($qmahasiswa);


//  $result = mysqli_query($koneksi, $query);

   
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
            <th>UTS</th>
            <th>UAS</th>
            <th>Tugas</th>
            <th>Aksi</th>
        </tr>

        <?php
            foreach ($mahasiswas as $mhs);
                {
        ?>
        <tr>
            <td>1</td>
            <td><?= $mhs ["nama"]?></td>
            <td><?= $mhs ["nim"]?> </td>
            <td><?= $mhs ["jurusan"]?></td>
            <td><?= $mhs ["email"]?></td>
            <td><?= $mhs ["no_hp"]?></td>
            <td>
                <img src="aset/image/Photo.webp" alt="">
            </td>
            <td>80</td>
            <td>90</td>
            <td>85</td>
            <td>
                <div class="aksi">
                    <a href="editdata.php">
                        <button class="btn-edit">Edit</button>
                    </a>

                    <a href="deletedata.php">
                        <button class="btn-hapus">Hapus</button>
                    </a>
                </div>
            </td>
        </tr>

        <?php
                }
        ?>
        <tr>
            <td>2</td>
            <td>Windah Batubara</td>
            <td>123456789</td>
            <td>Informatika</td>
            <td>windah@gmail.com</td>
            <td>08123456789</td>
            <td>
                <img src="aset/image/windah.jpg" alt="">
            </td>
            <td>100</td>
            <td>100</td>
            <td>5</td>
            <td>
                <div class="aksi">
                    <button class="btn-edit">Edit</button>
                    <button class="btn-hapus">Hapus</button>
                </div>
            </td>
        </tr>

        <tr>
            <td>3</td>
            <td>Jackson Pace</td>
            <td>987654321</td>
            <td>Informatika</td>
            <td>jackson@gmail.com</td>
            <td>08234567890</td>
            <td>
                <img src="aset/image/maha1.jpg" alt="">
            </td>
            <td>100</td>
            <td>100</td>
            <td>100</td>
            <td>
                <div class="aksi">
                    <button class="btn-edit">Edit</button>
                    <button class="btn-hapus">Hapus</button>
                </div>
            </td>
        </tr>

    </table>

</body>
</html>