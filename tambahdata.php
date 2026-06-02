<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h2>Tambah Data Mahasiswa</h2>
    <form action="mahasiswa.php" method="post">
        <table cellpadding="5px">
            <tr>
                <td><label for="nama">Nama:</label></td>
                <td><input type="text" id="nama" name="nama"></td>
            </tr>
            <tr>
                <td><label for="foto">Foto:</label></td>
                <td><input type="file" id="foto" name="foto"></td>
            </tr>
            <tr>
                <td><label for="uts">Nilai UTS:</label></td>
                <td><input type="number" id="uts" name="Nilai UTS"></td>
            </tr>
            <tr>
                <td><label for="uas">Nilai UAS:</label></td>
                <td><input type="number" id="uas" name="Nilai UAS"></td>
            </tr>
            <tr>
                <td><label for="tugas">Nilai Tugas:</label></td>
                <td><input type="number" id="tugas" name="Nilai Tugas"></td>
            </tr>
        </table>
        <br>
        <button type="submit">Simpan dan Tambahkan Data</button>
    </form>
    <br>
    <hr>
   <h2>Form Data Lengkap</h2>
<form action="mahasiswa.php" method="post">
    <table cellpadding="5px">
        <tr>
            <td><label for="nama2">Nama</label></td>
            <td><input type="text" id="nama2" name="nama"></td>
        </tr>
        <tr>
            <td><label for="nim">NIM</label></td>
            <td><input type="number" id="nim" name="nim"></td>
        </tr>
        <tr>
            <td><label for="password">Password</label></td>
            <td><input type="password" id="password" name="password"></td>
        </tr>
        <tr>
            <td><label for="email">Email</label></td>
            <td><input type="email" id="email" name="email"></td>
        </tr>
        <tr>
            <td><label for="nohp">No HP</label></td>
            <td><input type="tel" id="nohp" name="nohp"></td>
        </tr>
        <tr>
            <td><label for="website">Website</label></td>
            <td><input type="url" id="website" name="website"></td>
        </tr>
        <tr>
            <td><label for="tgl">Tanggal Lahir</label></td>
            <td><input type="date" id="tgl" name="tgl_lahir"></td>
        </tr>
        <tr>
            <td><label for="warna">Warna Favorit</label></td>
            <td><input type="color" id="warna" name="warna"></td>
        </tr>
        <tr>
            <td><label for="range">Tingkat Kepuasan</label></td>
            <td><input type="range" id="range" name="kepuasan" min="0" max="100"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>
                <input type="radio" id="lk" name="jk" value="L">
                <label for="lk">Laki-laki</label>

                <input type="radio" id="pr" name="jk" value="P">
                <label for="pr">Perempuan</label>
            </td>
        </tr>
        <tr>
            <td>Hobi</td>
            <td>
                <input type="checkbox" id="h1" name="hobi">
                <label for="h1">Membaca</label>

                <input type="checkbox" id="h2" name="hobi">
                <label for="h2">Olahraga</label>

                <input type="checkbox" id="h3" name="hobi">
                <label for="h3">Musik</label>
            </td>
        </tr>
        <tr>
            <td><label for="foto2">Upload Foto</label></td>
            <td><input type="file" id="foto2" name="foto2"></td>
        </tr>
        <tr>
            <td><label for="alamat">Alamat</label></td>
            <td><textarea id="alamat" name="alamat"></textarea></td>
        </tr>
        <tr>
            <td><label for="jurusan">Jurusan</label></td>
            <td>
                <select id="jurusan" name="jurusan">
                    <option>Informatika</option>
                    <option>Sistem Informasi</option>
                    <option>Teknik Komputer</option>
                </select>
            </td>
        </tr>
    </table>
    <br>
    <button type="submit">Submit</button>
</form>
</form>
</body>
</html>