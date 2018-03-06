<?php
// Multiple recipients
$to = 'karurbalamathi@gmail.com,karurbalamathi@gmail.com,balajir.16bit3013@mkce.ac.in'; // note the comma

// Subject
$subject = 'Birthday Reminders for August';

// Message
$message = '
<html>
<head>
  <title>Birthday Reminders for August</title>
</head>
<body>
  <p>Here are the birthdays upcoming in August!</p>
  <table>
    <tr>
      <th>Person</th><th>Day</th><th>Month</th><th>Year</th>
    </tr>
    <tr>
      <td>Johny</td><td>10th</td><td>August</td><td>1970</td>
    </tr>
    <tr>
      <td>Sally</td><td>17th</td><td>August</td><td>1973</td>
    </tr>
  </table>
</body>
</html>
';

// To send HTML mail, the Content-type header must be set
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

// Additional headers
$headers = 'From: balajirajendran@farmingarms.com' . "\r\n" .  
    'Reply-To: balajirajendran@farmingarms.com' . "\r\n" .       
    'X-Mailer: PHP/' . phpversion();

// Mail it
mail($to, $subject, $message,$headers);
?>