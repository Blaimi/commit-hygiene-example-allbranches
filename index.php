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
            <label>first name <input name="firstName"/></label><br>
            <label>last name <input name="lastName"/></label><br>
            <label>street <input name="street"/></label><br>
            <label>zip <input name="zip"/></label><br>
            <label>city <input name="city"/></label><br>
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
    </body>
</html>
<?php
}
