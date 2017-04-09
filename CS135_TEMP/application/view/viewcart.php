<?php 
session_start();

?>
<html>
  <head></head>

  <body>
   
    <form method='post'>
      <table>
          <tr> <th>Cookie</th> <th>Quantity</th> </tr>
          <?php 
          foreach ($shoppingCart as $variety=>$quantity) {
          		echo "<tr >
                <td>$variety</td>
                <td>$quantity</td>
                </tr>";
           }
           ?>
      </table>
    </form>

  </body>
</html>