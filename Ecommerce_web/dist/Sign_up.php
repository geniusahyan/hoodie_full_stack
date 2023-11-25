<?php
 include_once('Conn.php');

 $email = $_POST['Email'];
 $password = $_POST['password'];
 $spassword = $_POST['spassword'];

 if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}else{

    $sql = "INSERT INTO users (email, password) VALUES ('{$email}', '{$password}')";

    if ($conn->query($sql) === TRUE) {
        list($username, $domain) = explode('@', $email);
            session_start();
            $_SESSION['username'] = $username;
        header('Location: index.php');
    } else {
        echo "Error: ". $sql. "<br>". $conn->error;
    }
}
?>