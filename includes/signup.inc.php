<?php
if(isset($_POST['signup-cancel'])){
    header("Location: ../index.php");
    exit();
}

if(isset($_POST['signup-submit'])){

    require 'dbh.inc.php';

    $username = $_POST['uid'];
    $email = $_POST['mail'];
    $password = $_POST['pwd'];
    $passwordrepeat = $_POST['pwd-repeat'];

    if(empty($username) || empty($email) || empty($password) || empty($passwordrepeat)){
        header("Location: ../signup.php?error=empty_fields&uid=".$username."&mail=".$email);
        exit();
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)){
        header("Location: ../signup.php?error=invalid_uid_mail");
        exit();
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../signup.php?error=invalid_mail2&uid=".$username);
        exit();  
    }
    else if (!preg_match("/^[a-zA-Z0-9+æøå+ÆØÅ]*$/", $username)) {
        header("Location: ../signup.php?error=invalidusernamesymbol");
        exit();  
    }
    else if ($password !== $passwordrepeat) {
        header("Location: ../signup.php?error=password_check&uid=".$username."&mail=".$email);
        exit();
    }
    else{
        $sql = "SELECT * FROM users WHERE uidUsers='$username'";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
           
            if ($resultCheck > 0) {
            header("Location: ../signup.php?error=userexist");
            exit();
   
        }
        else{
            $sql = "SELECT * FROM users WHERE emailUsers='$email'";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
           
            if ($resultCheck > 0) {
            header("Location: ../signup.php?error=emailexist");
            exit();
            } 
           
            else {

                $sql = "INSERT INTO users (uidUsers, emailUsers, pwdUsers) VALUES (?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../signup.php?error=sqlerror");
                    exit(); 
                }
                else{
                    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

                    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
                    mysqli_stmt_execute($stmt);
                    $sql = "SELECT * FROM users WHERE uidUsers='$username'";
                    $result = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result) > 0){
                        while ($row = mysqli_fetch_assoc($result)) {
                            $userid = $row['idUsers'];
                            $sql = "INSERT INTO profileimg (userid, statuss) VALUES ('$userid', 1)";
                            mysqli_query($conn, $sql);
                            header("Location: ../index.php");
                        }
                    }else{
                        echo "Fejl";
                    }
                    header("Location: ../index.php");
                    exit();
                }
            }
           }
        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }
    else {
        header("Location: ../signup.php");
        exit();

    }