
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
  margin: auto;
}
  </style>
  <head>
    <title>Claremont's Yelp!</title> 
  </head>
  

  <!--<link rel ="stylesheet" href="../../public/css/validate.css"> -->
  <link rel="stylesheet" href="/Applications/MAMP/htdocs/cs135/GITHUB_REPO/CS-135-Final-Project/public/css/startbootstrap-shop-homepage-gh-pages/css/bootstrap.min.css " >

   
  <body class="Heading" >
    <h1 class="Centered"> Claremont's Yelp! </h1>
    <div class="Centered">
    <form method="get">
    <table class="Centered" centered style='width:750px;'>
    <tr>
      <?php 
            $counter = 0;
            foreach ($CategoryResult as $categoryname => $imagepath) {
                $name = $string = str_replace(' ', '', $categoryname);
                if ($counter%3 == 0) { echo "<tr>"; }
                echo 
                  " <td align='center' valign='center'>
                          <button type='submit' name='$categoryname'>
                          <img src='$imagepath' name='$name' style='width:150px;height:150px;'>
                          </button>
                       <br/> $categoryname </td>";
                  $counter++;
                  if ($counter%3 == 0) { echo "</tr>"; } 
                    
            }
      ?>
    </tr>
    </table>
    </form>
  </div>
    <form method="get">
    <button type="submit" style='width:750px;font-family:avenir-roman;height:50px;background-color: #4CAF50;' name="add";>Add New Service</button>
    </form>
  </body>
</html>