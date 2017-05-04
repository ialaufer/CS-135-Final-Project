<?php
?>

<!-- call getCategory -->

<!DOCTYPE html>

  <head>
    <title>Claremont Yelp</title> 
  </head>
  

  <!--<link rel ="stylesheet" href="../../public/css/validate.css"> -->
  <link rel="stylesheet" href="/Applications/MAMP/htdocs/cs135/GITHUB_REPO/CS-135-Final-Project/startbootstrap-shop-homepage-gh-pages/css/shop-homepage.css " >

   
  <body>
    <h1> Claremont Yelp </h1>
    
    <form method="get">
    <table style='width:750px;'>
    <tr>
      <?php 

            foreach ($CategoryResult as $categoryname => $imagepath) {
                $name = $string = str_replace(' ', '', $categoryname);
                echo " <td align='center' valign='center'>
                          <button type='submit' name='$categoryname' >
                          <img src='$imagepath' name='$name' style='width:150px;height:150px;'>
                          </button>
                       <br/> $categoryname </td>
                ";
            }
      ?>

    </tr>
    </table>
    </form>


    
    <pre> <?php print_r($_GET);?> </pre>

    <?php

//    if ( isset( $_GET['submitted'] ) )
//      handle_form( $_GET['categories'] );
//    display_category( "categories" );
//    ?>
  </body>
</html>