<!DOCTYPE html>
<html>
<head>
    <title> SELAMAT DATANG </title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="input">
        <form method="POST" enctype="multipart/form-data" class="form">
            <div id="pertama">
                <div id="judul"> Hobby </div><hr>
                <input type="checkbox" name="hobby[]" value="Membaca"> Membaca <br>
                <input type="checkbox" name="hobby[]" value="Mewarnai"> Mewarnai <br>
                <input type="checkbox" name="hobby[]" value="Melukis"> Melukis <br>
                <input type="checkbox" name="hobby[]" value="Bermain Game"> Bermain Game <br><br>
            </div>
            <div id="seterusnya">
                <div id="judul"> Genre Favorit </div><hr>
                <input type="checkbox" name="film[]" value="Horror"> Horror <br>
                <input type="checkbox" name="film[]" value="Action"> Action <br>
                <input type="checkbox" name="film[]" value="Anime"> Anime <br>
                <input type="checkbox" name="film[]" value="Thriller"> Thriller <br>
                <input type="checkbox" name="film[]" value="Animasi"> Animasi <br><br>
            </div>
            <div id="seterusnya">
                <div id="judul"> Tujuan Wisata </div><hr>
                <input type="checkbox" name="wisata[]" value="Bali"> Bali <br>
                <input type="checkbox" name="wisata[]" value="Raja Ampat"> Raja Ampat <br>
                <input type="checkbox" name="wisata[]" value="Pulau Derawan"> Pulau Derawan <br>
                <input type="checkbox" name="wisata[]" value="Bangka Belitung"> Bangka Belitung <br>
                <input type="checkbox" name="wisata[]" value="Labuan Bajo"> Labuan Bajo <br><br>
            </div>
            <div id="seterusnya">
                <div id="judul"> Gambar </div><hr>
                <input type="file" name="file" id="file"> <br><br>
                <input type="submit" name="submit" id="submit" value="KIRIM">
            </div>
        </form>
    </div>
    <a href="login.php?logout=iya"><input type="button" id="tombols" value="LOGOUT"></a>
</body>
</html>

<?php
    session_start();

    if(isset($_POST['hobby'])) {

        $foto = $_FILES['file']['name'];
        $tmp_foto = $_FILES['file']['tmp_name'];
        $dir = "foto/";
        $target = $dir.$foto;

        if (!move_uploaded_file($tmp_foto, $target)) {
            die ("Upload Gagal!");
        }

        $cek = count($_SESSION['database']);
        $_SESSION['database'][$cek] = array("hobby" => $_POST['hobby'], "film" => $_POST['film'], "wisata" => $_POST['wisata'], "file" => $target);

        header("Location: output.php");
    }
?>