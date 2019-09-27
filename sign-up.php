<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
	<title>Sign Up form</title>
	<link rel="stylesheet" type="text/css" href="css/signup.css">
</head>
<header>
<div class="header">
    <div class="logo">
    <a href="index.html"><img
        src="https://res.cloudinary.com/enema/image/upload/v1569433441/Ariadne_Class_pnlixb.png"
        style="width: 110px;" alt="logo">
    </a>
    </div>
    <div class="topnav" id="myTopnav">
      <a href="javascript:void(0);" class="icon" onclick="myFunction()"><img src="https://res.cloudinary.com/siyfa/image/upload/v1568922461/ovqrbsa6t7nhghflejve.png" style="width: 30px;">
        </a>
        <a href="sign-up.html">Login</a>
        <a href="#">Contact Us</a>
        <a href="#">FAQ</a>
        <a href="#">Courses</a>
        <a href="about-us.html">How it works</a>
        <a href="class.html">Create Class</a>
        <a href="#">Home</a>
  </div>
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
</header>
<body>
  <div>
    <h2>Welcome to Ariadne Class, <br>enrol today and enjoy the definiation<br> of online education.</h2>
  </div>

<form action="action_page.php" method="post">
  <div class="imgcontainer">
    <img src="https://res.cloudinary.com/enema/image/upload/v1569433441/Ariadne_Class_pnlixb.png" alt="Avatar" class="avatar" height="100" width="50">
  </div>

  <div class="container">
    <label for="FullName"><b>Full name</b></label>
    <input type="text" placeholder="Enter full name" name="FullName" required>

    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    <label for="psw"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat password">
    <div class="coursegroup">
    <select name="subjects" class="subjects" required>
            <option value="">--Please choose a class--</option>
            <option value="Web Development">Web Development</option>
            <option value="Data Science">Data Science</option>
            <option value="AI">Artificial Intelligence</option>
            <option value="Machine Learning">Machine Learning</option>
            <option value="Oracle DataBase">Oracle DataBase</option>
            <option value="Cisco Networking">Cisco Networking</option>
            <option value="RedHat Linux">RedHat Linux</option>
            <option value="Digital Marketing">Digital Marketing</option>
            <option value="Microsoft">Microsoft System Administration</option>
          </select>

    <button type="submit">Sign Up</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div></div></form>
<section>
  <footer>
    <img src="https://res.cloudinary.com/enema/image/upload/v1569508194/screencapture-file-C-Users-pc-Desktop-TEAM-ARIADNE-HOMEPAGE-homepage-html-2019-09-25-21_51_33_vqmtxf.png" width="100%">
  </footer>
</section>
</body>
</html>
