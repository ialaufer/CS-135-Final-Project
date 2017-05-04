<!DOCTYPE html>
<html>
<head>
<title>Try it</title>
<style>
body {
    margin: 0;
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
</style>
</head>
<body>

<ul>
<?php
  foreach ($CategoryResult as $categoryname => $imagepath) {
    if ($categoryname == $CategorySelected) {
      echo "<li><a class='active' href='#home'>$categoryname</a></li>";
    }
    else {
      echo "<li><a href='#news'>$categoryname</a></li>";
    }
  }
?>
</ul>

<div style="margin-left:25%;padding:1px 16px;height:1000px;">
<?php
  $name = $string = str_replace('_', ' ', $CategorySelected);
  echo "<h1> $name </h1>" 
  ?>
  <?php
  foreach ($ListResult as $key => $display) {
    echo $display;
  }
?>

<a class = "linkbutton" href= '../CS-135-Final-Project/' style='width:250px;height:20px;background-color: #4CAF50;'>
<span class = "small"  > Home </span> </a>
</div>
  
</body>

</html>