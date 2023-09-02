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
            <h2>invoice address</h2>
            <label>street <input name="invoiceAddress[street]"/></label><br>
            <label>zip <input name="invoiceAddress[zip]"/></label><br>
            <label>city <input name="invoiceAddress[city]"/></label><br>
            <h2>delivery address (optional)</h2>
            <label>street <input name="deliveryAddress[street]"/></label><br>
            <label>zip <input name="deliveryAddress[zip]"/></label><br>
            <label>city <input name="deliveryAddress[city]"/></label><br>
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
        <h2>invoice address</h2>
        <p>
            <?= htmlspecialchars($user->getInvoiceAddress()->getStreet()) ?><br>
            <span style="font-size: larger"><?= htmlspecialchars($user->getInvoiceAddress()->getZip()) ?></span> <?= htmlspecialchars($user->getInvoiceAddress()->getCity()) ?>
        </p>
        <h2>delivery address</h2>
        <p>
            <?= htmlspecialchars($user->getDeliveryAddress()->getStreet()) ?><br>
            <span style="font-size: larger"><?= htmlspecialchars($user->getDeliveryAddress()->getZip()) ?></span> <?= htmlspecialchars($user->getDeliveryAddress()->getCity()) ?>
        </p>
    </body>
</html>
<?php
}
