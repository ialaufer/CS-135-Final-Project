<?php 
require "../application/view/???.php";
session_start(); 
?>

<!DOCTYPE html>

<?php 

// If this session is just beginning, store an empty ShoppingCart in it.
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = new ShoppingCart();
}

// if an update POST request is true
if ($_POST["update"]) {
    echo "Form was submitted successfully! <br><br>";
    print_r($_POST);
    foreach (ShoppingCart::$cookieTypes as $type => $value) {
        if ($_POST[$type]) {
            $quantity = $_POST[$type];
            $_SESSION['cart']->update($type, $quantity);
        }
    }
}
?>

<html lang="en">

<head>
<title>Provide your information:</title>
</head>

<body>

<form name="checkout" method="post">
    <script src="public/js/validate.js"></script>
    <h2>Customer Info</h2>        
        <legend for="name">Name
        <input type="text" name="name" value="" onBlur="validateField(this)" id="name"><span class='info'></span></legend>
        <legend for="school">School
        <input type="text" name="school" value="" onBlur="validateField(this)" id="school"><span class='info'></span></legend>
        
        <h3>Contact information</h3>
        <legend for="email">Email
        <input type="text" name="email" id="email" value="" onBlur="validateField(this)"><span class='info'></span></legend>
        <legend for="phone">Phone
        <input type="text" name="phone" id="phone" value="" onBlur="validateField(this)"><span class='info'></span></legend>

        <p><input type="button" value="Submit request" onBlur="submitOrder()"/><span class='info'></span></p>
  
        
    </form></fieldset>

<p><?php
echo "<form method='post' name='updateForm'>";
echo "<table><tr><td> Type </td><td> Quantity </td></tr>";

// get public version of cart

foreach ($_SESSION['cart']->getOrder() as $type => $quantity ) {
    echo "<tr><td> $type </td><td> <input text ='text' name='$type' value='$quantity'></input> </td></tr>";
}

echo "<tr><td></td><td> <input type='submit' value='update' name='update'> </input></td></tr></table></form>";
?></p>

<p><a href="application/view/index.php">Look around some more</a></p>

</body>
</html>