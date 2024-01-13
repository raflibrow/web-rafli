<?php
$tugas = 0;
$uts = 0;
$uas = 0;
$akhir = 0;
$huruf = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tugas = isset($_POST['Ntugas']) ? $_POST['Ntugas'] : 0;
    $uts = isset($_POST['Nuts']) ? $_POST['Nuts'] : 0;
    $uas = isset($_POST['Nuas']) ? $_POST['Nuas'] : 0;

    // Menghitung nilai akhir berdasarkan persentase
    $akhir = ($tugas / 100 * 50) + ($uts / 100 * 20) + ($uas / 100 * 30);

    // Menampilkan nilai akhir dalam bentuk angka dan huruf
    if ($akhir >= 85 && $akhir <= 100) {
        $huruf = 'A';
    } elseif ($akhir >= 80 && $akhir < 85) {
        $huruf = 'AB';
    } elseif ($akhir >= 70 && $akhir < 80) {
        $huruf = 'B';
    } elseif ($akhir >= 65 && $akhir < 70) {
        $huruf = 'BC';
    } elseif ($akhir >= 60 && $akhir < 65) {
        $huruf = 'C';
    } elseif ($akhir >= 50 && $akhir < 60) {
        $huruf = 'D';
    } elseif ($akhir >= 0 && $akhir < 50) {
        $huruf = 'E';
    } else {
        $huruf = 'Error';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Nilai</title>
    <style>
        body {
            justify-content: center;
            text-align: center;
            align-items: center;
        }

        a{
            color: #cccccc;
            transition: whitesmoke 0.3 ease;
        }

        a:hover{
            color: rgb(63, 127, 255);
        }
    </style>
</head>
<body style="font-size: 4; background-image: url(Komet-Tiamat-.jpg); background-repeat: no-repeat; color: whitesmoke; background-size: cover;">
    <p style="text-align: center; font-size: 50px;">
        <a href="Index.php" style="padding:20px; text-decoration: none;">Beranda</a>
        <a href="Profil.php" style="padding:20px; text-decoration: none;">Profil</a>
        <a href="Artikel.php" style="padding: 20px; text-decoration: none;">Artikel</a>
        <a href="buku_tamu.php" style="padding:20px; text-decoration: none;">Buku Tamu</a>
        <a href="Aplikasi.php" style="padding:20px; text-decoration: none;">Aplikasi</a>
        <a href="Nilai.php" style="padding:20px; text-decoration: none;">Nilai</a>
    </p>
    <hr>
    <div><b>Persentase</b></div>
    <br>
    <form method="POST" action="">
        <div>Tugas</div>
        <input type="number" name="tugas" value="50" readonly>
        <div>UTS</div>
        <input type="number" name="UTS" value="20" readonly>
        <div>UAS</div>
        <input type="number" name="UAS" value="30" readonly>
        <br><br>
    </form>
    <br><br>
    <div><b>Nilai</b></div>
    <br>
    <form method="POST" action="">
        <div>Tugas</div>
        <input type="number" name="Ntugas" value="<?php echo $tugas; ?>">
        <div>UTS</div>
        <input type="number" name="Nuts" value="<?php echo $uts; ?>">
        <div>UAS</div>
        <input type="number" name="Nuas" value="<?php echo $uas; ?>">
        <br><br>
        <div>Nilai Akhir (Angka dan Huruf)</div>
        <br>
        
        <input type="text" name="hasil" value="<?php echo $akhir; ?>" readonly>
        <input type="text" name="huruf" value="<?php echo $huruf; ?>" readonly>
        
        <br><br>
        <input type="submit" name="tombolhitung" value="Hitung">
        <input type="submit" name="tombolkirim" value="Kirim">
    </form>

    <table border="1" cellpadding="10" style="align-items: center; margin : auto">
        <tr style="background : gray">
            <td style="width : 300px">Persentase(%)</td>
            <td style="width : 30pxpx"></td>
            <td style="width : 500px"></td>
            
        </tr>
        <tr>
            <td style="width : 500px">Tugas</td>
            <td>:</td>
            <td>50</td>
            
        </tr>
        <tr>
            <td style="width : 500px">UTS</td>
            <td>:</td>
            <td>20</td>
            
        </tr>
        <tr>
            <td style="width : 500px">UAS</td>
            <td>:</td>
            <td>30</td>
            
        </tr>
    
        <tr style="background : gray">
            <td style="width : 300px;">Nilai</td>
            <td style="width : 30px"></td>
            <td style="width : 500px"></td>
            
        </tr>
        <tr>
            <td style="width : 300px">Tugas</td>
            <td>:</td>
            <td><?php echo $tugas ?></td>
            
        </tr>
        <tr>
            <td style="width : 300px">UTS</td>
            <td>:</td>
            <td><?php echo $uts ?></td>
            
        </tr>
        <tr>
            <td style="width : 300px">UAS</td>
            <td>:</td>
            <td><?php echo $uas ?></td>
            
        </tr>
        <tr>
            <td style="width : 300px">Akhir</td>
            <td>:</td>
            <td><?php echo $akhir ?><?php echo "($huruf)" ?></td>
            
        </tr>
    </table>
</body>
</html>
