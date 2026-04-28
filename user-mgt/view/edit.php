<?php
    session_start();
    $users = $_SESSION['users'];
    $id= $_GET['id'];

    $user =[];

    foreach ($users as $u ) {
        if($u['id'] == $id){
            $user = $u;
            break;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit User</title>
</head>
<body>

        <h1>Edit User </h1>
        <a href='user_list.php'>Back </a> |
        <a href='../controller/logout.php'>logout</a> 
        <br>

    <form method="post" action="../controller/updateCheck.php">
        Id:   <input type="text" name="id" readonly value="<?=$user['id']?>"/> <br>
        username:   <input type="text" name="username" value="<?=$user['username']?>"/> <br>
        Email:      <input type="email" name="email" value="<?=$user['email']?>"/> <br>
                    <input type="submit" name="submit" value="Update"/>

    </form>
</body>
</html>