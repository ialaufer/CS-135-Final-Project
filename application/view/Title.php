<?php
?>

<!-- call getCategory -->

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Claremont's Yelp!</title>
  <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css" >
  <script src="../public/js/title.js"></script>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

  <script>
    $( document ).ready(function() {

      $("#button").on("click", play);
      getData();
    });
    </script>

</head>

<body class="container-fluid margin" >

  <div class="jumbotron" > 
        <div class="container">
          <h1 class="display-3">Claremont's Yelp!</h1>
        </div>
  </div>

<div id="placeholder" > </div>