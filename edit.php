<?php 
require_once "config.php";
$id =  $_POST['id'];
$sql1 ="SELECT * FROM patient  WHERE patient_id='$id'";
  $fname="";
  $lname="";

  $age="";
  $gender="";
  $dob="";
  $address="";
  $postcode =  "";
  $city ="";
  $hcnumber ="";
  $Acdate="";
  $actime="";
  $activator="";
 
$Referral = "";

$Referral2 = "";

$reptalhospital = "";

$calltaken = "";

$callsign =  "";

$incidentnumber = "";

$eta = "";
$ecgtime ="";

$Rate =  "";

$Rhythm ="";

$QRS ="";

$st = "";

$t = "";

$ecgfinding =  "";



$Detail = "";


$complain = "";

$history = "";

$drug = "";

$doseasp = "";

$dosetic = "";

$dosemor = "";

$issue = "";

$accepeted = "";

$cathlab = "";

   $patentRecord = $link->query($sql1);
   while( $row = $patentRecord->fetch_assoc())
{
    $fname= $row['fname'];
    $lname= $row['lname'];
 
    $age= $row['age'] ;
    $gender=  $row['gender'];
    $dob=$row['dob'] ;
    $address= $row['address'] ;
    $postcode = $row['post_code'];
  $city =$row['city'];
  $hcnumber =$row['hc_num'];
}
$sql2 ="SELECT * FROM ref_info  WHERE patient_id='$id'";
$refrecord = $link->query($sql2);
while( $row = $refrecord->fetch_assoc())
{
    $Acdate=$row['date'];
    $actime=$row['time'];
    $activator=$row['activator'];
}
$sql3 ="SELECT * FROM admission  WHERE patient_id='$id'";
$admissionRecord = $link->query($sql3);
while( $row = $admissionRecord->fetch_assoc())
{
    $Referral =$row['ref1'];

$Referral2 = $row['ref2'];

$reptalhospital = $row['rept_hosp'];

$calltaken = $row['call_taken'];

$callsign =  $row['call_sign'];

$incidentnumber = $row['incident_num'];

$eta = $row['eta'];
}
$sql4 ="SELECT * FROM ecg  WHERE patient_id='$id'";
$ecgRecord = $link->query($sql4);
while( $row = $ecgRecord->fetch_assoc())
{
    $ecgtime =$row['ecg_time'];
    $Rate =  $row['rate'];
    $Rhythm =$row['rythum'];
    $QRS =$row['qrs'];
    $st = $row['st'];
    $t = $row['tw'];
    $ecgfinding =  $row['other'];
   $Detail = $row['ecg_detail'];

}
$sql5 ="SELECT * FROM medical  WHERE patient_id='$id'";
$medicineRecord = $link->query($sql5);
while( $row = $medicineRecord->fetch_assoc())
{
    $complain = $row['complain'];

$history = $row['history'];
$doseasp = $row['doseasp'];
$dosetic = $row['dosetic'];
$dosemor = $row['dosemor'];
$issue = $row['comment'];
$accepeted =$row['accept'];
}
$link->close();
 ?> 

 
 <!DOCTYPE html>
 <html lang="en">
