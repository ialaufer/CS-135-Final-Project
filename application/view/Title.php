<?php
?>

<!-- call getCategory -->

<!DOCTYPE html>

  <head>
    <title>Claremont Yelp</title> 
  </head>
  
  <!--<link rel ="stylesheet" href="../../public/css/validate.css"> -->
  <link rel="stylesheet" href="/Applications/MAMP/htdocs/cs135/GITHUB_REPO/CS-135-Final-Project/startbootstrap-shop-homepage-gh-pages/css/bootstrap.css " >
   
  <body>
    <h1> Claremont Yelp </h1>
    
    <form method="post">
    <table>
    <tr>
      <?php 
            foreach ($CategoryResult as $categoryname => $imagepath) {
                echo " <td align='center' valign='center'>
                          <input type='image' src=$imagepath name=$categoryname style=width:150px;height:150px;
                          value='<?php echo $info[0]; ?>' >
                       <br /> $categoryname </td>
                ";
            }
      ?>

    </tr>
    </table>
    </form>
    <body>



    
    <pre> <?php print_r($_GET);?> </pre>

    <?php

//    if ( isset( $_GET['submitted'] ) )
//      handle_form( $_GET['categories'] );
//    display_category( "categories" );
//    ?>
  </body>
</html>