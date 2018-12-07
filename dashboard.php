<?php 
require_once "config.php";
$sql = 'SELECT * FROM patient ';
  
   $retval = $link->query($sql);
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
<!--

alert js liabrary

-->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
   
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



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
                        <a class="nav-link" href="logout.php">
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
                Home
            </h3>
          
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Patient Records</li>
                </ol>
            </nav>
        </div>
        <div class="card">
            <a href="add.php" class="btn btn-primary btn-fw">Add Record</a>

        </div>
        <div class="card">
           <div class="card-body">
                <h4 class="card-title">Patient Records</h4>

                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table id="order-listing" class="table">
                                <thead>
                                    <tr>
                                        <th>ID #</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Age</th>
                                        <th>Gender</th>
                                        <th>DOB</th>
                                        <th>Address</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php
while( $row = $retval->fetch_assoc())
{
    if (!empty($row['fname']))
    {
        $id=$row['patient_id'];
                                   echo "<tr>";
                                   echo "<td>" . $row['patient_id'] . "</td>";
                                   echo "<td>" . $row['fname'] . "</td>";
                                   echo "<td>" . $row['lname'] . "</td>";
                                   echo "<td>" . $row['age'] . "</td>";
                                   echo "<td>" . $row['gender'] . "</td>";
                                   echo "<td>" . $row['dob'] . "</td>";
                                   echo "<td>" . $row['address'] . "</td>";
                                     echo'<td>
                                     <form method="post" action="edit.php">
                                     <input type="hidden" name="id" value="'.$id.'">
                                     <input type="submit"  class="btn btn-outline-warning" value="Edit">
                                     </form>  
                                            
                                            <button onclick="showDialog('.
                                           $id .')" class="btn btn-outline-danger">Delete</button>
                                        
                                        </td>';
                                        echo "</tr>";
    }
}
                                    ?>
                                    
                                
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->
    <footer class="footer">
       
    </footer>
    <!-- partial -->
</div>


         

        </div>
        <!-- page-body-wrapper ends -->
    </div>
<script>
function showDialog(patient_id)
{
    swal({
  title: "Are you sure you want to delete the record?",
  text: "Once deleted, you will not be able to recover this Record !",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    swal("Poof! Record  has been deleted!", {
      icon: "success",
    });
    $.ajax({
                type: "POST",
                url: "delete.php" ,
                data: { id: patient_id },
                success : function(data) { 

location.reload();
                    // here is the code that will run on client side after running clear.php on server

                    // function below reloads current page
                   // location.reload();

                }
            });


  } else {
    swal("Record is Safe!", {
      icon: "success",
    });
  }
});
}
function editRecord(patient_id)
{
    alert(patient_id);
}


</script>


    <!-- container-scroller -->
    <!-- plugins:js -->
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
