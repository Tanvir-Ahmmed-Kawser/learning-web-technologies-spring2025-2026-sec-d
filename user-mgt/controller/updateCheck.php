<?php
    session_start();    
    if (!isset($_SESSION['users'])) {
        header("Location: ../view/user_list.php");
    exit;
    }
    $users = $_SESSION['users'];
    $id= $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];

    $updatedUsers = [];

    foreach($users as $u){
        if($u['id'] == $id){
            $u['username'] = $username;
            $u['email'] = $email;
        }
        $updatedUsers[] = $u;
    }
    $_SESSION['users'] = $updatedUsers;

    header("Location: ../view/user_list.php");
?>