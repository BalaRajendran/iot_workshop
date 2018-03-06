<?php
$username = 'BalajiNandha';
$password = '@Itengineer007';
$db = new PDO( 'mysql:host=208.91.198.197:3306;dbname=farmingarms', $username, $password );
if(isset($_POST['bulk_delete_submit'])){
        $idArr = $_POST['checked_id'];
        foreach($idArr as $id){
    		$db->exec("delete  from  reg_py where id=".$id);
        }
       
        header("Location:http://www.farmingarms.com/infotechiotworkshop/register_collection.php");
    }
?>