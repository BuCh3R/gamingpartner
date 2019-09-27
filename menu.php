<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" style="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Coda|Patua+One|Russo+One&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico"/>
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
<script>
  function openSlideMenu(){
    document.getElementById('menu').style.width = '60%';
    document.getElementById('menu').style.height = '100%';
    document.getElementById('content').style.marginLeft = '50%';
  }
  function closeSlideMenu(){
    document.getElementById('menu').style.width = '0';
    document.getElementById('content').style.marginLeft = '0';
  }
</script>
</head>
<?php 
if(isset($_SESSION['userId'])){
  echo '<div id="banner1"></div>
  <div id="content">

    <span class="slide">
      <a href="#" onclick="openSlideMenu()">
        <i class="fas fa-bars"></i>
      </a>
    </span>
    <div id="menu" class="nav">
      <a class="close" onclick="closeSlideMenu()">
        <i class="fas fa-times border-none"></i>
      </a>
      <br>
      <br>
      <br>
      <a class="marginleft margintop" href="index.php">Startside</a>
      <br>
      <a class="marginleft margintop" href="index.php#gamepage-link">Vælg Spil</a>
      <br>
      <a class="marginleft margintop" href="profile.php">Profil</a>
     
      
    </div>

  </div>';
}else{
  echo '<div id="banner1"></div>
  <div id="content">

    <span class="slide">
      <a href="#" onclick="openSlideMenu()">
        <i class="fas fa-bars"></i>
      </a>
    </span>
    <div id="menu" class="nav">
      <a class="close" onclick="closeSlideMenu()">
        <i class="fas fa-times border-none"></i>
      </a>
      <br>
      <br>
      <br>
      <a class="marginleft margintop" href="index.php">Startside</a>
      <br>
      <a class="marginleft margintop" href="index.php#gamepage-link">Vælg Spil</a>
      <br>
      <a id="guest" class="marginleft margintop" href="#">Profil</a>
     
      
    </div>

  </div>';
}

  ?>
<body>
    <?php
    if(isset($_SESSION['userId'])){
        echo '<div id="top-menu">
            <ul>
                <li><a href="index.php">Startside</a></li>
                <li><a href="index.php#gamepage-link">Vælg Spil</a></li>
                <li><a href="profile.php">Profil</a></li>
            </ul>
        </div>';
    }else{
        echo '<div id="top-menu">
                <ul>
                    <li><a href="index.php">Startside</a></li>
                    <li><a href="index.php#gamepage-link">Vælg Spil</a></li>
                    <li id="guest"><a id="guest" href="#">Profil</a></li>
                </ul>
            </div>';
    }
    ?>
   
</body>
</html>

