<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Login</title>
    <link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth">
                <div class="row w-100">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left p-5">

                            <h4>Admin Login </h4>
                            <h6 class="font-weight-light">Login in to continue.</h6>
                          
                            
                            <form class="pt-3" method="POST" action="dologin.php">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" value="asd" name="username" id="exampleInputEmail1" Required placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" value="asd" name="password" id="exampleInputPassword1" required placeholder="Password">
                                </div>
                                <div class="mt-3">
                                    <input class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" type="submit" value="Login in" />
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>


</body>
</html>


