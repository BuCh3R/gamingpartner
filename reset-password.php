<?php
require "index.php"
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<h1>Reset your password</h1>
<p>An email will be send to you with instructions on how to reset your password</p>
<form action="includes/reset-request.inc.php" method="post">
<input type="text" name="email" placeholder="Enter your email adress...">
<button type="submit" name="reset-request-submit">Receive new password by email</button>
</form>
<?php
if(isset($_GET["reset"])){
    if ($_GET["reset"] == "succes") {
        echo '<p>Check your email</p>';
    }
}
?>