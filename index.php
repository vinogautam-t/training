<?php
$servername = "localhost";
$username = "vinogautam";
$password = "";
$dbname = "training";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn)

{
    die("Connection failed: " . mysqli_connect_error());

    
}

//print_r($_POST);
if(isset($_POST['emailid']))
{
$emailid = $_POST['emailid'];
$password=$_POST['password'];

$sql= "SELECT * from isoftadm where(emailid='$emailid')";
    $res=mysqli_query($conn,$sql);
        if (mysqli_num_rows($res) > 0) {
        // output data of each row
        $row = mysqli_fetch_assoc($res);
         if ($emailid==$row['emailid'])
                    {
                        echo "email already exists";
                    
                    }
        }
        elseif($emailid=='');
        {
            echo"create an account";
        }
     
    
    
    
    
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>  Admin Panel Category Bootstrap Responsive Web Template | Login :: isoftminds</title>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="website company,freelancer website designer,freelencer,free,lancer,website,app,app developer,website king,website bugs fix,website problem web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta Tags -->

    <!-- Style-sheets -->
    <!-- Bootstrap Css -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap Css -->
    <!-- Common Css -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--// Common Css -->
    <!-- Common Css -->
    <link href="css/own.css" rel="stylesheet" type="text/css" media="all" />
    <!--// Common Css -->
    <!-- Fontawesome Css -->
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <!--// Fontawesome Css -->
    <!--// Style-sheets -->

    <!--web-fonts-->
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!--//web-fonts-->

</head>

<body>
        <div class="bg-page py-5">
        <div class="container">
            <!-- main-heading -->
            <h2 class="main-title-w3layouts mb-2 text-center text-white">Login</h2>
            <!--// main-heading -->
            <div class="form-body-w3-agile text-center w-lg-50 w-sm-75 w-100 mx-auto mt-5">
                <form  method="POST" id="registration-form">
                    <div class="form-group">
                        <label>Email address</label>
                        <input data-validation="required"type="email" name="emailid" class="form-control" placeholder="Enter email"  >
                                
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input data-validation="required" type="password"name="password" class="form-control" placeholder="Password"  >
                            
                    </div>
                    <div class="d-sm-flex justify-content-between">
                        <div class="form-check col-md-6 text-sm-left text-center">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Remember me</label>
                        </div>
                        <div class="forgot col-md-6 text-sm-right text-center">
                            <a href="forgot.html">forgot password?</a>
                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary error-w3l-btn mt-sm-5 mt-3 px-4">Login</button>
                </form>
                <p class="paragraph-agileits-w3layouts mt-4">Don't have an account
                    <a href="register.php">Create an account</a>
                </p>
                <h1 class="paragraph-agileits-w3layouts mt-2">
                    <a href="index.html">Back to Home</a>
                </h1>
            </div>

            <!-- Copyright -->
            <div class="copyright-w3layouts py-xl-3 py-2 mt-xl-5 mt-4 text-center">
                <p>© 2018 Modernize . All Rights Reserved | Design by
                    <a href="http://w3layouts.com/"> W3layouts </a>
                </p>
            </div>
            <!--// Copyright -->
        </div>
    </div>

    <!-- Required common Js -->
    <script src='js/jquery-2.2.3.min.js'></script>
    <!-- //Required common Js -->

    <!-- Js for bootstrap working-->
    <script src="js/bootstrap.min.js"></script>
    <!-- //Js for bootstrap working -->
    
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
    
    <script type="text/javascript">
        $.validate({
            form : '#registration-form'
        });
    </script>
    
    </body>

</html>