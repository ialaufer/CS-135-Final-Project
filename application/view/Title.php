<?php
?>

<!-- call getCategory -->

<!DOCTYPE html>
  <style>
  button {
    background-color: white;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
  }

  button:hover {
    opacity: 0.8;
  }
}

button:hover {
    opacity: 0.8;
}
.Heading{
  text-align: center;
  font-family: "avenir-roman";
}
.Centered{
  text-align: center;
}
  </style>>
  <head>
    <title>Claremont Yelp</title> 
  </head>
  

  <!--<link rel ="stylesheet" href="../../public/css/validate.css"> -->
  <link rel="stylesheet" href="/Applications/MAMP/htdocs/cs135/GITHUB_REPO/CS-135-Final-Project/public/css/startbootstrap-shop-homepage-gh-pages/css/bootstrap.min.css " >

   
  <body class="Heading" >
    <h1 class="Centered"> Claremont Yelp </h1>
    <form method="get">
    <table style='width:750px;'>
    <tr>
      <?php 
            $counter = 0;
            foreach ($CategoryResult as $categoryname => $imagepath) {
                $name = $string = str_replace(' ', '', $categoryname);
                if ($counter%4 == 0) { echo "<tr>"; }
                echo 
                  " <td align='center' valign='center'>
                          <button type='submit' name='$categoryname'>
                          <img src='$imagepath' name='$name' style='width:150px;height:150px;'>
                          </button>
                       <br/> $categoryname </td>";
                  $counter++;
                  if ($counter%4 == 0) { echo "</tr>"; } 
                    
            }
      ?>
    </tr>
    </table>
    </form>

    <form method="get">
    <button type="submit" style='width:750px;height:50px;background-color: #4CAF50;' name="add";>Add New Service</button>
    </form>>
    <pre> <?php print_r($_GET);?> </pre>

    <?php

//    if ( isset( $_GET['submitted'] ) )
//      handle_form( $_GET['categories'] );
//    display_category( "categories" );
//    ?>
  </body>
</html>