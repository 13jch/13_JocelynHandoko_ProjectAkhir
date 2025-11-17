<?php
// Area PHP (BackEnd)
include 'koneksi.php';
// Cek apakah form telah disubmit
if(isset($_POST['datas'])){
    // Ambil datas dari form
    
    $city = $_POST['city']; // Menangkap nama lengkap dari form
    $country = $_POST['country'];
    $continent = $_POST['continent'];
    $season = $_POST['season'];
    $transport = $_POST['transport'];
    $desc1 = $_POST['desc1'];
    

// Simpan datas ke datasbase
    $query = "INSERT INTO datas(city, country, continent, season, transport, desc1) VALUES ('$city', '$country', '$continent', '$season', '$transport', '$desc1')";
    // Eksekusi query
    $result = mysqli_query($koneksi, $query);

    // Cek apakah query berhasil
    if($result) {
        // Redirect ke halaman login setelah registrasi sukses
        echo "<script>alert('Congrats, your data is registered!');
        window.location='0datashow.php';</script>";
    } else {
        // Tampilkan pesan error jika registrasi gagal
        echo "fail to register your data!";
    }
}
?>

<!DOCTYPE html>
<!-- Area Interface (FrontEnd) -->
<html lang="en">
<head>
    <title>data</title>
    <link rel = "stylesheet" href="data.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <nav style="margin-top:0px" class="navbar navbar-expand-lg bg-body-tertiary">
        <div style="width:1290px" class="container-fluid">
            <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="landingpage.html">
                <img src="onlylogo.png" alt="Logo" width="34" height="37" class="d-inline-block align-text-top">
                Travory.com
                </a>
            </div>
            </nav>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link" href="landingpage.html">Landing Page</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" aria-current="page" href="aboutus.html">About Us</a>
                </li>
                <li class="nav-item dropdown">
            </ul>
            <form class="d-flex" role="login">
                <button style="border-radius: 10px;" type="submit"><a style="color:black; text-decoration: none" href="login.php">Logout</a></button></button>
            </form>
            
            </div>
        </div>
    </nav>

      
        <fieldset>
            <div class="container">
                <h2 style="margin-top:-10px;margin-bottom:20px">Your Journey 
                    <br> Starts Here!</h2>  
                    <form method="POST" action="">
                        <table style="margin-left:20px;margin-bottom:20px;">
                            <tr>
                                <td>    
                                    <label for="city">City</label>
                                </td>                      
                                <td>:</td>
                                <td>
                                    <input type="text" name="city" placeholder="Ex : Surabaya" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="country">Country</label>
                                </td>
                                <td>:</td>
                                <td>
                                    <input type="text" name="country" placeholder="Ex : Indonesia" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="continent">Continent</label>
                                </td>
                                <td>:</td>
                                <td>
                                    <input type="text" name="continent" placeholder="Ex : South East Asia" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="season">Season</label>
                                </td>
                                <td>:</td>
                                <td>
                                    <input type="text" name="season" placeholder="Ex : Summer" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="transport">Transport</label>
                                </td>
                                <td>:</td>
                                <td>
                                    <input type="transport" name="transport" placeholder="Ex : Car (Road Trip)" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="desc1">Description</label>
                                </td>
                                <td>:</td>
                                <td>
                                    <input type="text" name="desc1" placeholder="Ex : I went there with..." required>
                                </td>
                            </tr>
                            <tr></tr>
                            <tr>
                                <td colspan="3" style="text-align: center;">
                                    <button style="margin-top:20px" type="submit" name="datas">Submit</button>
                                </td>
                            </tr>
                        </table>
                    </form>

                    <p>Want to see your previous data?
                        <br><a href="0datashow.php">Click here!</a></p>
        
            </div>
        </fieldset> 
            
        <footer class="footer">
            <p>Travory.com • Jocelyn Handoko © 2025</p>
        </footer>
    

</body>
</html>