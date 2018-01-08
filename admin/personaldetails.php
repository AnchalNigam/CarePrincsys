<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Princsys Admin Panel - Personal Details</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="admin.html" class="simple-text">
                    Admin
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="personaldetails.php">
                        <i class="pe-7s-graph"></i>
                        <p>Personal Details</p>
                    </a>
                </li>
                <li>
                    <a href="resumes.php">
                        <i class="pe-7s-user"></i>
                        <p>Resume</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="personaldetails.php" style="margin-right: 600px">Personal Details</a>
                </div>

                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                    <ul class="nav navbar-nav navbar-right" >
                        <li>
                           <a href="#">
                               Account
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Log out
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
         <div class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Personal Details</h4>
                        <p class="category"> The list of candidates</p>
                    </div>
                    <div class="content">
                        <div class="row">
                            <div class="col-md-6">
                                <h5>Candidates:</h5>
                                <?php
    
    $connection = new mysqli('localhost', 'root', 'root', 'validationtestintern');

    $error_flag = 0;
    $result;
    if ($connection->connect_error) {
        die('connection failed: '.$connection->connect_error);
    }
    else
    {

    $sql ="SELECT name,email,contactno,DOB,gender,pannumber,location,city FROM interndetails";
    $result= mysqli_query($connection,$sql);
    if(mysqli_num_rows($result) > 0 ) {

        echo'<table class="table table-striped text-center">
                                                <tr>
                                                    <th>Name</th>
                                                    <th>E-mail</th>
                                                    <th>Contact no</th>
                                                    <th>DOB</th>
                                                    <th>Gender</th>
                                                    <th>Pan/Aadhar number</th>
                                                    <th>Location</th>
                                                    <th>City</th>
                                                </tr>';
            
    while ($row = mysqli_fetch_array($result)) {
    echo    '<tr>
                <td>'.$row['name'].'</td>
                <td>'.$row['email'].'</td>
                <td>'.$row['contactno'].'</td>
                <td>'.$row['DOB'].'</td>
                <td>'.$row['gender'].'</td>
                <td>'.$row['pannumber'].'</td>
                <td>'.$row['location'].'</td>
                <td>'.$row['city'].'</td>
            </tr>';


            }
        echo '</table>';
        }
    }
?>
                            </div class="col-md-6">
                        </div class="row">
                    </div class="content">            
                            
</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

    <!--  Checkbox, Radio & Switch Plugins -->
    <script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

    <!--  Charts Plugin -->
    <script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="assets/js/light-bootstrap-dashboard.js"></script>

    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src="assets/js/demo.js"></script>

</html>