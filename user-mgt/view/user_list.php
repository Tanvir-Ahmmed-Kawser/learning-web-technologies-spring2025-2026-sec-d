<?php
    session_start();
    $users = [
        ['id'=>1, 'username'=>'abc', 'email'=>'abc@aiub.edu'],
        ['id'=>2, 'username'=>'xyz', 'email'=>'xyz@aiub.edu'],
        ['id'=>3, 'username'=>'alamin', 'email'=>'alamin@aiub.edu'],
        ['id'=>4, 'username'=>'test', 'email'=>'test@aiub.edu'],
        ['id'=>5, 'username'=>'pqr', 'email'=>'pqr@aiub.edu']
    ];
    //$_SESSION['users'] = $users;
    if (!isset($_SESSION['users'])) {
    $_SESSION['users'] = $users;
}

$users = $_SESSION['users'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>User List</title>
</head>
<body>
        <h1>All User </h1>
        <a href='home.php'>Back </a> |
        <a href='../controller/logout.php'>logout</a> 
        <br>

        <table border=1>
            <tr>
                <th>ID</th>
                <th>USERNAME</th>
                <th>EMAIL</th>
                <th>ACTION</th>
            </tr>

    <?php foreach ($users as $user) { ?>
            <tr>
                <td><?php echo $user['id'];?></td>
                <td><?php echo $user['username'];?></td>
                <td><?=$user['email']?></td>
                <td>
                    <a href="edit.php?id=<?=$user['id']?>"> EDIT </a> |
                    <a href="details.php?id=<?=$user['id']?>"> Details </a> |
                    <a href="delete.php?id=<?=$user['id']?>"> Delete </a> 
                </td>
            </tr>
    <?php }?>
           
        </table>
</body>
</html>



