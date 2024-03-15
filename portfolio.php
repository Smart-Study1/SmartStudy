<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>My Portfolio</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <nav>
      <div id="nav-part2">
        <h4><a href="#">My Projects</a></h4>
        <h4><a href="#">Resume</a></h4>
        <h4><a href="#">Contact</a></h4>
      </div>

      <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="index.html"><i class="fa-solid fa-house"></i> Home</a>
        <a href="#"> <i class="fa-solid fa-book"></i> My Projects</a>
        <a href="#">My Resume</a>
        <a href="#">My Experties</a>
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#"> <i class="fa-solid fa-phone"></i> Contact</a>
      </div>

      <div id="content">
        <div class="hamburger" id="hamburger" onclick="toggleNav()">&#9776;</div>
      </div>
      </div>
    </nav>
  </header>



  <?php
  require('navigation.inc.php');
  ?>

  <script src="script.js"></script>
</body>