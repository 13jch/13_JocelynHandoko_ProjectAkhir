<?php
// Area PHP (BackEnd)
session_start();
include 'koneksi.php';
// menangkapo dara dari bagian frontend

if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($koneksi, $query);
    
    // Perbaikan: operator penugasan dari '-' diubah menjadi '='
    $users = mysqli_fetch_assoc($result);

    if($users && password_verify($password, $users['password'])){
        $_SESSION['username'] = $users['username'];
        $_SESSION['nama_lengkap'] = $users['nama_lengkap'];
        header("Location: data.php");

    } else {
        // Perbaikan: memperbaiki syntax penutup script
        echo "<script>alert('Username atau password salah!');</script>";
    }
}
?>


<!DOCTYPE html>
<!-- Area HTML (InterFace FrontEnd) -->
<html lang="en">
<head>
    <title>Login</title>
    <!-- Link ke css -->
<link rel = "stylesheet" href="login.css?v=<?= time()?>">
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
   
    

    <fieldset>
        
        <div class="container">    
            <h2>Login</h2>
            <br>
            <form method="POST">
                <table style="margin-top:10px; margin-left:50px; margin-right:50px;">
                <!-- Area Username -->
                    <tr>
                        <td>
                            <label for="username">Username</label>
                        </td>
                        <td>:</td>
                        <td>
                            <input type="text" name="username" placeholder="Username" required>
                            <br>
                        </td>
                    </tr>    
                <!-- Area Password -->
                    <tr>
                        <td>
                            <label for="password">Password</label>
                        </td>
                        <td>:</td>
                        <td>
                            <input type="password" name="password" placeholder="Password" required>
                            <br>
                        </td>
                    </tr>
                <!-- Area Button -->
                    <tr>
                        <td>
                            <button style="margin-top:50px" type="Submit" name="login">Login</button>
                        </td>
                    </tr>
                </table>
                <br>
                <p>Belum punya akun? <a href="register.php">Daftar di sini</a><p>
            </form>    
        </div>
    </fieldset>


    <footer class="footer">
            <p>Travory.com • Jocelyn Handoko © 2025</p>
    </footer>
</body>
</html>