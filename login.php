<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '','webproj');
  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $password = md5($Password);
    $ReEnter = md5($ReEnter);
    //encrypt the password before saving in the database
  	$query = "INSERT INTO abc VALUES('','$name', '$Mobile', '$username','$password','$ReEnter')";
    mysqli_query($db, $query);
    echo "logged in";
  	
  }
?><html>
    <head>
            <title> Login </title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="c.css">
         <link rel="stylesheet" type="text/css" href="p.css">
         <link rel="stylesheet" type="text/css" href="l.css">

        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
        <script  src="script.js"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <title>Sign in</title>
    </head>
  <body>  
           <header>
            <nav>
                <div class="logo"> <h1 class="animated infinite heartBeat">Mera Bharat</h1></div>
                <div class="menu">
                    <a href="home.html">Home</a>
                    <a href="gallery.html" >Gallery</a>
                    <a href="places.html" >Places</a>
                    <a href="about.html">About</a>
                    <a href="contact.html">Contact</a>
                </div>
                </nav>
                </header>
                <div class="main">
                        <p class="sign" align="center">Sign in</p>
                        <form class="form1">
                          <input class="un " type="text" align="center" placeholder="Username">
                          <input class="pass" type="password" align="center" placeholder="Password">
                          <a href=""class="submit" align ="center">Sign In</a>
                          <p class="forgot" align="center"><a href="">Forgot Password?</p>
                                
                                    
                        </div>
                </body>
                </html>