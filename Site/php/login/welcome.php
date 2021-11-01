<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
    <link rel="stylesheet" href="../../css/styleloginregister.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>
<header>
        <div class="grid">
            <div class="header-left">
                <a class="header" href="../wie-zijn-wij.php">Wie zijn wij?</a>
                <a class="header" href="../onzevisie.php">Onze visie.</a>
                <a class="header" href="../agenda.php">Agenda.</a>
            </div>
            <div class="logo">
                <a class="header" href="../index.php"><img src="../../../logo/logo_small_icon_only.png"></a>
            </div>
            <div class="header-right">
                <a class="header" href="login.php">Log In/Register.</a>
                <a class="header" href="../contact.php">Contact.</a>
            </div>
        </div>
    </header>
<body>
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Wachtwoord veranderen.</a>
        <a href="logout.php" class="btn btn-danger ml-3">Uitloggen.</a>
    </p>
</body>
</html>