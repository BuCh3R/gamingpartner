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
    <link href="https://fonts.googleapis.com/css?family=Baloo&display=swap" rel="stylesheet">
    <title>GamingPartner</title>
</head>
<body>

    <div class="gplogo">
    <img src="img/gplogo2png.png" alt="gamingpartner logo">
    <p>Gamingpartner.dk</p>
    </div>
    
    <div class="divfade">

    </div>
    <div id="gray-bg">

    </div>
            <!-- <img class="side-ban-pos" src="img/sideimg.png">
        <img class="side-ban-pos2" src="img/sideimgnr3.png">
        <img class="side-ban-pos3" src="img/sideimg.png">
        <img class="side-ban-pos4" src="img/sideimgnr3.png">
        <img class="side-ban-pos5" src="img/sideimgnr3.png">
        <img class="side-ban-pos6" src="img/sideimgnr3.png">
        <img class="side-ban-pos7" src="img/sideimgnr3.png">
        <img class="side-ban-pos8" src="img/sideimgnr3.png"> -->
        
                
                    
                <!-- <div id="cf">
                <img class="bottom" src="img/csgofade.jpg"/>
                <img class="top" src="img/wowfade.jpg"/>
                </div> -->

                    <!-- <img class="arrow-css" src="img/arrow.png" alt="arrow">
                    <div class="div3-css"><img class="trin3-css" src="img/trin3.png"></div>
                    <img class="arrow-css2" src="img/arrow.png" alt="arrow">
                    <div class="div2-css"><img class="trin2-css" src="img/trin2.png"></div>
                    <div class="div1-css"><img class="trin1-css" src="img/trin1.png"></div>             -->
                    <!-- <div id="startsideimg"><img src="img/pentakill.jpg" alt="pentakill"><img src="img/fortnite.jpg" alt="fortnite victory"><img src="img/csgoscore.jpg" alt="scoreboard"><img src="img/wow.jpg" alt="classic wow talent tree"></div> -->

                    
        </div>
        </div>
        

                    </p>
                    <h2 id="gamepage-link" class="h-headline">Vælg dit spil</h2>
                    <ul>
                        <li><a href="csgoopslag.php">CS:GO<img class="game-img-size game-img-size-cs" src="img/csgo-icon.png"></a></li>
                        <li><a href="lolopslag.php">League of Legends<img class="game-img-size" src="img/lol-icon.png"></a></li>
                        <li><a href="fortniteopslag.php">Fortnite<img class="game-img-size game-img-size-fort" src="img/fortnite-icon.png"></a></li>
                        <li><a href="dota2opslag.php">Dota 2<img class="game-img-size" src="img/dota2-icon.png"></a></li>
                        <li><a href="wowopslag.php">World of Warcraft<img class="game-img-size" src="img/wow-icon.png"></a></li>
                    </ul>
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
        <div class="center to-top"><p><a class="to-top" href="#"><p><i class="up"></i></p></a></p></div>
        
        <div class="downloads-text">
            <p>
                Træt af det samme spil? Prøv et nyt! <br>Følg <a href="jokes.php">link</a>et og tilknyt dig det nye fællesskab!
            </p>
        </div>
        <div class="downloads-voice">
        <h2>voice programmer</h2><br>
        <a target="_blank" href="https://discordapp.com/download"><img src="img/discord-icon.png" alt="discord image"></a>
        <a target="_blank" href="https://www.teamspeak.com/en/downloads/"><img src="img/teamspeak-icon.png" alt="ts3 image"></a>
        <a target="_blank" href="https://www.mumble.com/mumble-download.php"><img src="img/mumble.png" alt="mumble image"></a>
        <a target="_blank" href="https://www.skype.com/da/get-skype/"><img src="img/skype-icon.png" alt="skype image"></a>
        </div>
        <div class="downloads">
            <p>Counter-Strike Global Offensive download link <a target="_blank" href="https://store.steampowered.com/app/730/CounterStrike_Global_Offensive/">Her</a></p>
            <br>
            <p>League of Legends download link <a target="_blank" href="https://signup.euw.leagueoflegends.com/en/signup/redownload">Her</a></p>
            <br>
            <p>Fortnite download link <a target="_blank" href="https://www.epicgames.com/fortnite/en-US/download">Her</a></p>
            <br>
            <p>Dota 2 download link <a target="_blank" href="https://store.steampowered.com/app/570/Dota_2/">Her</a></p>
            <br>
            <p>World of Warcraft download link <a target="_blank" href="https://www.blizzard.com/en-us/download/">Her</a></p>
        </div>


        </div>
    </div>

<?php
include 'footer.php';
?>
</body> 
</html>