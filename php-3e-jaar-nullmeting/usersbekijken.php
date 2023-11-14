<!DOCTYPE html>
<html>
<head>
    <title>Users Bekijken</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="usersBekijken.php">Bekijken</a></li>
            <li><a href="usersBewerken.php">Bewerken</a></li>
            <li><a href="usersToevoegen.php">Toevoegen</a></li>
        </ul>
    </nav>
    <?php
    include_once('dbstart.php'); 
    include_once('user.php');

include_once "user.php";

$user = new User($conn);

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["user_id"])) {

    $user->deleteUser($conn);
}


$users = $user->getAllUsers();

foreach ($users as $userData) {
    echo '<ul>';
    foreach ($userData as $key => $value) {
        echo '<li>' . $key . ': ' . $value . '</li>'; 
    }
    echo '<li>
              <form method="POST">
                  <input type="hidden" name="user_id" value="' . $userData['user_id'] . '">
                  <input type="submit" value="Delete">
              </form>
          </li>';
    echo '</ul>';
}
    ?>
</body>
</html>
