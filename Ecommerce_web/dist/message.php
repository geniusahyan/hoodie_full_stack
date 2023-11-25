<?php
include_once('./Conn.php');
$name = $_POST['Name'];
$email = $_POST['Email'];
$message = $_POST['message'];

if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}else{
    $sql = "INSERT INTO contact(name,email,message) VALUES('$name','$email','$message')";
    if ($conn->query($sql) === TRUE) {
        header('Location: index.php#about');
    } else {
        echo "Error: ". $sql. "<br>". $conn->error;
    }
    $conn->close();
}

?>