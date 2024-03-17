<?php
    require_once("services/db.php");
    session_start();

    $login_notification = "";

    if(isset($_SESSION['is_login'])) {
        header("Location: index.php");
    }

    if(isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $select_admin_query = "SELECT * FROM admin WHERE username='$username' AND
        password ='$password'";

        $select_admin = $db->query($select_admin_query);

        if($select_admin->num_rows > 0) {
            $admin = $select_admin->fetch_assoc();
            //
            $_SESSION['is_login'] = true; 
            $_SESSION['username'] = $admin['username'];
            header("location: index.php");

        }else {
            $login_notification = "Login admin gagal";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <i><?= $login_notification ?></i>
    <!--  -->
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
        <div>
        <label>Username</label>
        <input name="username">
        </div>
        <!--  -->
        <div>
        <label>Password</label>
        <input type="password" name="password">
        </div>
        <!--  -->
        <button type="submit" name="login">Login</button>
    </form>
</body>
</html>

