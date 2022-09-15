<?php

$email = htmlspecialchars( $_GET['email'] );
$sql = "SELECT * FROM users WHERE email = '$email'";
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['id'] = $row['id'];
    if($row['type'] == 'user') {
        $_SESSION['user_login'] = $row['name'];
        header('location: index.php');
    }else {
        $_SESSION['admin_login'] = $row['name'];
        header('location: admin/index.php');
    }
}