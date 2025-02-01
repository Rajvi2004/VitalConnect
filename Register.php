<?php include("connection.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='Register.css'>
    <link rel="icon" href='./bb_logo(black) jpg' type="image/jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<title>Start Saving Lives </title>
<body>
<header>
    <nav>
    <div class="header-logo"><img src="bb_logo(black) .jpg"></div>
    <div class="header-list">
        <ul>
            <li><a href="help.html">Get Help</li></a>
            <li><a href="donate.html">Donate</li></a>
            <!-- <li><a href="index.html#vol-sect">Volunteer</li></a> -->
            <li><a href="index.html#about-us">About Us</a></li>
        </ul>
    </div>
    </nav>
</header>

<div class="inner">
    <div class="photo">
        <img src="https://plus.unsplash.com/premium_photo-1685141420004-1b13a03c54ca?q=80&w=1926&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
    </div>
    <div class="user-form">
        <h1>Want to watch miracle?Go and donate blood</h1>
        <form method="post">
            <i class="fas fa-user icon"></i>
            <input type="text" placeholder="Name" name="fname">
            <br>
            <i class="fas fa-envelope-square"></i>
            <input type="email" placeholder="E-mail" name="email">
            <br>
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" id="password_data" name="password">
            <div class="safety" style="font-family: sans-serif; font-size: 20px;">
            </div>
            <div class="action-btn">
                <!-- <button class="btn primary"><strong>Create Account</strong></button> -->
                <input type="submit" value="Create Account" class="btn" name="createaccount">
                <button class="btn"><strong>Skip</strong></button>
            </div>
        </form>
    </div>
</div>
<script src="./Register.js"></script>
<footer>
        <div class="siteFooterBar">
            <div class="content1">
                <div class="foot">2021 © All rights reserved.</div>
            </div>
        </div>
         <div class="footer-content">
            <h3>JOIN OUR CAUSE</h3>
            <p>Donating blood or platelets can be intimidating and even scary. Discover from Vital Connect and platelet donors how effortless and uncomplicated it is to donate blood and make a difference in saving lives.</p>
            <div class="socials"> 
</footer>                
</body>
</html>

<?php

    if($_POST['createaccount'])
    {
        $fname    = $_POST['fname'];
        $email    = $_POST['email'];
        $password = $_POST['password'];
    }

    $query = "INSERT INTO registration VALUES('$fname','$email','$password')";
    $data = mysqli_query($conn, $query);

    if($data)
    {
        echo "data inserted in data base ";
    }
    else
    {
        echo "data failed ";
    }
?>