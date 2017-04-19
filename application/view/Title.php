<?php
?>

<!-- call getCategory -->

<!DOCTYPE html>
  <head>
    <title>Creating a drop down</title>
  </head>

  <body>
    <pre> <?php print_r($_GET);?> </pre>

    <?php

    if ( isset( $_GET['submitted'] ) )
      handle_form( $_GET['categories'] );
    
    display_category( "categories" );

    ?>
  </body>
</html>