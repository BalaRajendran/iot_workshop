<?php  
//export.php  
$connect = mysqli_connect("208.91.198.197:3306", "BalajiNandha", "@Itengineer007", "farmingarms");
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM reg_py";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>
          <th >S.No</th>
          <th >Student Name</th>
          <th >Email</th>
        <th >Institution Name</th>
        <th >Department</th>
        <th >Designation</th>
          <th >Year</th>
        <th >Mobile Number</th>
        <th >Accomodation</th>
            </tr>
  ';
    $no= 1;
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
     <td>'.$no.'</td>  
                         <td>'.$row["name"].'</td>  
                         <td>'.$row["email"].'</td>  
                         <td>'.$row["ins"].'</td>  
       <td>'.$row["dept"].'</td>  
       <td>'.$row["re"].'</td>
       <td>'.$row["year"].'</td>
       <td>'.$row["pno"].'</td>
       <td>'.$row["acc"].'</td>
                    </tr>
   ';
   $no++;
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }
}
?>
       