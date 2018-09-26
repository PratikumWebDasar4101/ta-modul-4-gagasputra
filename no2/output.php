<html>
    <head>
        <title> BELANJAANKU </title>
        <link rel="stylesheet" href="style.css">
    </head>
</html>
<?php
    session_start();
    $database = $_SESSION['database'];
?>
    <table border=1; style="border-spacing:0; width:100%; text-align: center;">
    <center><h2> Belanjaanku </h2></center>
    <hr>
    <div id="tombol">
        <a href="form.php"><input type="button" value="Tambah Data"></a>
        <a href="login.php?logout=iya"><input type="button" value="LOGOUT"></a>
    </div>
        <tr>
            <th> No. </th>
            <th> Barang Belanjaan </th>
            <th> Kurir </th>
            <th> Tanggal Pembelian </th>
            <th> Alamat </th>
            <th> Total Harga </th>
        </tr>
        <?php
            for ($i=0; $i < count($database); $i++) { 
                $total_belanja = 0;
                $total_harga = 0;
                $tgl_beli = date('d-m-Y');
        ?>
        <tr>
            <td>
                <?php echo $i+1,"."; ?>
            </td>
            <td>
                <?php
                    for ($j=0; $j < count($database[$i]['beli']) ; $j++) { 
                        $beli = $database[$i]['beli'];
                        $total_beli = count($database[$i]['beli']);
                        if ($beli[$j] == "Samsung Galaxy S9") {
                            $harga = 9000000;
                        } elseif ($beli[$j] == "Samsung Galaxy Note 9") {
                            $harga = 13000000;
                        } elseif ($beli[$j] == "Iphone X") {
                            $harga = 14000000;
                        } else {
                            $harga = 15000000;
                        }
                        $total_belanja = $total_belanja + $harga;
                        echo $beli[$j]." : Rp.".number_format($harga)."<br>";
                    }
                ?>
            </td>
            <td>
                <?php
                    $kurir = $database[$i]['kurir'];
                    if ($kurir == "JNE Regular") {
                        $harga_kirim = 10000;
                    } elseif ($kurir == "JNE YES") {
                        $harga_kirim = 15000;
                    } elseif ($kurir == "JNE OKE") {
                        $harga_kirim = 13000;
                    } elseif ($kurir == "Pos Indonesia") {
                        $harga_kirim = 12000;
                    } else {
                        $harga_kirim = 14000;
                    }
                    echo $kurir." : Rp.".number_format($harga_kirim);
                ?>    
            </td>
            <td>
                <?php echo $tgl_beli; ?>
            </td>
            <td>
                <?php echo $database[$i]['alamat']; ?>
            </td>
            <td>
                <?php
                    $total_harga = $total_belanja + $harga_kirim;
                    echo "Rp.".number_format($total_harga);
                ?>
            </td>
        </tr>
        <?php
            }
        ?>
    </table>