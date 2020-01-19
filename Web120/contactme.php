<!DOCTYPE html>
<html lang="en">
<head>
<title>Batworks</title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<script src="https://use.fontawesome.com/6a71565c22.js"></script>
<link rel="stylesheet" href="css/index.css" />
<link rel="stylesheet" href="css/nav.css" />
<link rel="stylesheet" href="css/forms.css" />
</head>

<body>
    <main class="wrapper">
    <header>
      <h1><a href="index.php"><i class="logo fa fa-home"></i> Jordan LUI SCC WEB120 Portal</a></h1>
      <nav>
        <ul class="topnav" id="myTopnav">
          <li><a href="index.php" class="selected">Welcome</a></li>
          <li><a href="big/index.php">Big Assignment</a></li>
          <li><a href="aia.php">AIA</a></li>
          <li><a href="flowchart.php">Flowchart/Layout</a></li>
          <li><a href="fp/index.php">Final Project</a></li>
          <li><a href="contactme.php">Contact Me</a></li>
          <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
        </ul>
      </nav>
    </header>

<section>
    <h2 class="pageID">Welcome</h2>
    <img src="images/desktop.jpg" class="desktop" alt="" />
    <img src="images/phone.png" class="phone" alt="" />
</section>

<aside>
    <h3>Welcome!</h3>
    <img src="images/tablet.jpg" class="tablet" alt="" />
    <p>My name is Jordan Lui and this is my website, I like to read, write, and play Videogames</p>
    <p>The type of web development that I prefer is web design, I consider myself to be creative enough to be passionate about web design.</p>
    <p>After finishing Year-Up, a training program for young adults that want to close the opportunity divide in the tech industry, I now attend Seattle Central College, in the field of Informational Technology in Web Design.</p>
</aside>
<main role="main">
	 <header><h3>Contact Us!</h3></header>
	<?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "lujordan@Yahoo.com";  //place your/your client's email address here
        $toName = "Batworks"; //place your client's name here
        $website = "Batworks.com";  //place NAME of your client's website

        echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?>

<footer>
    <p><small>&copy; 2020 <a href="contactme.php" target="_blank">Jordan Lui</a>, All Rights Reserved ~
    <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a>
    <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
</footer>
<script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
</script>
    </body>
    </html>
    