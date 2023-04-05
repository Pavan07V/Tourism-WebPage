<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '','webproj');

// REGISTER USER
if (isset($_POST['abc'])) {
  // receive all input values from the form
  $name = $_POST['name'];
  $Mobile = $_POST['Mobile'];
  $username = $_POST['Username'];

  $Password = $_POST['Password'];
  $ReEnter = $_POST['ReEnter'];

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($name)) { array_push($errors, "name is required"); }
  if (empty($Mobile)) { array_push($errors, "Number is required"); }
  if (empty($username)) { array_push($errors, "Username is required"); }

  if (empty($Password)) { array_push($errors, "Password is required"); }
  if (empty($ReEnter)) { array_push($errors, "Password is required"); }

  if ($Password != $ReEnter) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
 
  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) 
  {
    $password = md5($Password);
    $ReEnter = md5($ReEnter);
    //encrypt the password before saving in the database
  	$query = "INSERT INTO abc VALUES('','$name', '$Mobile', '$username','$password','$ReEnter')";
    mysqli_query($db, $query);
    echo "logged in";
  	
  }
}
?><html>
    <head>
            <title> Register</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="c.css">
         <link rel="stylesheet" type="text/css" href="p.css">
         <link rel="stylesheet" type="text/css" href="l.css">

        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <title>Register</title>
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
                        <p class="sign" align="center">Register</p>
                        <form class="form1" action="register.php" method="POST">
                                <input class="un " type="text" align="center" placeholder="name" required>
                                <input class="un " type="phone" align="center" placeholder="Mobile" required>
                                <input class="un " type="text" align="center" placeholder="Username" required>
                          <input class="pass" type="password" align="center" placeholder="Password" required>
                          <input class="pass" type="password" align="center" placeholder=" ReEnter" required>
                          <a href=""class="submit" align ="center">Register</a>
                        </div>
                </body>
                </html>