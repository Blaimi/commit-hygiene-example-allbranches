<?php
require_once "dto.php";

if (empty($_GET['firstName'])) {
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>commit hygiene example</title>
    </head>
    <body>
        <form>
            <label for="firstName">first name</label>
            <input id="firstName" name="firstName"/><br>
            <label for="lastName">last name</label>
            <input id="lastName" name="lastName"/><br>
            <label for="street">street</label>
            <input id="street" name="street"/><br>
            <label for="zip">zip</label>
            <input id="zip" name="zip"/><br>
            <label for="city">city</label>
            <input id="city" name="city"/><br>
            <button type="submit">submit</button>
        </form>
    </body>
</html>
<?php
} else {
    $user = new User($_GET);
?>
<!DOCTYPE html>
<html lang="en">
    <head><title>commit hygiene example</title></head>
    <body>
        <h1><?= htmlspecialchars($user->getFirstName() . ' ' . $user->getLastName()) ?></h1>
        <p>
            <?= htmlspecialchars($user->getStreet()) ?><br>
            <span style="font-size: larger"><?= htmlspecialchars($user->getZip()) ?></span> <?= htmlspecialchars($user->getCity()) ?>
        </p>
        <form>
            <button type="submit" formaction="index.php">new</button>
        </form>
    </body>
</html>
<?php
}
