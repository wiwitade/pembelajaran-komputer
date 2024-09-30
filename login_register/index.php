<?php
include('config.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['register'])) {
        $username = mysqli_real_escape_string($conn, $_POST['reg_username']);
        $password = mysqli_real_escape_string($conn, $_POST['reg_password']);
        $email = mysqli_real_escape_string($conn, $_POST['reg_email']);
        $fullname = mysqli_real_escape_string($conn, $_POST['reg_fullname']);
        $password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (username, password, email, fullname) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "ssss", $username, $password, $email, $fullname);
        
        if (mysqli_stmt_execute($stmt)) {
            echo "<script>alert('Pendaftaran berhasil. Silakan login.');</script>";
        } else {
            echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
        }
        mysqli_stmt_close($stmt);
    }

    if (isset($_POST['login'])) {
        $username = mysqli_real_escape_string($conn, $_POST['log_username']);
        $password = mysqli_real_escape_string($conn, $_POST['log_password']);

        $sql = "SELECT id, username, password FROM users WHERE username = ? OR email = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "ss", $username, $username);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($result)) {
            if (password_verify($password, $row['password'])) {
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['username'] = $row['username'];
                header("location: ../index.php");
                exit();
            } else {
                echo "<script>alert('Password tidak valid.');</script>";
            }
        } else {
            echo "<script>alert('Tidak ada akun yang ditemukan dengan username atau email tersebut.');</script>";
        }
        mysqli_stmt_close($stmt);
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Daftar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <meta name="google-signin-client_id" content="YOUR_GOOGLE_CLIENT_ID.apps.googleusercontent.com">
    <style>
        :root {
            --primary-color: #4e54c8;
            --secondary-color: #8f94fb;
            --accent-color: #ff6b6b;
            --text-color: #333;
            --bg-color: #f4f4f4;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(-45deg, var(--primary-color), var(--secondary-color));
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            animation: gradientBG 15s ease infinite;
            background-size: 400% 400%;
        }

        @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .container {
            background-color: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
            overflow: hidden;
            width: 90%;
            max-width: 900px;
            min-height: 600px;
            position: relative;
            margin: 20px;
            transition: all 0.3s ease;
        }

        .form-container {
            position: absolute;
            top: 0;
            height: 100%;
            transition: all 0.6s ease-in-out;
        }

        .login-container {
            left: 0;
            width: 50%;
            z-index: 2;
        }

        .register-container {
            left: 0;
            width: 50%;
            opacity: 0;
            z-index: 1;
        }

        .container.right-panel-active .login-container {
            transform: translateX(100%);
        }

        .container.right-panel-active .register-container {
            transform: translateX(100%);
            opacity: 1;
            z-index: 5;
            animation: show 0.6s;
        }

        @keyframes show {
            0%, 49.99% {
                opacity: 0;
                z-index: 1;
            }
            50%, 100% {
                opacity: 1;
                z-index: 5;
            }
        }

        .overlay-container {
            position: absolute;
            top: 0;
            left: 50%;
            width: 50%;
            height: 100%;
            overflow: hidden;
            transition: transform 0.6s ease-in-out;
            z-index: 100;
        }

        .container.right-panel-active .overlay-container {
            transform: translateX(-100%);
        }

        .overlay {
            background: var(--primary-color);
            background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 0 0;
            color: #FFFFFF;
            position: relative;
            left: -100%;
            height: 100%;
            width: 200%;
            transform: translateX(0);
            transition: transform 0.6s ease-in-out;
        }

        .container.right-panel-active .overlay {
            transform: translateX(50%);
        }

        .overlay-panel {
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 40px;
            text-align: center;
            top: 0;
            height: 100%;
            width: 50%;
            transform: translateX(0);
            transition: transform 0.6s ease-in-out;
        }

        .overlay-left {
            transform: translateX(-20%);
        }

        .container.right-panel-active .overlay-left {
            transform: translateX(0);
        }

        .overlay-right {
            right: 0;
            transform: translateX(0);
        }

        .container.right-panel-active .overlay-right {
            transform: translateX(20%);
        }

        h1 {
            font-weight: bold;
            margin: 0 0 20px;
            color: var(--text-color);
        }

        p {
            font-size: 14px;
            font-weight: 300;
            line-height: 20px;
            letter-spacing: 0.5px;
            margin: 20px 0 30px;
        }

        button {
            border-radius: 20px;
            border: 1px solid var(--accent-color);
            background-color: var(--accent-color);
            color: #FFFFFF;
            font-size: 12px;
            font-weight: bold;
            padding: 12px 45px;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: transform 80ms ease-in, background-color 0.3s;
            cursor: pointer;
        }

        button:active {
            transform: scale(0.95);
        }

        button:focus {
            outline: none;
        }

        button.ghost {
            background-color: transparent;
            border-color: #FFFFFF;
        }

        button:hover {
            background-color: var(--secondary-color);
        }

        form {
            background-color: #FFFFFF;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 50px;
            height: 100%;
            text-align: center;
        }

        input {
            background-color: #eee;
            border: none;
            padding: 12px 15px;
            margin: 8px 0;
            width: 100%;
            font-size: 14px;
            border-radius: 8px;
            transition: background-color 0.3s;
        }

        input:focus {
            background-color: #ddd;
            outline: none;
        }

        .social-container {
            margin: 20px 0;
        }

        .social-container a {
            border: 1px solid #DDDDDD;
            border-radius: 50%;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            margin: 0 5px;
            height: 40px;
            width: 40px;
            text-decoration: none;
            color: var(--text-color);
            font-size: 14px;
            transition: all 0.3s;
        }

        .social-container a:hover {
            background-color: var(--accent-color);
            color: #FFFFFF;
        }

        @media (max-width: 768px) {
            .container {
                min-height: auto;
                width: 95%;
            }

            .form-container {
                width: 100%;
                height: auto;
                position: relative;
            }

            .login-container, .register-container {
                position: relative;
                top: 0;
                left: 0;
                width: 100%;
                height: auto;
                transition: all 0.6s ease-in-out;
            }

            .register-container {
                display: none;
            }

            .container.right-panel-active .login-container {
                display: none;
            }

            .container.right-panel-active .register-container {
                display: block;
            }

            .overlay-container {
                display: none;
            }

            form {
                padding: 30px 20px;
            }

            h1 {
                font-size: 24px;
            }

            p {
                font-size: 12px;
                margin: 10px 0 20px;
            }

            input {
                padding: 10px;
                font-size: 14px;
            }

            button {
                padding: 10px 30px;
                font-size: 12px;
            }

            .social-container a {
                height: 35px;
                width: 35px;
                font-size: 14px;
            }

            .mobile-switch {
                display: block;
                margin-top: 20px;
                font-size: 14px;
            }

            .mobile-switch a {
                color: var(--primary-color);
                text-decoration: none;
                font-weight: bold;
            }
        }
    </style>
