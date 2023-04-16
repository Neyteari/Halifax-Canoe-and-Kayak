<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halifax Canoe and Kayak</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <header class="header_bar">
        <img id="nav_toggle_button" class="header_button" src="../images/hamburger.png" alt="Menu">
        <img class="logo" src="../images/paddle-white.png" alt="logo">
        <nav class="header_nav">
            <ul class="header_nav_menu">
                <li>Home</li>
                <li>Book a Trip</li>
                <li>Admin Login</li>
            </ul>
        </nav>
        <div class="title"><h1>Halifax Canoe and Kayak</h1></div>       
    </header>
<?php
if (isset($_SESSION['role']))
{
    echo '<p align="right" style="margin-right: 50px;"><a href="logout.php">log out</a></p>';
}
?>
