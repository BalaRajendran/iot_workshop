<?php include('config.php');    
session_start();
$error_message="";

//server side validation
// code for check server side validation
    if(empty($_SESSION['6_letters_code_1'] ) ||
        strcasecmp($_SESSION['6_letters_code_1'], $_POST['cap']) != 0)
    {  
         $error_message="Captcha Your entered is wrong,Please try again !!";
        
        
}
else
{
    $result = $conn->prepare("SELECT * FROM reg_py where email=?");

    // Bind the variables to the parameter as strings.
    $result->bind_param('s', $_POST['email']);

    // Execute the prepared statement.
    $result->execute();

    // Gets a result set from a prepared statement.
    $result = $result->get_result();

    if($result->num_rows > 0)
    {
        $error_message = "This Email Already exist";
    }

    elseif(!preg_match('/^[7-9]{1}[0-9]{9}$/', $_POST['pno']))
    {
      $error_message = 'Invalid Phone Number!';
    }
    else
    {
     if ($data=$conn->prepare("INSERT INTO reg_py (name,email,ins,dept,re,year,pno) VALUES(?,?,?,?,?,?,?)"))
     {
         // Bind the variables to the parameter as strings. 
             $data->bind_param("sssssss", $_POST['name'],$_POST['email'],$_POST['ins'],$_POST['dept'],$_POST['re'],$_POST['year'],$_POST['pno']);
 
             // Execute the prepared statement.
             $data->execute();
    $name=$_POST['name'];
    $email=$_POST['email'];
    $to      = $email;
    $subject = ' M.Kumarasamy college of Engineering';
    $message = '<html><body>';
    $message.="<h3>Python Workshop, FEBRUARY 2018</h3>";
   $message.="<center><img src='http://www.farmingarms.com/infotechpythonworkshop/brochure.jpeg' height='600' width='600' alt='Brochure' /></center>";
         $message.="<p>Dear ".$name.":"."<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thanks For Registering.We will send the confirmation two days before the Workshop.
        <br/><center>Thanking You</center>
        <br/><h3>For Any query Contact Our Co ordinator<br> K.Deepak: 9566719934<br>J.MohammedSameeruddin: 7639868962</h3>";
         $message .= '</body></html>';
    $headers = 'From:balajirajendran@farmingarms.com' . "\r\n" .  
    'Reply-To:balajirajendran@farmingarms.com' . "\r\n" .       
    'X-Mailer: PHP/' . phpversion();
     $headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
if(mail($to, $subject, $message, $headers))
{  
}
//       $name=$_POST['name'];
//     $email=$_POST['email'];
//     $ins=$_POST['ins'];
//     $dept=$_POST['dept'];
//     $re=$_POST['re'];
//     $year=$_POST['year'];
//     $pno=$_POST['pno'];    
//     $acc=$_POST['acc'];
//         $to      ="karurbalamathi@gmail.com";
//          $to1      ="sudharsansudha45@gmail.com";
//          $to3      ="sanesammu@gmail.com";
//          $to4      ="padminidevib.it@mkce.ac.in";
//          $to2      ="deepakkalimuthu@gmail.com";
//     $subject = 'Students Registration Details';
//         $message="Workshop Registration Students details:\n\n\nStudent Name :".$name."\nEmail-id : ".$email."\nInstitution Name : ".$ins."\nDepartment : ".$dept."\nDesingnation : ".$re."\nYear : ".$year."\nPhone Number : ".$pno."\nAccommodation : ".$acc."\n\n For More Information About Registers the  Students Register database on this link http://www.farmingarms.com/infotechpythonworkshop/register_collection.php";
//     $headers = 'From: balajirajendran@farmingarms.com' . "\r\n" .  
//     'Reply-To: balajirajendran@farmingarms.com' . "\r\n" .       
//     'X-Mailer: PHP/' . phpversion();
// if(mail($to, $subject, $message, $headers))
// {
// }
// if(mail($to1, $subject, $message, $headers))
// {
// }   
//          if(mail($to3, $subject, $message, $headers))
// {
// }   
//          if(mail($to2, $subject, $message, $headers))
// {
// }   
             $data->close();
		 $error_message = 'Registration Successfull!We send confirmation message!';
		  header("location: index.php");
         }
         else
         {
              $error_message="Data Filed invalid";
         }
    }
}
if($error_message !="")
{
    $_SESSION['err']=$error_message;
     header("location: index.php");
}
?>