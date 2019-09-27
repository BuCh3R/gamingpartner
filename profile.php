<?php
session_start();
include 'includes/dbh.inc.php';
include 'menu.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://fonts.googleapis.com/css?family=Coda|Patua+One|Russo+One&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profil</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Squada+One&display=swap" rel="stylesheet">
</head>

<div id="myDIV"></div>

<script>
function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.innerHTML === "") {
    x.innerHTML = "<div id='dias'><label class='container2' onclick='csgoClick()'>CSGO<input type='radio' checked='checked' name='radio'><span class='checkmark2' onclick='csgoClick()'></span></label><br><label class='container2' onclick='lolClick()'>LoL<input type='radio' name='radio'><span class='checkmark2' onclick='lolClick()'></span></label><br><label class='container2' onclick='fnClick()'>Fortnite<input type='radio' name='radio'><span class='checkmark2' onclick='fnClick()'></span></label><br><label class='container2' onclick='dotaClick()'>Dota 2<input type='radio' name='radio'><span class='checkmark2' onclick='dotaClick()'></span></label><br><label class='container2' onclick='wowClick()'>WoW<input type='radio' name='radio'><span class='checkmark2' onclick='wowClick()'></span></label></div>";
  } else {
    x.innerHTML = "";
  }
}
</script>

<script>
    function csgoClick(){
        document.getElementById("valgtSpil").innerHTML = "Counter-Strike Global Offensive";
    }
    function lolClick(){
        document.getElementById("valgtSpil").innerHTML = "League of Legends";
    }
    function fnClick(){
        document.getElementById("valgtSpil").innerHTML = "Fortnite";
    }
    function dotaClick(){
        document.getElementById("valgtSpil").innerHTML = "Dota 2";
    }
    function wowClick(){
        document.getElementById("valgtSpil").innerHTML = "World of Warcraft";
    }
    
</script>

   
            
            <div>
                <?php
                if(isset($_SESSION['userId'])){
                    echo '<form action="includes/logout.inc.php" method="post">
                    <button class="logout-but-pos myButton3" type="submit" name="logout-submit">Logout</button>
                    </form>';
                    }
                    else {
                    echo '<form action="includes/login.inc.php" method="post">
                    <input type="text" name="mailuid" placeholder="Username/E-mail...">
                    <input type="password" name="pwd" placeholder="Password...">
                    <button type="submit" name="login-submit">Login</button>
                    </form>                        
                    <a href="signup.php">Signup</a>';
                    }
                ?>
                <?php
                
                ?>

                <?php
function postimg(){
    echo "<img src='img/profiledefault.png'>";
}
                if(isset($_SESSION['userId'])){
                        $sql = "SELECT * FROM users";
                        $result = mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result)>0){
                            while ($row = mysqli_fetch_assoc($result)) {
                                $idUsers = $row['idUsers'];                              
                                $sqlimg = "SELECT * FROM profileimg WHERE userid ='$idUsers'";
                                    $resultimg = mysqli_query($conn, $sqlimg);
                                    while($rowimg = mysqli_fetch_assoc($resultimg)){
                                        echo "<div class='user-container'>";
                                        if($rowimg['statuss'] == 0){
                                            $filename = "uploads/profile".$idUsers.".*";
                                            $fileinfo = glob($filename);
                                            $fileext = explode(".", $fileinfo[0]);
                                            $fileactualext = $fileext[1];
                                            if(isset($_SESSION['userId'])){
                                                if($_SESSION['userId']==$row['idUsers']){
                                                    echo "<img src='uploads/profile".$idUsers.".".$fileactualext."?".mt_rand()."'><h5 id='valgtSpil'></h5>";
                                                    }
                                                    // else{
                                                    //     postimg();
                                                    // }
                                                }
                                                
                                                
                                            }
                                            
                                            
                                            
                                            if(isset($_SESSION['userId'])){
                                                if($_SESSION['userId']==$row['idUsers']){
                                            echo "<p class='username-pos'><a class='nopad2' href='#'>".$row['uidUsers']."</a>";
                                            echo "<a onclick='myFunction()' class='nopad' href='#'>Primære Spil</a>"; 
                                            // echo "<a class='nopad' href='#'>Achievements</a>"; 
                                            // echo "<a class='nopad' href='#'>Partners</a></p>";
                                            echo "</p></div>";
                                            
                                                }
                                            }
                                        }
                                    }      
                                }
                            }

                               
   
   
    // $sqlimgcheck = "SELECT * FROM profileimg";
    // $resultchecks = mysqli_query($conn, $sqlimg);
    // if($rowimg['statuss'] == 1){
    //     if(isset($_SESSION['userId'])){
    //         if($_SESSION['userId']==$row['idUsers']){

    //         }
    //     }
    // }
    
    ?>
    
    <?php
    if(isset($_SESSION['userId'])){
        if ($_SESSION['userId']) {
            echo "<form action='upload.php' method='POST' enctype='multipart/form-data'>
            <div class='profilbil'><input class='custom-file-input' type='file' name='file'>
            <button class='custom-file-button' type='submit' name='submit'>Upload</button></div>
            </form>";
            
        }
        echo "";
        }
        
    // $username = $_POST['uid'];
    // $email = $_POST['mail'];
    // $password = $_POST['pwd'];
    // $passwordrepeat = $_POST['pwd-repeat'];

    // $sql = "SELECT * FROM users WHERE uidUsers='$username'";
    // $result =mysqli_query($conn, $sql);

    
    ?>
    <?php
    // if(isset($_SESSION['userId'])){
    //     $sql = "SELECT * FROM users";
    //     $result = mysqli_query($conn, $sql);
    //     if(mysqli_num_rows($result)>0){
    //         $idUsers = $row['idUsers'];                              
    //         $sqlimg = "SELECT * FROM profileimg WHERE userid ='$idUsers'";
    //         $resultimg = mysqli_query($conn, $sqlimg);
    //         if($rowimg['statuss'] = 1){
    //             echo "<div>";
    //             echo "<img src='img/profiledefault.png'>";
                
    //         }else{
    //             echo "<img src='img/skype-icon.png'>";
    //             echo "</div>";
                
    //         }
            
    //     }
    // }
    ?>

                </div>

            

        
        <br>
        
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        
<body>

</body>
</html>
