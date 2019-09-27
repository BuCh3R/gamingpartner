<?php   
echo "<form method='POST' action='".setComments($conn)."'>
    <input type='hidden' name='uid' value='Guest'>
    <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
    <textarea name='message'></textarea><br>
    <button class='button-class' type='submit' name='commentSubmit'>Comment</button>
</form>";

getComments($conn);

//poster data til db
function setComments($conn) {
    if(isset($_POST['commentSubmit'])){
        
        $uid = $_POST['uid'];
        $date = $_POST['date'];
        $message = $_POST['message'];

        $sql = "INSERT INTO comments (uid, date, message) VALUES ('$uid', '$date', '$message')";
        $result = $conn->query($sql);
    }
}
// tager data fra db
function getComments($conn){
    $sql = "SELECT * FROM comments ORDER BY cid DESC LIMIT 20";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()){
        echo "<div class='comment-box'><p>";
            echo $row['uid']."<br>";
            echo $row['date']."<br>";
            echo nl2br($row['message']);
        echo "</p></div>";
    }
    
}
?>   