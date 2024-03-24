<?php
// cek apakah tombol submit sudah tekan atau belum
if( isset($_POST["submit"])) {
    // Username dan Password
    if( $_POST["username"] == "admin" && $_POST["password"] == "123") {
        // jika benar pindah ke halaman admin
        header("Location: admin.php");
        exit;
    } else {
        // jika salam, tampilkan pesan kesalahan
        $error = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
         * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family : "Poppins", sans-serif;
        }
        .container {
            display : flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            width: 100%;
            background: blue;
        }
        .content {
            display : flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin: auto;
            font-size: 1.7rem;
        
        }
        
        button {
            background-color: green;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="content">
    <h1><i>Login admin<i></h1>

    <?php if( isset($error) ) : ?>
        <p style="color: red; font-style: italic">username/ password salah!</p>
    <?php endif; ?>

    <form action="" method="post">
            <label for="username">Username : </label>
            <input type="text" name="username" id="username">
            <br>
        <label for="password">Password : </label>
        <input type="password" name="password" id="password">
        <br>
            <button type="submit" name="submit">Login</button>

    </form>
    </div>
    </div>
</body>
</html>