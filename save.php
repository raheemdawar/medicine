<?php 
require_once "config.php";


$id= $_POST['id'];

$sql="DELETE FROM patient WHERE patient_id='$id'";
  
   $retval = $link->query($sql);

$adate =  $_POST['ppcidate'];
$bdate= strtotime($adate);
$date=date('Y-m-d',$bdate);
$activator = $_POST['exampleFormControlSelect1'];

$time = $_POST['timecallreceived'];


$fname = $_POST['fname'];

$lname =  $_POST['lname'];

$age = $_POST['age'];

$dob2 = $_POST['dob'];
$dob3= strtotime($dob2);
$dob=date('Y-m-d',$dob3);


$gender = $_POST['gender'];

$address = $_POST['address'];

$postcode =  $_POST['postcode'];

$city = $_POST['city'];

$hcnumber = $_POST['hcnumber'];


$Referral = $_POST['ref1'];

$Referral2 = $_POST['ref2'];

$reptalhospital = $_POST['reptalhospitalname'];

$calltaken = $_POST['calltaken'];

$callsign =  $_POST['callsign'];

$incidentnumber = $_POST['incidentnumber'];

$eta = $_POST['eta'];


$ecgtime = $_POST['ecgtime'];

$Rate =  $_POST['ecgrate'];

$Rhythm = $_POST['ecgrhytm'];

$QRS = $_POST['ecgqrs'];

$st = $_POST['ecgsegments'];

$t = $_POST['ecgwaves'];

$ecgfinding =  $_POST['additionalfeatures'];

$ecgimg = $_POST['ecgimage'];

$Detail = $_POST['ecgdetails'];


$complain = $_POST['currentcomplain'];

$history = $_POST['medicalhistory'];

$drug = "";

$doseasp = $_POST['aspirineamount'];

$dosetic =  $_POST['Ticagreloramount'];

$dosemor = $_POST['Morphineamount'];

$issue = $_POST['commentsissue'];

$accepeted = $_POST['accept'];

$cathlab = "";


$sql1 = "INSERT into patient(fname, lname,age,dob,gender,address, city, post_code,hc_num) VALUES ('$fname','$lname', '$age','$dob','$gender','$address','$city',      '$postcode','$hcnumber');" ;


if($link ->query($sql1)=== TRUE)
{
	$id=mysqli_insert_id($link);
	$sql = "INSERT into ref_info(date, activator, time,patient_id) VALUES ('$date','$activator', '$time','$id');";
	 
	$sql .="INSERT into admission(patient_id,ref1,ref2,call_taken,call_sign,rept_hosp,incident_num,eta) VALUES ('$id','$Referral','$Referral2', '$calltaken','$callsign','$reptalhospital','$incidentnumber','$eta');";
	$sql .="INSERT into ecg(patient_id,ecg_time,rate,rythum,qrs,st,tw,other,ecg_img,ecg_detail) VALUES ('$id','$ecgtime','$Rate', '$Rhythm','$QRS','$st','$t','$ecgfinding','$ecgimg','$Detail');";
	
		$sql .="INSERT into medical(patient_id,complain,history,drug,doseasp,dosetic,dosemor,comment,cathlab,accept) VALUES ('$id','$complain','$history', '$drug','$doseasp','$dosetic','$dosemor','$issue','$cathlab','$accepeted');";
		//mysql_query($sql);
	
	
	 

	 $link ->multi_query($sql);
	 $_SESSION['success']= "record added";
	header('location: dashboard.php'); 
	 echo "record added" ;
}
else
{
	echo "data not updates, error".$sql. "<br/>". $link->error;
}
 


   ?>