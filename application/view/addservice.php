<?php 
?>

<!DOCTYPE html>
<style>
input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit], input[type=reset]{
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 12px;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
</style>

<html lang="en">

<head>
<title>Add a new service:</title>
</head>


<body>

<div class="container">
<form name="newservice" method="post">
    <script src="public/js/validate.js"></script>
    <h2>Provider Info</h2>        
        <legend for="name">Name
        <input type="text" name="name" value="" onBlur="validateField(this)" id="name"><span class='info'></span></legend>
        <legend for="address">Address
        <input type="text" name="address" value="" onBlur="validateField(this)" id="address"><span class='info'></span></legend>
        <legend for="email">Email
        <input type="text" name="email" id="email" value="" onBlur="validateField(this)"><span class='info'></span></legend>
        <legend for="phone">Phone
        <input type="text" name="phone" id="phone" value="" onBlur="validateField(this)"><span class='info'></span></legend>

    <h2>Service information</h2>
        <legend for="servicename">Name of service
        <input type="text" name="servicename" id="servicename" value="" <span class='info'>
        </span></legend>
        <legend for="description">Description
        <textarea id="subject" name="description" placeholder="Describe your service.." style="height:200px">
        </textarea>
        <legend for="description">Category
        <select>
            <option name="category" value="1">Arts and Entertainment</option>
            <option name="category" value="2">Beauty and Cosmetology</option>
            <option name="category" value="3">Health and Medical</option>
            <option name="category" value="4">Event Planning</option>
            <option name="category" value="5">Food Services</option>
            <option name="category" value="6">Home Services</option>
            <option name="category" value="7">Professional Services</option>
            <option name="category" value="8">Religious Services</option>
            <option name="category" value="9">Miscellaneous</option>
            <option name="category" value="0" selected>Select a category</option>
        </select>
        </legend>
        <legend for="price">Price
        <input type="text" name="price" id="price" value="" <span class='info'></span></legend>
        <p><input type="submit" value="Submit request" onBlur="addnewservice()"><span class='info'></span></p>
        <p><input type="reset"></p>
  
        
    </form></div>


<a class = "linkbutton" href= '../CS-135-Final-Project/' style='width:250px;height:20px;background-color: #4CAF50;'>
<span class = "small" > Browse Other Services </span> </a>

</body>
</html>