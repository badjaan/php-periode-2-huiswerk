<!DOCTYPE html>
<html>
<head>
    <title>Gebruiker bewerken</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="usersBekijken.php">Bekijken</a></li>
            <li><a href="usersBewerken.php">Bewerken</a></li>
            <li><a href="usersToevoegen.php">Toevoegen</a></li>
        </ul>
    </nav>

    <form method="POST">
    <table>
        <tr>
            <td><label for="user_id">User ID:</label></td>
            <td><input type="text" id="user_id" name="user_id" placeholder="User ID"></td>
        </tr>
        <tr>
            <td><label for="voornaam">Voornaam:</label></td>
            <td><input type="text" id="voornaam" name="voornaam" placeholder="Voornaam"></td>
        </tr>
        <tr>
            <td><label for="tussenvoegsel">Tussenvoegsel:</label></td>
            <td><input type="text" id="tussenvoegsel" name="tussenvoegsel" placeholder="Tussenvoegsel"></td>
        </tr>
        <tr>
            <td><label for="achternaam">Achternaam:</label></td>
            <td><input type="text" id="achternaam" name="achternaam" placeholder="Achternaam"></td>
        </tr>
        <tr>
            <td><label for="adres">Adres:</label></td>
            <td><input type="text" id="adres" name="adres" placeholder="Adres"></td>
        </tr>
        <tr>
            <td><label for="postcode">Postcode:</label></td>
            <td><input type="text" id="postcode" name="postcode" placeholder="Postcode"></td>
        </tr>
        <tr>
            <td><label for="telefoon">Telefoon:</label></td>
            <td><input type="text" id="telefoon" name="telefoon" placeholder="Telefoon"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Bewerk" id="submit" name="submit"></td>
        </tr>
    </table>
    </form>
</body>
</html>

<?php
include('dbstart.php');
include_once('user.php');

$user = new User($conn);

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['submit'])) {
    $user_id = $_POST["user_id"];
    $voornaam = $_POST["voornaam"];
    $tussenvoegsel = $_POST["tussenvoegsel"];
    $achternaam = $_POST["achternaam"];
    $adres = $_POST["adres"];
    $postcode = $_POST["postcode"];
    $telefoon = $_POST["telefoon"];

    $user->updateUser($user_id, $voornaam, $tussenvoegsel, $achternaam, $adres, $postcode, $telefoon);

    header("Location: http://localhost/schoolphp/php-3e-jaar-nullmeting/usersBekijken.php");
}
?>