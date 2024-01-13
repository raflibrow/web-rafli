<!DOCTYPE html>
<html>
<head>
    <title>Buku Tamu</title>
    <style>
        a{
            color: #cccccc;
            transition: whitesmoke 0.3 ease;
        }
        a:hover{
            color: rgb(63, 127, 255);
        }
        input, textarea, select{
            background: transparent;
        }
    </style>
</head>
<body style="background-image: url(Komet-Tiamat-.jpg); background-repeat: no-repeat; color: whitesmoke; background-size: cover; text-align: center;">
    <p style="text-align: center; font-size: 50px;">
        <a href="Index.php" style="padding:20px; text-decoration: none;">Beranda</a>
        <a href="Profil.php" style="padding:20px; text-decoration: none;">Profil</a>
        <a href="Artikel.php" style="padding: 20px; text-decoration: none;">Artikel</a>
        <a href="buku_tamu.php" style="padding:20px; text-decoration: none;">Buku Tamu</a>
        <a href="Aplikasi.php" style="padding:20px; text-decoration: none;">Aplikasi</a>
        <a href="Nilai.php" style="padding:20px; text-decoration: none;">Nilai</a>
    </p>
    <hr>
    <br><br>
    <h1>Form Buku Tamu</h1>
    <form>

        <p>Nama Lengkap</p>
        <input type="text" name="nama_lengkap" size="55" placeholder="Masukan Nama" style="color: whitesmoke;">
        <br>
        <p>Jenis Kelamin :</p>
        <br>
        laki-laki <input type="radio" name="jenis_kelamin" value="L">
        Perempuan <input type="radio" name="Jenis_kelamin" value="P">
        <br><br>
    
        Alamat<br>
        <input type="text" name="alamat" size="75" placeholder="Alamat" style="color: whitesmoke;">
        <br><br>
        Email<br>
        <input type="email" name="email" size="75" placeholder="Email" style="color: whitesmoke;">
        <br><br>
        Aktif Pada Sosial Media<br>
        <input type="checkbox" name="instagram" value="ya">instagram
        <input type="checkbox" name="facebook" value="ya">facebook
        <input type="checkbox" name="tiktok" value="ya">Tik Tok
        <br><br>
    
        Mengetahui Web Ini dari<br>
        <select name="info" style="color: whitesmoke; text-align: center;">
            <option selected="select">-= Pilih=-</option>
            <option value="web udinus" style="color: black;">Web Udinus</option>
            <option value="surat kabar" style="color: black;">Surat Kabar</option>
            <option value="teman kerabat" style="color: black;">Teman Kerabat</option>
            <option value="browsing internet" style="color: black;">Browsing Internet</option>
        </select>
        <br><br>
        Pesan<br>
        <textarea name="pesan" rows="4" cols="30" style="color: whitesmoke;"></textarea>
        <br><br>
        <input type="submit" name="Kirim" value="Kirim" style="background-color: whitesmoke;">
        <input type="submit" name="Batal" value="Batal" style="background-color: whitesmoke;">
    </form>
    <hr>
    <table border="1" cellpadding="10" style="text-align: center; align-items: center; margin : auto;">
        <tr>
            <th>Firstname</td>
            <th>Lastname</td>
            <th>Age</td>
            <th>Job</td>
        </tr>
        <tr>
            <td>jolly</td>
            <td>cicks</td>
            <td>30</td>
            <td>Software Engginer</td>
        </tr>
        <tr>
            <td>Chris</td>
            <td>Hemsword</td>
            <td>34</td>
            <td>Actor</td>
        </tr>
    </table>
    <hr>
    



    
</body>
</html>