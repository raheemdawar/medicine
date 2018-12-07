<?php 
require_once "config.php";


$id= $_POST['id'];

$sql="DELETE FROM patient WHERE patient_id='$id'";
  
   $retval = $link->query($sql);
   $link->close();
 

 return  $retval;
   ?>