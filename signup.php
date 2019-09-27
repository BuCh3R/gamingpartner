<?php
require "index.php"
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<main>
            <div>
          <?php
            if (isset($_GET['error'])){
                if($_GET['error'] == "empty_fields"){
                    echo '<p class="errormsg-text">Fill in all the fields!</p>';
                }
                else if ($_GET['error'] == "emailexist"){
                    echo '<p class="errormsg-text">The E-mail has already been used!</p>';
                }
                else if ($_GET['error'] == "userexist"){
                    echo '<p class="errormsg-text">Username is already taken!</p>';
                }
                else if ($_GET['error'] == "invalidusernamesymbol"){
                    echo '<p class="errormsg-text">Invalid username, only characters and numbers allowed!</p>';
                }
                else if ($_GET['error'] == "invalid_mail2"){
                    echo '<p class="errormsg-text">Invalid E-mail!</p>';
                }
                else if ($_GET['error'] == "password_check"){
                    echo '<p class="errormsg-text">Your passwords do not match!</p>';
                }
                
            }
            
          ?>
          </div>
          <div class="signup-position">
          <form action="includes/signup.inc.php" method="post">
            <input class="input-size" type="text" name="uid" placeholder="Username">
            <br>
            <input class="input-size" type="text" name="mail" placeholder="E-mail">
            <br>
            <input class="input-size" type="password" name="pwd" placeholder="Password">
            <br>
            <input class="input-size" type="password" name="pwd-repeat" placeholder="Repeat password">
            <br>
            <button class="input-size signup-button" type="submit" name="signup-cancel">Cancel</button>
            <button class="input-size signup-button" type="submit" name="signup-submit">Sign up</button>
        </form>

        <?php
        if(isset($_GET["newpwd"])){
            if($_GET["newpwd"] == "passwordupdated"){
                echo '<p>Your password has been reset</p>';
            }
        }
        ?>
        <a href="reset-password.php">Forgot your password?</a>
        </div>
        </main>