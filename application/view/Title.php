<?php
?>

<!-- call getCategory -->

<!DOCTYPE html>

  <head>
    <title>Claremont Yelp</title> 
  </head>
  <link rel ="stylesheet" href="../../public/css/validate.css">

  <body>
    <h1> Claremont Yelp </h1>
    <section id=right>
      <table>
         <?php
              $count = 0;
              foreach ($CategoryResult as $categoryname => $imagepath) {
              $count++;
              if ($count % 2 == 0) {
                echo "<tr>
                        <td id=\"$categoryname\" value=\"$categoryname\">$categoryname</td>
                      </tr>";
              }
            }
         ?>
        </table>
    </section>
    <section id= left>
    <table>
         <?php
              $count = 0;
              foreach ($CategoryResult as $categoryname => $imagepath) {
              $count++;
              if ($count % 2 == 1) {
                echo "<tr>
                        <td id=\"$categoryname\" value=\"$categoryname\">$categoryname</td>
                      </tr>";
              }
            }
         ?>
        </table>   
    </section>
    <pre> <?php print_r($_GET);?> </pre>

    <?php

//    if ( isset( $_GET['submitted'] ) )
//      handle_form( $_GET['categories'] );
//    display_category( "categories" );
//    ?>
  </body>
</html>