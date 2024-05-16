<?php 

session_start();

if (isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require '../function.php';

if (isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($db, "SELECT * FROM user WHERE username = '$username'");

    //cek username
    if (mysqli_num_rows($result) === 1) {

        //cek password
        $row = mysqli_fetch_assoc($result);

        if (password_verify($password, $row["password"])) {
            //set session
            $_SESSION["login"] = true;


            header("Location: index.php");
            exit;
        }
    }

    $error = true;
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
                        <input type="text" name="username" id="username" class="form-control"  required>
                        <label for="username" class="form-label ">Username</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="password" id="password" class="form-control " required>
                        <label for="password" class="form-label">Password </label>
                    </div>
                    <button type="submit" name="login">Log in</button>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>

