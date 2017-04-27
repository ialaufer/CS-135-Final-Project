<?php
?>

<!-- call getCategory -->

<!DOCTYPE html>

  <head>
    <title>Claremont Yelp</title> 
  </head>
  <link rel ="stylesheet" href="../../public/css/validate.css">

  <body>
    <section id=right>
      <table>
         <?php
              $count = 0;
              foreach (CategoryResult::$cname as $key => $imagepath) {
              $count++;
              if ($count mod 2 = 0) {
                echo "<tr>
                        <td id=\"$key\" value=\"$key\">$key</td>
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
              foreach (CategoryResult::$cname as $key => $imagepath) {
              $count++;
              if ($count mod 2 = 1) {
                echo "<tr>
                        <td id=\"$key\" value=\"$key\">$key</td>
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