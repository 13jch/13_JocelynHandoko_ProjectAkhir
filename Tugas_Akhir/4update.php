<!DOCTYPE html>
<html>
<head>
    <title>CRUD PHP KELAS XI RPL 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel = "stylesheet" href="4update.css">

</head>

<body>
    <div class="container">
        <h2>Update your data here!</h2>
    
</body>
        <?php
        include 'koneksi.php';
        $id_datas = $_GET['id'];
        $data = mysqli_query($koneksi, "SELECT * FROM datas WHERE id_datas=$id_datas");    
        while($d = mysqli_fetch_array($data)){
            ?>
            <form method="post" action="3ubah.php">
            
                <table style="margin-left:35px;">
                    <tr>
                        <td>City</td>
                        <td>:</td>
                        <td>
                            <input type="hidden" name="city" value="<?php echo $d['city']; ?>">
                            <input type="text" name="city" value="<?php echo $d['city']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>country</td>
                        <td>:</td>
                        <td><input type="text" name="country" value="<?php echo $d['country']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Continent</td>
                        <td>:</td>
                        <td><input type="text" name="continent" value="<?php echo $d['continent']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Season</td>
                        <td>:</td>
                        <td><input type="text" name="season" value="<?php echo $d['season']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Transport</td>
                        <td>:</td>
                        <td><input type="text" name="transport" value="<?php echo $d['transport']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Description</td>
                        <td>:</td>
                        <td><input type="text" name="desc1" value="<?php echo $d['desc1']; ?>"></td>
                    </tr>
                    
               
                        <td>
                            <button><a style="color:black;text-decoration:none" href="0datashow.php">Back</a></button>
                        </td>
                        
                        <td>
                            <input type="submit" value="Save">
                        </td>
                        <input type="hidden" name="id_datas" value=" <?php echo $d['id_datas']; ?>">
                    </tr>
                </table>
            </form>
            <?php

        }
        ?>
        </div>

        <footer class="footer">
            <p>Travory.com • Jocelyn Handoko © 2025</p>
        </footer>
    </div>    
</body>
</html>