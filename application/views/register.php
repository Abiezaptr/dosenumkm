<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Account - Dosen UMKM</title>
    <link rel="shortcut icon" href="<?= base_url('assets') ?>/img/favicon.png">

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            height: 100vh;
            align-items: center;
            justify-content: center;
            background: #f5f5f5;
        }

        .container {
            display: flex;
            width: 80%;
            max-width: 1000px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
            position: relative;
            /* Ensure the container maintains its position */
            z-index: 1;
            /* Higher z-index to keep it above any other positioned elements */
        }

        .login-section {
            flex: 1;
            background: #fff;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            /* Center text horizontally */
        }

        .login-section h1 {
            margin: 0 0 20px;
            font-size: 24px;
            font-weight: bold;
        }

        .login-section p {
            margin: 0 0 20px;
            color: #888;
        }

        .login-section input {
            width: 80%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 25px;
            outline: none;
        }

        .login-section button {
            width: 85%;
            padding: 10px;
            background: #6c63ff;
            border: none;
            border-radius: 25px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            margin-bottom: 10px;
            margin-top: 20px;
        }

        .login-section .or {
            display: flex;
            align-items: center;
            text-align: center;
            color: #888;
            margin: 20px 0;
            width: 85%;
            margin: 0 auto;
            /* Center horizontally */
        }

        .login-section .or::before,
        .login-section .or::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid #ccc;
        }

        .login-section .or:not(:empty)::before {
            margin-right: .25em;
        }

        .login-section .or:not(:empty)::after {
            margin-left: .25em;
        }

        .login-section .google-login {
            width: 85%;
            margin: 10px 0;
            padding: 10px;
            background: #ffffff;
            border: 1px solid #ccc;
            border-radius: 25px;
            font-size: 16px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #888;
            margin: 0 auto;
            /* Center horizontally */
        }

        .login-section .google-login img {
            margin-right: 10px;
        }

        .login-section .social-login {
            margin: 20px 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .image-section {
            flex: 1;
            background: #6c63ff;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .image-section img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 0 10px 10px 0;
        }

        .login-logo {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }

        .login-logo img {
            width: 130px;
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>

<body>
    <div class="container">
        <div class="login-section">
            <form action="<?= base_url('login') ?>" method="POST">
                <div class="login-logo">
                    <img src="<?= base_url('assets') ?>/img/logo.png"
alt="logo-img">
                </div>
                <h1>Daftar Akun</h1>
                <p>Please register account to continue</p>
                <input type="text" placeholder="Nama Lengkap">
                <input type="text" placeholder="Email">
                <input type="password" placeholder="Kata Sandi">
                <input type="password" placeholder="Ulangi Kata Sandi">
                <button>Register</button>
                <div class="social-login">
                    <p>Already have account? <a href="<?=
site_url('login') ?>">Sign In</a></p>
                </div>
            </form>
        </div>
        <div class="image-section">
            <img src="assets/img/login.png" alt="Login Image">
        </div>
    </div>
</body>

</html>