</head>
<body>
<div class="container" id="container">
    <div class="form-container register-container">
        <form method="post" action="">
            <h1>Buat Akun</h1>
            <input type="text" id="reg_fullname" name="reg_fullname" placeholder="Nama Lengkap" required>
            <input type="text" id="reg_username" name="reg_username" placeholder="Username" required>
            <input type="email" id="reg_email" name="reg_email" placeholder="Email" required>
            <input type="password" id="reg_password" name="reg_password" placeholder="Password" required>
            <button type="submit" name="register">Daftar</button>
            <div class="social-container">
                <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social"><i class="fab fa-google"></i></a>
                <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="mobile-switch">
                Sudah punya akun? <a href="#" id="switchToLogin">Login</a>
            </div>
        </form>
    </div>
    <div class="form-container login-container">
        <form method="post" action="">
            <h1>Login</h1>
            <input type="text" id="log_username" name="log_username" placeholder="Username atau Email" required>
            <input type="password" id="log_password" name="log_password" placeholder="Password" required>
            <button type="submit" name="login">Login</button>
            <div class="social-container">
                <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social"><i class="fab fa-google"></i></a>
                <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="mobile-switch">
                Belum punya akun? <a href="#" id="switchToRegister">Daftar</a>
            </div>
        </form>
    </div>
   
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h1>Selamat Datang Kembali!</h1>
                <p>Untuk tetap terhubung dengan kami, silakan login dengan informasi pribadi Anda</p>
                <button class="ghost" id="login">Login</button>
            </div>
            <div class="overlay-panel overlay-right">
                <h1>Halo, Teman!</h1>
                <p>Masukkan detail pribadi Anda dan mulailah perjalanan bersama kami</p>
                <button class="ghost" id="register">Daftar</button>
            </div>
        </div>
    </div>
</div>

<script>
const registerButton = document.getElementById('register');
const loginButton = document.getElementById('login');
const container = document.getElementById('container');
const switchToRegister = document.getElementById('switchToRegister');
const switchToLogin = document.getElementById('switchToLogin');

function toggleForm() {
    container.classList.toggle("right-panel-active");
}

registerButton.addEventListener('click', toggleForm);
loginButton.addEventListener('click', toggleForm);

switchToRegister.addEventListener('click', (e) => {
    e.preventDefault();
    toggleForm();
});

switchToLogin.addEventListener('click', (e) => {
    e.preventDefault();
    toggleForm();
});

function handleResponsiveView() {
    const width = window.innerWidth;
    if (width <= 768) {
        container.classList.remove("right-panel-active");
    }
}

window.addEventListener('load', handleResponsiveView);
window.addEventListener('resize', handleResponsiveView);
</script>

</body>
</html>
