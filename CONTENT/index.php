<?php
  //1 Start session
  session_start();
?>


<!--Meta Data======================================================= -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../Miscellaneous/LGLogo.ico" rel="shortcut icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Chicle" rel="stylesheet">
    <link href="./index.css" rel="stylesheet" type="text/css">
    <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" rel="stylesheet" crossorigin="anonymous">
    <script>
      var myVar;

      function myFunction() {
        myVar = setTimeout(showPage, 500);
      }   
      function showPage() {
        document.getElementById("loader").style.display = "none";
      }
    </script>
  </head>



<!--Loader===========================================================-->
  <body onload="myFunction()">
    <div id="loader"></div>



<!--Nav Bar==========================================================-->
    <nav role="navigation">
      <div id="menuToggle">
        <input type="checkbox"/>
        <span></span>
        <span></span>
        <span></span>
        <ul id="menu">
          <a class="pages" href="./index.php">
            <li>Home</li>
          </a>
          <a class="pages" href="./leaderboard.php">
            <li>Leaderboard</li>
          </a>
          <a class="pages" href="../LoginSystem/lor.php">
            <li>Profile</li>
          </a>
        </ul>
      </div>
    </nav>
    


    
<!--Banner======================================================-->
    <div class="container">
        <img src="../Miscellaneous/setup.jpg">
        <div class="text"> 
          <h1>Lame Games</h1>
          <p>Wasting time since '18</p>
        </div>
      </div>



<!--Content========================================================= -->  
    <div class="grid-container content">
      <section class="about">
        <h2>About</h2>
        <p>Lame Games is an organization created by Nathan Ley and
        Andrew Zweifel to bring programming and fun together. 
        Lame Games offers fully developed games that can be played 
        by the public, as well as a friendly game developing 
        competition.</p>
      </section>

      <div id="shape1">
      </div>

      <div id="shape2">
      </div>

      <section class="competition">
        <h2>The Competition</h2>
        <p>The competition is a timed event in which both Nathan and Andrew 
        must create the best game possible using the programming language,
        Python. The reason behind the name "Lame Games" ,comes from the competition
        where, under strict time limits, it is hard to create good games. The rules
        for the game are as follows:</p> 
        <br>
        <div class= "list">
          <ol>
            <li>The time limit in the competition is 30 minutes</li>
            <li>Competitors must start with a clean, empty file to begin</li>
            <li>The language used to create the games must be Python</li>
            <li>There can be no copying and pasting from past projects</li>
          </ol>
        </div>
      </section>

      <section class="playgame">
        <h2>Downloadable Games</h2>
        <p>On the other hand, Lame Game creators make games outside of the competition and
        these downloadable games have had much time and work put into. Players can create a 
        free account and download our provided games. You can
        also <a class="statCheck" href="./leaderboard.php">check your stats and comparisons to other players</a></p>
        <br>
      </section>

      <div id="shape3">
        </div>
    </div>
      <a href="#" class="downloadLink space">Coming Soon!</a>




<!--Footer========================================================-->
    <footer>
      <br><br><br>
      <a href="https://github.com/nathanleysgit" target="_blank">
        <i class="fab fa-github fa-3x"></i>
      </a>

      <a href="https://www.youtube.com" target="_blank">
        <i class=" free fas fa-tv fa-3x" style="color: #ffffff"></i>
      </a>

      <br>
      <span> 2018 Lame Games.</span>
    </footer>  
  </body>
</html>
