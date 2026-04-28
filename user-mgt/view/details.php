<?php
session_start();

$users = $_SESSION['users'];
$id = $_GET['id'];

$user = null;

foreach ($users as $u) {
    if ($u['id'] == $id) {
        $user = $u;
        break;
    }
}

if ($user == null) {
    echo "User not found!";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Details</title>
</head>
<body>

<h1>User Details</h1>

<b>ID:</b> <?=$user['id']?>
<br>
<b>Username:</b> <?=$user['username']?>
<br>
<b>Email:</b> <?=$user['email']?>

<br>
<br>
<br>
<br>

<a href="user_list.php">Back</a> |
<a href="../controller/logout.php">Logout</a>

</body>
</html>