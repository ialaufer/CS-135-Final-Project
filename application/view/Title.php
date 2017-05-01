<?php
?>

<!-- call getCategory -->

<!DOCTYPE html>

  <head>
    <title>Claremont Yelp</title> 
  </head>
  
  <link rel ="stylesheet" href="../../public/css/bootstrap.css">



<!--   <body>
    <h1> Claremont Yelp </h1>
   <section id=right>
      <table>
         <?php
            //   $count = 0;
            //  foreach ($CategoryResult as $categoryname => $imagepath) {
            //   $count++;
            //   if ($count % 2 == 0) {
            //     echo "<tr>
            //             <td id=\"$categoryname\" value=\"$categoryname\">$categoryname</td>
            //           </tr>";
            //   }
            // }
         ?>
        </table>
    </section>
    <section id= left>
    <table>
         <?php
            //   $count = 0;
            //   foreach ($CategoryResult as $categoryname => $imagepath) {
            //   $count++;
            //   if ($count % 2 == 1) {
            //     echo "<tr>
            //             <td id=\"$categoryname\" value=\"$categoryname\">$categoryname</td>
            //           </tr>";
            //   }
            // }
         ?>
        </table>   
    </section> -->

   

    <form method="post">
    <table>
    <tr>


      <?php 
            foreach ($CategoryResult as $categoryname => $imagepath) {
                echo " <td align='center' valign='center'>
                          <input type='image' src=$imagepath name=$categoryname value='<?php echo $info[0]; ?>' >
                       <br /> Caption text centered under the image. </td>
                ";
            }
      ?>


<!--     <td align="center" valign="center">
     <?php 
            // foreach ($CategoryResult as $categoryname => $imagepath) {
            //     echo "<img src=$imagepath alt=$categoryname name= style='width:128px;height:128px;''>";
            // }
      ?>
    <br />
    Caption text centered under the image.
    </td> -->

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