<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ariadne Class</title>
  <link rel="stylesheet" href="css/homepage.css">
</head>

<body>
  <div class="header">
  <?php
  include "header.php";?>
 
 </div>  
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
   <body>
   	<div>
   		<p>
   			<h3>Learn<br>Anywhere<br>Anyday</h3>
   		</p>
   	</div>
   	<div>
   		<p>
   			<h4>Get Started as a ...</h4>
   		</p>
   	<div>
   		<p>
   			<h2><a href="about-us.html">Teacher</a>
        <a href="#">Student</a></h2>
   		</p>
   	</div>
   	<div>
      <?php include 'footer.php';?>
   	</div>
   </body>
   </html>
