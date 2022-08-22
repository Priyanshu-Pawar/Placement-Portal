<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {

    header("Location: /demo/login.php");
    exit;
}

?>



<?php

$server = "sql313.epizy.com";
$name = "epiz_32432462";
$img = "hlRR4QSMi07";
$database = "epiz_32432462_CollegePlacement";

$conn = mysqli_connect($server, $name, $img, $database);

if (!$conn) {
    die("Error" . mysqli_connect_error());
}

$showAlert = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $img = $_POST['img'];
    $job = $_POST['job'];
    $location = $_POST['location'];
    $vacancy = $_POST['vacancy'];
    $salary = $_POST['salary'];
    $skills = $_POST['skills'];
    $exp = $_POST['exp'];
    $website = $_POST['website'];
    $date = $_POST['date'];
    $email = $_POST['email'];
    $description = $_POST['description'];



    $existSql = "SELECT * FROM `epiz_32432462_CollegePlacement` WHERE email = '$email' ";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);
    if ($numExistRows > 0) {
        $showError = "Username Already Exists!";
    } else {

        $sql =  "INSERT INTO `epiz_32432462_CollegePlacement`(`name`, `img`, `job`, `location`, `vacancy`, `salary`, `skills`, `exp`, `website`, `date`, `email`, `description`) VALUES ('$name','$img','$job','$location','$vacancy','$salary','$skills','$exp','$website','$date','$email','$description')";
        // $sql = "INSERT INTO `users`(`firstName`, `midName`, `lastName`, `gender`, `email`, `number`, `dt`) VALUES ('$firstName','$midName','$lastName','$gender','$email','$number',current_timestamp())";
 

        $res = mysqli_query($conn,$sql);
        // $result = mysqli_query($conn, $sql);
        if ($res) {
            $showAlert = "Successfuly Register!";
        } else {
            $showAlert = "error!";
        }
    }
}



?>





<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template" />
    <meta name="description" content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework" />
    <meta name="robots" content="noindex,nofollow" />
    <title>Add Company</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png" />
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="admin_dashboard.php">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!-- Dark Logo icon -->
                            <img src="plugins/images/logo-icon.png" alt="homepage" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <span class="hide-menu" style="color: black ;   font-family: Arial, Helvetica, sans-serif; font-size: 1.5rem;">Admin Home
                            </span>
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <h2 style="color: white; padding-left: 1rem; text-align: center;">Placement Portal</h2>
                    <ul class="navbar-nav d-none d-md-block d-lg-none">
                        <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav ms-auto d-flex align-items-center">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="in">
                            <form role="search" class="app-search d-none d-md-block me-3">
                                <input type="text" placeholder="Search..." class="form-control mt-0" />
                                <a href="profile.php" class="active">
                                    <i class="fa fa-search"></i>
                                </a>
                            </form>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="admin_dashboard.php" aria-expanded="false">
                                <i class="fas fa-home" aria-hidden="true"></i>
                                <span class="hide-menu">Home</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="Eligible.php" aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Eligible Student List</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="Addjobs.php" aria-expanded="false">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                                <span class="hide-menu">Add Jobs</span>
                            </a>
                        </li>
                       
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="Users.php" aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Applied Users</span>
                            </a>
                        </li>
                        <!-- <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="Job_posting.php" aria-expanded="false">
                                <i class="fas fa-briefcase" aria-hidden="true"></i>
                                <span class="hide-menu">Job Posting</span>
                            </a>
                        </li> -->
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="Setting.php" aria-expanded="false">
                                <i class="fas fa-sun" aria-hidden="true"></i>
                                <span class="hide-menu">Settings</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper" style="min-height: 250px">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Add Jobs</h4>
                    </div>

                </div>
                <!-- /.col-lg-12 -->
            </div>

            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->

            <div class="container-fluid">

                <div class="card ">
                    <div class="card-header">
                        <h3 class='text-center'>Company Registration</h3>
                    </div>
                    <div class="card-body">
                        <div style="width:600px; margin:0px auto">

                            <form class="" action="" method="POST">
                                <div class="form-group pt-3">
                                    <label for="name">Company name</label>
                                    <input type="text" name="name" class="form-control">
                                </div>
                                <div class="form-group pt-3">
                                    <label for="">Company Image</label>
                                    <input id="pdf" type="file" name="img" value="" class="form-control" required />
                                </div>

                                <div class="form-group">
                                    <label for="username">Job</label>
                                    <input type="text" name="job" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="username">Location</label>
                                    <input type="text" name="location" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="username">Vacancy</label>
                                    <input type="text" name="vacancy" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="username">Salary</label>
                                    <input type="text" name="salary" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="username">Required Knowledge, Skills, and Abilities</label>
                                    <textarea type="text" name="skills" class="form-control" rows="3" class="form-control p-0 border-0"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="username">Education + Experience</label>
                                    <textarea type="text" name="exp" class="form-control" rows="3" class="form-control p-0 border-0"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="username">Website</label>
                                    <input type="text" name="website" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="username">Posted Date</label>
                                    <input type="date" name="date" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="email">Company Email address</label>
                                    <input type="email" name="email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="mobile">Job Description</label>
                                    <textarea type="text" name="description" class="form-control" rows="3" class="form-control p-0 border-0"></textarea>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Register</button>
                                </div>
                            </form>
                        </div>


                    </div>
                </div>

            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                2021 © Ample Admin brought to you by
                <a href="https://www.wrappixel.com/">wrappixel.com</a>
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
</body>

</html>