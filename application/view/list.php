<!DOCTYPE html>
<html>
<head>
<title>Try it</title>
<style>
body {
    margin: 0;
    font-family: "avenir-roman";
    margin: auto;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 25%;
    background-color: #f1f1f1;
    position: fixed;
    height: 100%;
    overflow: auto;
}
.service{
  color: #ff9933;
}
.price{
   color: #b35900
}
.providerInformation{
  color: red;
}
.description{
  margin-right:45%;
  text-align: left;
}
li a {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
}

li a.active {
    background-color: #4CAF50;
    color: white;
}

li a:hover:not(.active) {
    background-color: #555;
    color: white;
}
.linkbutton{
  margin:auto;
}
</style>
</head>
<body>

<ul>
<?php
  foreach ($CategoryResult as $categoryname => $imagepath) {
    if ($categoryname == str_replace('_', ' ', $CategorySelected)){
      echo "<li><a class='active' href='#home'>$categoryname</a></li>";
    }
    else {
      echo "<li><a class href='#news'>$categoryname</a></li>";
    }
  }
?>
</ul>

<div style="margin-left:25%;padding:1px 16px;height:1000px;">
<?php
  $name = $string = str_replace('_', ' ', $CategorySelected);
  echo "<h1> $name</h1>" 
  ?>
  <?php
  foreach ($ListResult as $key => $display) {
    echo $display;
  }
?>
<div style='text-align:center;'>
<a class = "linkbutton" href= '../CS-135-Final-Project/' 
style='border-style:solid;width:250px;height:20px;background-color: #0066ff;color:white;padding:5px; boarder: 1px'>
<span class = "small"  > Home </span> </a>
</div>
  
</body>

</html>