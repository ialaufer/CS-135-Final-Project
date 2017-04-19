<?php 
require "../application/view/???.php";
session_start(); 
?>

<!DOCTYPE html>


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

        <h3>Note to provider:</h3>

        <p><input type="button" value="Submit request" onBlur="sendMessage()"/><span class='info'></span></p>
        <p><input type="reset"></p>
  
        
    </form></fieldset>

<?php
    function sendMessage($service, $userId, $message) {
        try {
            $message = $service->users_messages->send($userId, $message);
            print 'Message with ID: ' . $message->getId() . ' sent.';
            return $message;
        } catch (Exception $e) {
            print 'An error occurred: ' . $e->getMessage();
        }
    }
?>

<p><a href="application/view/index.php">Look around some more</a></p>

</body>
</html>