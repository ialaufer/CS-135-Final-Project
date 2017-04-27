<?php
function sendEmail($to, $name, $name, $school, $phone, $email)
    $subject = "Reminder Email";

    $message = "
        <html>
          <head> <title>HTML email</title> </head>
          <body>
            <p>This email contains HTML Tags!</p>
            <table>
              <tr>
                <th>Name</th>
                <th>School</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Note</th>
              </tr>
              <tr>
                <td>$name</td>
                <td>$school</td>
                <td>$phone</td>
                <td>$email</td>
                <td>$note</td>
              </tr>
            </table>
          </body>
        </html>
    ";

  // Always set content-type when sending HTML email
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

  // More headers
  $headers .= 'From:' $email . "\r\n";
  $headers .= 'Cc: claremontyelp@gmail.com' . "\r\n";

  mail($to,$subject,$message,$headers);
?>
