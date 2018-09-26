<html>
    <head>
        <title> DATAKU</title>
        <link rel="stylesheet" href="style.css">
    </head>
</html>
<?php
    session_start();
    $database = $_SESSION['database'];
?>
<table border=1; style="border-spacing: 0; width:100%; text-align: center;" ;>
    <center><h2> Dataku </h2></center>
    <hr>
    <div id="tombol">
        <a href="form.php"><input type="button" value="Tambah Data"></a>
        <a href="login.php?logout=iya"><input type="button" value="LOGOUT"></a>
    </div>
    <tr>
        <th> No. </th>
        <th> Hobby </th>
        <th> Film </th>
        <th> Wisata </th>
        <th> Gambar </th>
    </tr>
        <?php
            for ($i=0; $i < count($database); $i++) {
        ?>
    <tr>
        <td style="padding: 5px;">
            <?php
                echo $i+1,".";
            ?>
        </td>
        <td style="width: 18%; padding: 5px;">
            <?php 
                for ($j=0; $j < count($database[$i]['hobby']) ; $j++) { 
                    echo $database[$i]['hobby'][$j]."<br>";
                }
            ?>
        </td>
        <td style="width: 18%; padding: 5px;">
            <?php 
                for ($j=0; $j < count($database[$i]['film']) ; $j++) { 
                    echo $database[$i]['film'][$j]."<br>";
                }
            ?>
        </td>
        <td style="width: 18%; padding: 5px;">
            <?php 
                for ($j=0; $j < count($database[$i]['wisata']) ; $j++) { 
                    echo $database[$i]['wisata'][$j]."<br>";
                }
            ?>
        </td>
        <td>
            <center>
                <img src="<?php echo $database[$i]['file'];?>" width= 60%;>
            </center>
        </td>
    </tr>
        <?php
            }
        ?>
</table>

