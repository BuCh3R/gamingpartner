<?php
session_start();
include_once 'includes/dbh.inc.php';
$id = $_SESSION['userId'];
if(isset($_SESSION['userId'])){
    $file = $_FILES['file'];

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png');

    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize <2000000) {
                $fileNameNew = "profile".$id.".".$fileActualExt;
                $fileDestination ='uploads/'.$fileNameNew;
                foreach(glob("uploads/profile{$id}.*") as $match) { unlink($match);}
                move_uploaded_file($fileTmpName, $fileDestination);
                $sql = "UPDATE profileimg SET statuss=0 WHERE userid='$id';";
                $result = mysqli_query($conn, $sql);
                header("Location: profile.php?uploadsucces");
            }
            else {
                echo "Your file is too big";
            }
        }
        else {
            echo "There was an error uploading your file";
        }
    }
    else {
        echo "Wrong file type";
    }
}