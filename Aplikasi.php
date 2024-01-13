<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kalkulator Sederhana</title>
    <style>
    .container {
        justify-content: center;
        text-align: center;
        align-items: center;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-40%, -10%);
        scale: 1.4;
    }

    #hasil {
        font-size: 2em;
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
    <div class="container">

        <div class="number">
            <p>Number A</p>
            <input id="numberA">
            <br>
            <p>Number B</p>
            <input id="numberB">
        </div>
        <br>
        <div class="simbol">
            <button style="width: 50px; height: 30px;" onclick="tambah()">+</button>
            <button style="width: 50px; height: 30px;" onclick="kurang()">-</button>
            <button style="width: 50px; height: 30px;" onclick="kali()">x</button>
            <button style="width: 50px; height: 30px;" onclick="bagi()">/</button>
        </div>
    
    
    
        <p id="hasil">00</p>
    

    </div>    

    <script src="Aplikasi.js"></script>
</body>
</html>