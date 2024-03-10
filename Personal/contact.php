<?php
// Start the session
session_start();

// Check if the user is not logged in, redirect to login page
if (!isset($_SESSION['user_id'])) {
    header('Location: /WEBPROG/Login Form/login.php');
    exit();
}

// Include database connection file if needed
// require 'database.php';

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="style.css" />
	<title>Angelo Ramos</title>
	<link rel="shortcut icon" type="x-icon" href="mc.jpg">
  </head>
  <body>
    <div class="about-me">
      <div class="frame">
        <div class="navigation">
          <p class="angelo-r"><span class="text-wrapper">Angelo </span> <span class="span">R.</span></p>
          <div class="navbar">
            <div class="div"><a href="/WEBPROG/Personal/index.php" class="div">HOME</a></div>
            <div class="div"><a href="/WEBPROG/Personal/portfolio.php" class="div">PORTFOLIO</a></div>
            <div class="home"><a href="/WEBPROG/Personal/contact.php" class="div">CONTACT</a></div>
            <div class="div">
            <a href="/WEBPROG/Login Form/logout.php" class="div">Logout</a>
            </div>
          </div>
        </div>
      </div>
      <div class="contact">
        <div class="frame-15"> 
          <div class="work-with-me-wrapper">
            <p class="div-3"><span class="text-wrapper-5">Work With </span> <span class="span">Me</span></p>
          </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <div class="frame-23">
          <div class="frame-22">
            <p class="phone">
              <span class="text-wrapper-16">Phone _ </span> <span class="text-wrapper-5">+63 999 999 9999</span>
            </p>
            <p class="e-mail">
              <span class="text-wrapper-16">E mail _ </span>
              <span class="text-wrapper-5">roldanangelo2003@gmail.com</span>
            </p>
          </div>
          <div class="frame-24">
            <div class="frame-25">
              <div class="text-wrapper-17">Facebook</div>
              <img class="frame-26" src="fblogo.png" />
            </div>
          </div>
          <div class="text-wrapper-18">LinkedIn</div>
          <img class="frame-26" src="ldnlogo.png" />
        </div>
      </div>
      <div class="frame-27">
        <div class="frame-15">
          <p class="angelo-r-2"><span class="text-wrapper">Angelo </span> <span class="span">R.</span></p>
          <p class="text-wrapper-19">Saving your time and growing your money since 2019.</p>
        </div>
      </div>
    </div>
  </body>
  </html>