<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>PrimaryPCI Refferral Form</title>
   <!-- plugins:css -->
   <link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
   <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
   <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
   <!-- endinject -->
   <!-- plugin css for this page -->
   <!-- End plugin css for this page -->
   <!-- inject:css -->
   <link rel="stylesheet" href="css/style.css">
   <!-- endinject -->
   <link rel="shortcut icon" href="heartbeat.png"/>
  
 </head>
 
 <body class="horizontal-menu">
     <div class="container-scroller">
         <!-- partial:../../partials/_navbar.html -->
         <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
             <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                 <a class="navbar-brand brand-logo" href=""><img style="width:25px;height:25px;" src="heartbeat.png" alt="logo" /></a>
                 <a class="navbar-brand brand-logo-mini" href=""><img style="width:50px;height:25px;" src="heartbeat.png" alt="logo" /></a>
             </div>
             <div class="navbar-menu-wrapper d-flex align-items-center">
 
 
                 <ul class="navbar-nav navbar-nav-right">
                     <li class="nav-item nav-profile">
                         <a class="nav-link">
                             <div class="nav-profile-text">
                              
                                 <p class="mb-0">Admin</p>
                             </div>
 
                         </a>
                     </li>
 
                     <li class="nav-item nav-logout d-none d-lg-block">
                         <a class="nav-link" href="/Login/logout">
                             Logout
                             <i class="mdi mdi-power"></i>
                         </a>
                     </li>
                 </ul>
                 <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                     <span class="mdi mdi-menu"></span>
                 </button>
             </div>
         </nav>
         <!-- partial -->
         <div class="container-fluid page-body-wrapper">
 
 
 
 <div class="main-panel">
     <div class="content-wrapper">
         <div class="page-header">
             <h3 class="page-title">
                 PrimaryPCI Refferral Form
             </h3>
             <nav aria-label="breadcrumb">
                 <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Add Record</li>
                 </ol>
             </nav>
         </div>
         <div class="row">
             <div class="col-12 grid-margin">
                 <div class="card">
                     <div class="card-body">
                         <h4 class="card-title">Patient Record Wizard</h4>
                         <form id="example-form" action="save.php" method="POST">
                         <input type="hidden" name="id" value="<?php echo $id;?>">
                             <div>
                                 <h3>pPCI Infromation</h3>
                                 <section>
                                     <h3>pPCI Infromation</h3>
                                     
                                     <div class="form-group">
                                         <label for="userName">Date *</label>
                                         <div id="datepicker-popup" class="input-group date datepicker">
                                             <input type="text" id="ppcidate" value="<?php echo $Acdate;?>" name="ppcidate" class="form-control">
                                             <span class="input-group-addon input-group-append border-left">
                                                 <span class="mdi mdi-calendar input-group-text"></span>
                                             </span>
                                         </div>
                                     </div>
                                     <div class="form-group">
                                         <label for="password">pPCI Activator *</label>
                                         <select class="form-control form-control-lg" name="exampleFormControlSelect1" id="exampleFormControlSelect1">
                                            <?php
                                            echo  ' <option value="'.$activator.'">'.$activator.'</option>';
                                            ?>
                                         
                                            <option value="trudy">Trudy</option>
                                         <option value="rachel" >Rachel</option>
                                         <option value="caterina">Caterina</option>
                                         <option value="marry">Marry</option>
                                     </select>
                                     </div>
                                     <div class="form-group">
                                         <label for="confirm">Time Call Received *</label>
                                         <div class="input-group date" id="timepicker-example" data-target-input="nearest">
                                             <div class="input-group" data-target="#timepicker-example" data-toggle="datetimepicker">
                                                 <input type="text" id="timecallreceived" value="<?php echo $actime;?>" name="timecallreceived" class="form-control datetimepicker-input" data-target="#timepicker-example" />
                                                 <div class="input-group-addon input-group-append"><i class="mdi mdi-clock input-group-text"></i></div>
                                             </div>
                                         </div>
                                      
                                     </div>
                                 </section>
                                 <h3>Patient Information</h3>
                                 <section  style="overflow: auto;">
                                     <h3>Patient Information</h3>
                                     <div class="form-group">
                                         <label for="name">First name *</label>
                                         <input id="fname" name="fname" 
                                         value="<?php echo $fname;?>"
                                         
                                         
                                         type="text" class="required form-control">
                                     </div>
                                     <div class="form-group">
                                         <label for="surname">Last name *</label>
                                         <input id="lname" name="lname" value="<?php echo $lname;?>" type="text" class="required form-control">
                                     </div>
                                     <div class="form-group">
                                         <label for="email">Age *</label>
                                         <input id="age" name="age" value="<?php echo $age;?>" type="text" class="required email form-control">
                                     </div>
                                     <div class="form-group">
                                         <label for="dob">Date of Birth *</label>
                                         <div id="inline-datepicker" class="input-group date datepicker">
                                             <input type="text" value="<?php echo $dob;?>" name="dob" id="dob" class="form-control">
                                             <span class="input-group-addon input-group-append border-left">
                                                 <span class="mdi mdi-calendar input-group-text"></span>
                                             </span>
                                         </div>
                                     </div>
                                     <div class="form-group">
                                         <label for="address">Gender</label></br>
                                         <label class="checkbox-inline"><input  name="gender" type="radio" class="gender" value="male">Male</label>
                                         <label class="checkbox-inline"><input name="gender" type="radio" class="gender" value="female">Female</label>
                                        
                                     </div>
                                     <div class="form-group">
                                         <label for="address">Address</label>
                                         <input id="address" value="<?php echo $address;?>" name="address" type="text" class="form-control">
                                       
                                     </div>
                                     <div class="form-group">
                                             <label for="address">City</label>
                                             <input id="city" value="<?php echo $city;?>" name="city" type="text" class="form-control">
                                           
                                         </div>
                                         <div class="form-group">
                                                 <label for="address">Postal Code</label>
                                                 <input id="postalcode" value="<?php echo $postcode;?>" name="postcode" type="text" class="form-control">
                                               
                                             </div>
                                             <div class="form-group">
                                                 <label for="address">HC Number</label>
                                                 <input id="hcnumber" value="<?php echo $hcnumber;?>" name="hcnumber" type="text" class="form-control">
                                               
                                             </div>
                                             
                                                 
                                 </section>
                                 <h3>Refferral Information</h3>
                                 <section>
                                     <h3>Refferral Information</h3>
                                     
                                    
                                     <div class="form-group">
                                         <label for="password">Referral I  *</label>
                                         <select class="form-control form-control-lg" name="ref1" id="ref1">
                                         <?php
                                            echo  ' <option value="'.$Referral.'">'.$Referral.'</option>';
                                            ?>
                                         <option value="NIAS">NIAS</option>
                                         <option value="NAS">NAS</option>
                                         <option value="NACC">NACC</option>
                                         <option value="GP">GP</option>
                                     </select>
                                     </div>
                                     <div class="form-group">
                                             <label for="password">Referral II  *</label>
                                             <select class="form-control form-control-lg" name="ref2" id="ref2">
                                             <?php
                                            echo  ' <option value="'.$Referral2.'">'.$Referral2.'</option>';
                                            ?>
                                             <option value="ALT">ALT</option>
                                             <option value="CAUSEWAY">CAUSEWAY</option>
                                             <option value="SWAH ">SWAH</option>
                                             <option value="TCH">TCH</option>
                                             <option value="LETTERKENNY">LETTERKENNY</option>
                                         </select>
                                         </div>
                                         <div class="form-group">
                                                 <label for="name">Reptal Hospital *</label>
                                                 <input id="reptalhospitalname" value="<?php echo $reptalhospital;?>" name="reptalhospitalname" type="text" class="required form-control">
                                             </div>
                                 </section>
                                 <h3>Other Information</h3>
                                 <section style="overflow: scroll;">
                                     <h3>Other Information</h3>
                                   
                                         <div class="form-group">
                                                 <label for="name">Call Taken *</label>
                                                 <input id="calltaken" value="<?php echo $calltaken;?>" name="calltaken" type="text" class="required form-control">
                                             </div>
                                             <div class="form-group">
                                                     <label for="name">Call Sign *</label>
                                                     <input id="callsign" value="<?php echo $callsign;?>" name="callsign" type="text" class="required form-control">
                                                 </div>
                                                 <div class="form-group">
                                                         <label for="name">Incident Number *</label>
                                                         <input id="incidentnumber" value="<?php echo $incidentnumber;?>" name="incidentnumber" type="text" class="required form-control">
                                                     </div>
                                                     <div class="form-group">
                                                             <label for="name">ETA *</label>
                                                             <input id="eta" name="eta" value="<?php echo $eta;?>" type="text" class="required form-control">
                                                         </div>
                                 </section>
                                 <h3>ECG Information</h3>
                                 <section style="overflow: scroll;">
                                     <h3>ECG Information</h3>
                                   
                                         <div class="form-group">
                                                 <label for="name">ECG Time *</label>
                                                 <input id="ecgtime" value="<?php echo $ecgtime;?>" name="ecgtime" type="time" class="required form-control">
                                             </div>
                                             <h3>ECG Findings</h3>
                                            
                                     <div class="form-group">
                                         <label for="password">Rate *</label>
                                         <select class="form-control form-control-lg" name="ecgrate" id="ecgrate">
                                         <?php
                                            echo  ' <option value="'.$Rate.'">'.$Rate.'</option>';
                                            ?>
                                         <option value="Tachycardic ">Tachycardic </option>
                                         <option value="Bradycardic">Bradycardic</option>
                                         <option value="Normal">Normal</option>
                                         <option value="Unclear">Unclear</option>
                                     </select>
                                     </div>
                                     <div class="form-group">
                                         <label for="password">Rhythm *</label>
                                         <select class="form-control form-control-lg" name="ecgrhytm" id="ecgrhytm">
                                         <?php
                                            echo  ' <option value="'.$Rhythm.'">'.$Rhythm.'</option>';
                                            ?>
                                         <option value="Sinus">Sinus</option>
                                         <option value="Irregular">Irregular</option>
                                         <option value="Other">Other</option>
                                         <option value="Unclear">Unclear</option>
                                     </select>
                                     </div>
                                     <div class="form-group">
                                         <label for="password">QRS  *</label>
                                         <select class="form-control form-control-lg" name="ecgqrs" id="ecgqrs">
                                         <?php
                                            echo  ' <option value="'.$QRS.'">'.$QRS.'</option>';
                                            ?>
                                         <option value="Broad">Broad</option>
                                         <option value="NANarrow">Narrow</option>
                                         <option value="Unclear">Unclear</option>
                                        
                                     </select>
                                     </div>
                                     <div class="form-group">
                                         <label for="password">ST Segments  *</label>
                                         <select class="form-control form-control-lg" name="ecgsegments" id="ecgsegments">
                                         <?php
                                            echo  ' <option value="'.$st.'">'.$st.'</option>';
                                            ?>
                                         <option value="Raised">Raised</option>
                                         <option value="Normal">Normal</option>
                                         <option value="Depressed">Depressed</option>
                                         <option value="Unclear">Unclear</option>
                                     </select>
                                 </div>
                                     <div class="form-group">
                                         <label for="password">T Waves *</label>
                                         <select class="form-control form-control-lg" name="ecgwaves" id="ecgwaves">
                                         <?php
                                            echo  ' <option value="'.$t.'">'.$t.'</option>';
                                            ?>
                                         <option value="Normal">Normal</option>
                                         <option value="Inverted">Inverted</option>
                                         <option value="Peaked">Peaked</option>
                                         <option value="Unclear">Unclear</option>
                                     </select>
                                    
                                     
                                     </div>
                                     <div class="form-group">
                                         <label for="name">Additional Features *</label>
                                         <input id="additionalfeatures" value="<?php echo $ecgfinding;?>" name="additionalfeatures" type="text" class="required form-control">
                                     </div>
                                     <div class="form-group">
                                         <label for="name">ECG Image *</label>
                                         <input id="ecgimage" name="ecgimage" type="file" class="required form-control">
                                     </div>
                                     <div class="form-group">
                                         <label for="password">ECG Details  *</label>
                                         <select class="form-control form-control-lg" name="ecgdetails" id="ecgdetails">
                                         <?php
                                            echo  ' <option value="'.$Detail.'">'.$Detail.'</option>';
                                            ?>
                                         <option value="STEMI">STEMI</option>
                                         <option value="PPCI">PPCI</option>
                                         <option value="THROMBOLYSED">THROMBOLYSED</option>
                                         <option value="OTHER">OTHER</option>
                                     </select>
                                    
                                     
                                     </div>
                                 </section>
                                 <h3>Medical Conditions</h3>
                                 <section style="overflow: scroll;">
                                     <h3>Medical Conditions</h3>
                                   
                                         <div class="form-group">
                                                 <label for="name">Current Complain *</label>
                                                 <input id="currentcomplain" value="<?php echo $complain;?>" name="currentcomplain" type="text" class="required form-control">
                                             </div>
                                             <div class="form-group">
                                                     <label for="name">Medical History *</label>
                                                     <input id="medicalhistory"  value="<?php echo $history;?>" name="medicalhistory" type="text" class="required form-control">
                                                 </div>
                                                 <h3>Drugs</h3>
                                                 <div class="form-group">
                                                         <label for="name">Asprine * <input id="aspirine" type="checkbox" name="doseasp"></label>
                                                    
                                                        <input id="aspirineamount"  value="<?php echo $doseasp;?>" type="number" name="aspirineamount" step="10" placeholder="30-450" min="30" max="450"> 
                                                         
                                                     </div>
                                                     <div class="form-group">
                                                         <label for="name">Ticagrelor  * <input id="Ticagrelor" type="checkbox" name="doseasp"></label>
                                                         <input type="number" id="Ticagreloramount"  value="<?php echo $dosetic;?>" name="Ticagreloramount" step="10" placeholder="100-450" min="100" max="450">
                                                        
                                                     </div>
                                                     <div class="form-group">
                                                         <label for="name">Morphine  * <input id="Morphine" type="checkbox" name="doseasp"></label>
                                                         <input type="number"  value="<?php echo $dosemor;?>" id="Morphineamount" name="Morphineamount" step="5" placeholder="5-450" min="5" max="450">
                                                         
                                                     </div>
                                                     
                                 </section>
                                 <h3>Comments</h3>
                                 <section style="overflow: scroll;">
                                     <h3>Comments</h3>
                                   
                                         <div class="form-group">
                                                 <label for="name">Comments/Issue *</label>
                                                 <input id="commentsissue"  value="<?php echo $issue;?>" name="commentsissue" type="text" class="required form-control">
                                             </div>
                                             <div class="form-group">
                                                 <label for="address">Accept</label></br>
                                                 <label  class="checkbox-inline"><input name="accept" class="accept" type="radio" value="Yes">Yes</label>
                                                 <label class="checkbox-inline"><input name="accept" class="accept" type="radio" value="No">No</label>
                                                
                                             </div>
                                                 
                                 </section>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
 
     </div>
    
 </div>
 
 
 
 
 
         </div>
         <!-- page-body-wrapper ends -->
     </div>
    
     <!-- container-scroller -->
     <!-- plugins:js -->
 <script>
     var allowed=false;
     function checkifEmpty(value)
 {
     if(value!=""&&value.length>0)
     {
         return true;
     }
     return false;
 }
 function showError(id)
 {
     $(id).css({ "border-style": "solid"});
     $(id).css({ "border-color": "red"});
 }
 function showSuccess(id)
 {
     $(id).css({ "border-style": "solid"});
     $(id).css({ "border-color": "green"});
 }
 function val1()
 {
   var ppcidate = $("#ppcidate").val();
   var pciactivator=$("#exampleFormControlSelect1").val();
   var callreciedTime=$("#timecallreceived").val();
 if(checkifEmpty(ppcidate))
 {
     showSuccess("#ppcidate");
 if(checkifEmpty(pciactivator))
 {
     showSuccess("#exampleFormControlSelect1");
     if(checkifEmpty(callreciedTime))
     {
         showSuccess("#timecallreceived");
        return true;
     }else{
         showError("#timecallreceived"); 
     }
 }
     
 }else{
     showError("#ppcidate");
 }
 return false;
 }
 function val2()
 {
     var fname = $("#fname").val();
     var lname = $("#lname").val();
     var age = $("#age").val();
     var dob = $("#dob").val();
     var gender=$('.gender:checked').val();
     var address=$("#address").val();
     var city=$("#city").val();
     var postalcode=$("#postalcode").val();
     if(checkifEmpty(fname))
     {
         showSuccess("#fname");
         if(checkifEmpty(lname))
         {
 showSuccess("#lname");
 if(checkifEmpty(age))
 {
 showSuccess("#age");
 if(checkifEmpty(dob))
 {
 showSuccess("#dob");
 if(checkifEmpty(gender))
 {
 if(checkifEmpty(address))
 {
 showSuccess("#address");
 if(checkifEmpty(city))
 {
 showError("#city");
 return true;
 }else{
     showError("#city");
 }
 }else{
     showError("#address");
 }
 }
 
 }else{
     showError("#dob");
 }
 }else{
     showError("#age");
 }
         }else{
             showError("#lname");
         }
     }else{
         showError("#fname");
     }
  return false;
 }
 
 function val3()
 {
   
     var reptalhospitalname=$("#reptalhospitalname").val();
     if(checkifEmpty(reptalhospitalname))
     {
 showSuccess("#reptalhospitalname");
 return true;
     }else{
         showError("#reptalhospitalname");
     }
     return false;
 }
 function val4()
 {
     var callsign=$("#callsign").val();
     var calltaken=$("#calltaken").val();
     var incidentnumber=$("#incidentnumber").val();
     var eta=$("#eta").val();
     if(checkifEmpty(calltaken))
     {
         showSuccess("#calltaken");
         if(checkifEmpty(callsign))
         {
 showSuccess("#callsign");
 if(checkifEmpty(incidentnumber))
 {
 showSuccess("#incidentnumber");
 if(checkifEmpty(eta))
 {
     showSuccess("#eta");
     return true;
 }else
 {
     showError("#eta");
 }
 }else{
     showError("#incidentnumber");
 }
         }else{
             showError("#callsign");
         }
     }else{
         showError("#calltaken");
     }
 return false;
 }
 function val5()
 {
 var ecgtime=$("#ecgtime").val();
 var additionalfeatures=$("#additionalfeatures").val();
 var ecgimage=$("#ecgimage").val();
 if(checkifEmpty(ecgtime))
 {
     showSuccess("#ecgtime");
     if(checkifEmpty(additionalfeatures))
     {
         showSuccess("#additionalfeatures");
         if(checkifEmpty(ecgimage))
         {
             showSuccess("#ecgimage");
             return true;
         }else{
             showError("#ecgimage");
         }
     }else{
         showError("#additionalfeatures");
     }
 }else{
     showError("#ecgtime");
 }
 return false;
 }
 function val6()
 {
     var currentcomplain=$("#currentcomplain").val();
     var medicalhistory=$("#medicalhistory").val();
     var isAsprine=$('#aspirine').is(":checked");
     var isTicagrelor=$('#Ticagrelor').is(":checked");
     var isMorphine=$('#Morphine').is(":checked");
     var aspirineamount=$("#aspirineamount").val();
     var Ticagreloramount=$("#Ticagreloramount").val();
     var Morphineamount=$("#Morphineamount").val();
  
     if(checkifEmpty(currentcomplain))
     {
         if(checkifEmpty(medicalhistory))
         {
             showSuccess("#medicalhistory");
             return true;
 
         }else{
             showError("#medicalhistory");
         }
         showSuccess("#currentcomplain");
     }else{
         showError("#currentcomplain");
     }
     return false;
     
 }
 
 function val7()
 {
 var commentsissue=$("#commentsissue").val();
 var accepted=$("input[name=accept]:checked").val();
 if(checkifEmpty(commentsissue))
 {
     showSuccess("#commentsissue");
     $("#example-form").submit();
 
 }else{
     showError("#commentsissue");
 }
 
 return false;
 }
 
 </script>
 
 
 
     <script src="vendors/js/vendor.bundle.base.js"></script>
     <script src="vendors/js/vendor.bundle.addons.js"></script>
     <!-- endinject -->
     <!-- inject:js -->
     <script src="js/off-canvas.js"></script>
     <script src="js/hoverable-collapse.js"></script>
     <script src="js/misc.js"></script>
     <script src="js/settings.js"></script>
     <script src="js/todolist.js"></script>
     <!-- endinject -->
     <!-- Custom js for this page-->
     <script src="js/data-table.js"></script>
     <script src="js/wizard.js"></script>
     <script src="js/formpickers.js"></script>
     <!-- End custom js for this page-->
 </body>
 
 
 </html>
 