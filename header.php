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
</head>
    <header>
                <nav>                                
                    <div>
                        <?php
                        if(isset($_SESSION['userId'])){
                            echo '<form action="includes/logout.inc.php" method="post">
                            <button class="logout-but-pos myButton3" type="submit" name="logout-submit">Logout</button>
                            </form>';
                        }
                        else {
                            echo '<form class="login-form-pos" action="includes/login.inc.php" method="post">
                            <input class="login-input" type="text" name="mailuid" placeholder="Username/E-mail...">
                            <br>
                            <input class="login-input" type="password" name="pwd" placeholder="Password...">
                            <br>
                            <button class="login-button-style myButton" type="submit" name="login-submit">Login</button>
                            <a class="login-button-style myButton2" href="signup.php">Sign up</a>
                            </form>';
                        }
                        ?>        
                    </div>             
                </nav>           
    </header>