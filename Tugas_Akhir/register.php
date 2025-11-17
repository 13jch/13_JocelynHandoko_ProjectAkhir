<?php
// Area PHP (BackEnd)b
include 'koneksi.php';
// Cek apakah form telah disubmit
if(isset($_POST['register'])){
    // Ambil data dari form
    
    
    $full_name = $_POST['full_name']; // Menangkap nama lengkap dari form
    $email = $_POST['email'];
    $age = $_POST['age'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Enkripsi password

// Simpan data ke database
    $query = "INSERT INTO users(full_name, email, age, username, password) VALUES ('$full_name', '$email', '$age', '$username', '$password')";
    // Eksekusi query
    $result = mysqli_query($koneksi, $query);

    // Cek apakah query berhasil
    if($result) {
        // Redirect ke halaman login setelah registrasi sukses
        echo "<script>alert('Congrats, you are fully register! Please login to continue!');
        window.location='login.php';</script>";
    } else {
        // Tampilkan pesan error jika registrasi gagal
        echo "Fail to register!";
    }
}
?>

<!DOCTYPE html>
<!-- Area Interface (FrontEnd) -->
<html lang="en">
<head>
    <title>Register</title>
<link rel = "stylesheet" href="register.css?v=<?= time()?>">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
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
            
            </div>
        </div>
    </nav>
    
        <div class="container">
                <h2>Register</h2>  
                    <form align=center method="POST" action="">
                        <table>
                            <tr>
                                <td>    
                                    <label for="Full Name">Full Name</label>
                                </td>                      
                                <td>:</td>
                                <td>
                                    <input type="text" name="full_name" placeholder="Enter your full name here" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="Email">Email</label>
                                </td>
                                <td>:</td>
                                <td>
                                    <input type="text" name="email" placeholder="Enter your email here" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="Age">Age</label>
                                </td>
                                <td>:</td>
                                <td>
                                    <input type="text" name="age" placeholder="Enter your age here" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="Username">Username</label>
                                </td>
                                <td>:</td>
                                <td>
                                    <input type="text" name="username" placeholder="Enter your Username here" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="Password">Password</label>
                                </td>
                                <td>:</td>
                                <td>
                                    <input type="password" name="password" placeholder="Enter your password here" required>
                                </td>
                            </tr>
                            <tr></tr>
                            <tr>
                                <td colspan="3" style="text-align: center;">
                                    <button style="margin-top:30px; justify-content:left" type="submit" name="register">Register</button>
                                </td>
                            </tr>
                        </table>
                    </form>
                    <p>Sudah memiliki akun? <a href="login.php">Login di sini</a></p>
            </div>
       


        <footer class="footer">
            <p>Travory.com • Jocelyn Handoko © 2025</p>
        </footer>
    

    </body>
</html>