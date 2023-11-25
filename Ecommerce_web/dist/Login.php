<?php
 include_once('Conn.php');

 $email = $_POST['email'];
 $password = $_POST['password'];
 if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}else{
    $sql = "select * from users where email = '{$email}' and password = '{$password}' ";
    $result = $conn->query($sql);
    $data = [];
    if ($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $data[] = $row;
            list($username, $domain) = explode('@', $row['email']);
            session_start();
            $_SESSION['username'] = $username;
        }
    }else{
        echo 'no record found';
    }
    echo json_encode($data);
    if ($result->num_rows > 0){
        header('Location: index.php');
    }
}
$conn->close();
?>