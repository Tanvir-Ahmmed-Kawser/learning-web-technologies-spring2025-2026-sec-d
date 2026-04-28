<?php
session_start();
if (!isset($_SESSION['users'])) {
    header("Location: user_list.php");
    exit;
}
$users = $_SESSION['users'];
$id = $_GET['id'];

foreach ($users as $u) {
    if ($u['id'] == $id) {
        unset($users[$id]);
        break;
    }
}

$_SESSION['users'] = $users;

header("Location: user_list.php");
exit;
?>