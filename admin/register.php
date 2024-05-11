<?php


require '../function.php';

if (isset($_POST["register"])) {

    if (register($_POST) > 0) {
        echo "<script>
                alert('user baru berhasil ditambahkan');
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
                <form action="" method="post">
                    <h2>Login</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="text" name="username" id="username" class="form-control"  required>
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
                    <button type="submit" name="register">Log in</button>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>

