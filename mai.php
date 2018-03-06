<?php 
//Connect to database

	mysql_connect("208.91.198.197:3306","BalajiNandha","@Itengineer007") or die(mysql_error());
	mysql_select_db("farmingarms") or die(mysql_error());
$sql = "SELECT email FROM user";
	$res = mysql_query($sql) or die(mysql_error());
	while( $row = mysql_fetch_assoc($res) )
	{
	 $area = $row['email']. ", ";  
			
	// read the list of emails from the file.
	$email_list = $area;
	
	// count how many emails there are.
	$total_emails = count($email_list);
	
	// go through the list and trim off the newline character.
	for ($counter=0; $counter<$total_emails; $counter++) {
   $email_list[$counter] = trim($email_list[$counter]);
   }
 
	$to = $email_list;
 
	echo $to;
	
	$subject = 'M.KUMARASAMY COLLEGE OF ENGINEERING';
	$message=" M.KUMARASAMY COLLEGE OF ENGINEERING,KARUR";
	$headers = 'From: balajirajendran@farmingarms.com' . "\r\n" .  
    'Reply-To: balajirajendran@farmingarms.com' . "\r\n" .       
    'X-Mailer: PHP/' . phpversion();

if(mail($to, $subject, $message, $headers))
{
}  }
?>