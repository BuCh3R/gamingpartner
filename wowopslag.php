<?php
ob_start();
session_start();
date_default_timezone_set('Europe/Copenhagen');
include 'includes/dbh.inc.php';
include 'menu.php';
include 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico"/>
    <link href="https://fonts.googleapis.com/css?family=Patua+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Coda|Patua+One|Russo+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Exo+2|Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bitter&display=swap" rel="stylesheet">
</head>
<h3 id="teamup-link" class="h-headline2">WoW Partner</h3>
            <!-- <div class="lololol"><p class="three-step">1. Del/søg</p><p class="three-step">2. Tilføj din gamingpartner</p><p class="three-step">3. Vind sammen</p></div>
            <img class="stick-class" src="img/stickfigures.png">
            <img class="stick-class2" src="img/stickfigures.png"> -->
            <body>
            <div class="float-right linkbox">
                    <p>Character stats links:</p>
                    <br>
                <a target="_blank" href="https://worldofwarcraft.com/en-gb/">worldofwarcraft.com</a>
                <br>
                <a target="_blank" href="https://www.wowhead.com/list">wowhead.com</a>
                <br>
                <a target="_blank" href="https://www.wowprogress.com/">wowprogress.com</a>
                </div>
            <?php
if(isset($_SESSION['userId'])){
    echo "<form method='POST' action='".setComments($conn)."'>
    <input class='bold' type='hidden' name='uid' value='".$_SESSION['userId']."'>
    <input class='bold' type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
    <div class='area-pos'><textarea name='message' placeholder='Skriv dit opslag her fx. server, ign, rank, lf...'></textarea></div><br>
    <button class='button-class delbut' type='submit' name='commentSubmit'>Del</button>
</form>";
}else
echo "<form method='POST' action='".setComments($conn)."'>
    <input class='bold' type='hidden' name='uid' value='Gæst(WoW)'>
    <input class='bold' type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
    <div class='area-pos'><textarea name='message' placeholder='Skriv dit opslag her fx. server, ign, rank, lf...'></textarea></div><br>
    <button class='button-class delbut' type='submit' name='commentSubmit'>Del</button>
</form>";

getComments($conn);

//poster data til db
function setComments($conn) {
    if(isset($_POST['commentSubmit'])){
        $uid = htmlspecialchars(mysqli_real_escape_string($conn , $_POST['uid']));
        $date = htmlspecialchars(mysqli_real_escape_string($conn , $_POST['date']));
        $message = htmlspecialchars(mysqli_real_escape_string($conn , $_POST['message']));

        $sql = "INSERT INTO comments_wow (uid, date, message) VALUES ('$uid', '$date', '$message')"; 
        $result = $conn->query($sql);
        header("Location: #teamup-link");
    }
}
// tager data fra db
function getComments($conn){
    $sql = "SELECT * FROM comments_wow ORDER BY cid DESC LIMIT 22";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()){
        $idUsers = $row['uid'];
        $sql2 = "SELECT * FROM users WHERE idUsers='$idUsers'";
        $result2 = $conn->query($sql2);
        if($row2 = $result2->fetch_assoc()){
            echo "<div class='comment-box'><h1><p>";         
            echo $row2['uidUsers']." ";          
            echo $row['date']."<br>";
            echo "</p>";
            echo nl2br($row['message']);
            echo "</h1></div>";
        }else{
            echo "<div class='comment-box'><h1><p>";         
            echo $row['uid']." ";          
            echo $row['date']."<br>";
            echo "</p>";
            echo nl2br($row['message']);
            echo "</h1></div>";
        }
            
    }
    

}


ob_flush();
?>
  