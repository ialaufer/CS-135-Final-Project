<?php 
require "../model/model.php";
include "../email.php";
session_start(); 
?>

<!DOCTYPE html>


<html lang="en">

<head>
<title>Provide your information:</title>
</head>

<style>
    #note
    {
        height:200px;
        font-size:14pt;
    }
</style>

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
        <legend for="note">
        <input type="text" name="note" id="note" value="" <span class='info'></span></legend>
        <p><input type="button" value="Submit request" onBlur="sendEmail(getemail(), #note, #name, #school, #phone, #email)"/><span class='info'></span></p>
        <p><input type="reset"></p>
  
        
    </form></fieldset>


<p><a href="application/view/index.php">Look around some more</a></p>

</body>
</html>