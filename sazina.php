<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body style="background-color: white">

<a href="https://twitter.com/sidemen?lang=en" class="fa fa-twitter" ></a>
<a href="https://www.youtube.com/channel/UCDogdKl7t7NHzQ95aEwkdMw" class="fa fa-youtube"></a>
<a href="https://www.instagram.com/sidemen/?hl=en" class="fa fa-instagram"></a>
<a href="https://www.reddit.com/r/Sidemen/" class="fa fa-reddit"></a>
<div class="titulbilde">
    <img src="img/download.png" style="position: relative; margin: 0px auto;">
</div>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="" alt=""></a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a class="lang" key="index"  href="index">Home</a></li>
            <li><a class="lang" key="video" href="video">Top videos</a></li>
            <li><a class="lang" key="merch" href="merch">Shop</a></li>
        </ul>

        </ul>
    </div>
</nav>
<div class="contaier-fluid" id="">
    <div class="row">
        <div class="col-md-2">
            <p></p>
        </div>
        <div class="col-md-6">
            <form action="sazina" method="post">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="name">Surname:</label>
                    <input type="text" class="form-control" id="surname" name="surname">
                </div>
                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter you email" name="email">
                </div>
                <div class="form-group">
                    <label for="mobile">Phone:</label>
                    <input type="number" class="form-control" id="mobile" name="mobile">
                </div>
                <div class="form-group">
                    <label for="question">Questions</label>
                    <textarea class="form-control" id="question" rows="3" name="question"></textarea>
                </div>
                <button class="btn btn-dark" type="submit" name="save">Submit</button>

            </form>
        </div>
        <div class="col-md-2">
            <p></p>
        </div>
    </div>
</div>

<?php

    if(isset($_POST{'save'})){

        echo "<b>Your Name</b> {$_POST['name']}";
        echo "<b>Your Surname</b> {$_POST['surname']}<br/>";
        echo "<b>Your Email</b> {$_POST['email']}<br/>";
        echo "<b>Your Phone</b> {$_POST['mobile']}<br/>";
        echo "<b>Your question</b> {$_POST['question']}";
    }
?>





</div>
</body>
</html>