<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
</head>
<body>
    <form action="" method="post">
    Email : <input type="text" name="email"><br>
    Password : <input type="password" name="Password">
    <input type="submit" name="input">
    </form>
</body>
</html>

<?php
if (isset ($_POST ['input']))  {
    $email = $_POST['email'];
    $pass = $_POST ['Password'];

    if ($email == "admin@gmail.com" && $pass == "12345"){
        echo "Login berhasil";
    }
else { 
    echo "Login Gagal, Buat akun terlebih dahulu";
} 
    }
?>