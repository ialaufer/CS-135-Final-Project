<?php 
require "../model/model.php";
session_start(); 
?>

<!DOCTYPE html>


<html lang="en">

<head>
<title>Add a new service:</title>
</head>


<body>

<form name="newservice" method="post">
    <script src="public/js/validate.js"></script>
    <h2>Provider Info</h2>        
        <legend for="name">Name
        <input type="text" name="name" value="" onBlur="validateField(this)" id="name"><span class='info'></span></legend>
        <legend for="address">Address
        <input type="text" name="address" value="" onBlur="validateField(this)" id="address"><span class='info'></span></legend>
        
        <h3>Contact information</h3>
        <legend for="email">Email
        <input type="text" name="email" id="email" value="" onBlur="validateField(this)"><span class='info'></span></legend>
        <legend for="phone">Phone
        <input type="text" name="phone" id="phone" value="" onBlur="validateField(this)"><span class='info'></span></legend>

    <h2>Service information</h2>
        <legend for="servicename">Name of service
        <input type="text" name="servicename" id="servicename" value="" <span class='info'></span></legend>
        <legend for="description">Description
        <input type="text" name="description" id="description" value="" <span class='info'></span></legend>
        <select>
            <option value="arts">Arts and Entertainment</option>
            <option value="beauty">Beauty and Cosmetology</option>
            <option value="health">Health and Medical</option>
            <option value="event">Event Planning</option>
            <option value="food">Food Services</option>
            <option value="home">Home Services</option>
            <option value="professional">Professional Services</option>
            <option value="religious">Religious Services</option>
            <option value="misc">Miscellaneous</option>
            <option value="audi" selected>Select a category</option>
        </select>
        <legend for="price">Rates
        <input type="text" name="price" id="price" value="" <span class='info'></span></legend>
        <p><input type="button" value="Submit request" onBlur="addnewservice()"/><span class='info'></span></p>
        <p><input type="reset"></p>
  
        
    </form></fieldset>


<p><a href="../view/index.php">Browse other services!</a></p>

</body>
</html>