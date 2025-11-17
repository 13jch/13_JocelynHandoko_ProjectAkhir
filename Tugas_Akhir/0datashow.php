<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" href="0datashow.css?v=<?= time()?>">
</head>
<body style="background-image: url(ztrybg4.png);background-repeat:no-repeat;background-size:cover; margin-top:130px;">
    <fieldset>
        <legend><h2>Your Previous Data :</h2></legend>
        <table style="background-color: rgba(255, 255, 255, 0.8);" align="center" border="1">
            <tr>
                <th>City</th>
                <th>Country</th>
                <th>Continent</th>
                <th>Season</th>
                <th>Transport</th>
                <th>Description</th>
                
            </tr>
            <?php
            include 'koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi, "select * from datas");
            while($d = mysqli_fetch_array($data)){
                ?>
                <tr>
                    <td><?php echo $d['city']; ?></td>
                    <td><?php echo $d['country']; ?></td>
                    <td><?php echo $d['continent']; ?></td>

                    <td><?php echo $d['season']; ?></td>
                    <td><?php echo $d['transport']; ?></td>
                    <td><?php echo $d['desc1']; ?></td>
                    <td>
                        <a href="4update.php?id=<?php echo $d['id_datas']; ?>">UPDATE</a>
                        <a href="5delete.php?id=<?php echo $d['id_datas']; ?>">DELETE</a>
                    </td>
                </tr>
                <?php

            }
            ?>
        </table>
        <a href="data.php">+ TAMBAH SISWA</a>
    </fieldset>
    <br>
    <button style="border-radius:30px"><a style="color:black;text-decoration:none" href="data.php">Back</a></button>

    <footer style="background-color:white; width:100%; text-align:center; border-top:1px solid black; margin-top:200px;" class="footer">
            <p>Travory.com • Jocelyn Handoko © 2025</p>
    </footer>


</body>
</html>