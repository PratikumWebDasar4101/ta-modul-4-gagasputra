<html>
    <head>
        <title> SELAMAT DATANG </title>
        <link rel="stylesheet" href="style.css">
    </head>
<body>
    <div class="input">
        <form method="POST" enctype="multipart/form-data">
        <div id="pertama">
            <div id="judul"> Daftar Belanjaan </div><hr>
            <input type="checkbox" name="beli[]" value="Samsung Galaxy S9"> Samsung Galaxy S9 <br>
            <input type="checkbox" name="beli[]" value="Samsung Galaxy Note 9"> Samsung Galaxy Note 9 <br>
            <input type="checkbox" name="beli[]" value="Iphone X "> Iphone X <br>
            <input type="checkbox" name="beli[]" value="Iphone Xs "> Iphone Xs <br><br>
        </div>
        <div id="seterusnya">
            <div id="judul"> Kurir </div><hr>
            <input type="radio" name="kurir" value="JNE Regular"> JNE Regular <br>
            <input type="radio" name="kurir" value="JNE YES"> JNE YES <br>
            <input type="radio" name="kurir" value="JNE OKE"> JNE OKE <br>
            <input type="radio" name="kurir" value="Pos Indonesia"> Pos Indonesia <br>
            <input type="radio" name="kurir" value="J$T"> J&T <br><br>
        </div>
        <div id="seterusnya">
            <div id="judul"> Alamat </div><hr>
            <input type="text" name="alamat"> <br><br>
            <input type="submit" name="submit" id="submit" value="KIRIM">
        </div>
        </form>
    </div>
    <a href="login.php?logout=iya"><input type="button" id="tombols" value="LOGOUT"></a>
</body>
</html>

<?php
    session_start();

    if(isset($_POST['beli'])) {

        $cek = count($_SESSION['database']);
        $_SESSION['database'][$cek] = array("beli" => $_POST['beli'], "kurir" => $_POST['kurir'], "alamat" => $_POST['alamat']);

        header("Location: output.php");
    }
?>