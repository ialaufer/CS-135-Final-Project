<?php 
?>

<!DOCTYPE html>


<html lang="en">
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

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
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
<script>
function sendEmail() {
    window.open('mailto:test@example.com');
}
</script>
<body>
<div class="container">
<form name="checkout" method="post">
    <script src="public/js/validate.js"></script>
    <h1>Book Service</h1>
    <p>You are going to book: 
    <?php echo $service?>
    </p>
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
        <p><input type="button" value="Submit request" onBlur="sendEmail()"/><span class='info'></span></p>
        <p><input type="reset"></p>
  
        
    </form></div>


<a class = "linkbutton" href= '../CS-135-Final-Project/' style='width:250px;height:20px;background-color: #4CAF50;'>
<span class = "small" > Browse More Services </span> </a>

</body>
</html>