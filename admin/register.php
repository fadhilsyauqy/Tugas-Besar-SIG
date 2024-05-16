<?php

session_start();

// Check if user is not logged in (already handled by existing code)
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require '../function.php';

// Handle registration logic (unchanged)
if (isset($_POST["register"])) {
    $register_result = register($_POST);

    if ($register_result > 0) {
        echo "<script>
            alert('User baru berhasil ditambahkan!');
            window.location.href = 'logout.php';
        </script>";
    } else {
        echo mysqli_error($db);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>SIG SUMATERA BARAT - LOGIN ADMIN</title>
    <link rel="icon" href="../asset/img/sumbar.png">
</head>

<body>

    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="" method="post" autocomplete="off">
                    <h2>Login</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="text" name="username" id="username" class="form-control" required>
                        <label for="username" class="form-label ">Username</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="password" id="password" class="form-control " required>
                        <label for="password" class="form-label">Password </label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="password2" id="password2" class="form-control " required>
                        <label for="password2" class="form-label">Konfirmasi Password </label>
                    </div>
                    <div style="margin-bottom: 10px;">
                        <button type="submit" name="register" >Register</button>
                    </div>
                    <div>
                        <a href="index.php" >
                            <button type="button" name="kembali" class="mt-3">Kembali</button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>