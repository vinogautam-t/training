<?php

include 'dp.php';


//print_r($_POST);
if(isset($_POST['Name'])){
$Name = $_POST['Name'];
$Email=$_POST['Email'];
$Phone = $_POST['Phone'];
$Password=$_POST['pass_confirmation'];
$created = date('Y-m-d H:i:s');


	$sql = "INSERT INTO users (Name,Email,Phone,Password,Date)
				VALUES ('$Name','$Email','$Phone','$Password','$created')";
//print_r($sql);
			if (mysqli_query($conn, $sql)) {
	    	   $msg = 1;
					} else {
	    			$msg = 2;

	            	}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Modernize an Admin Panel Category Bootstrap Responsive Web Template | Register :: w3layouts</title>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Modernize Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta Tags -->
    <link rel="stylesheet" href="css/style.css"/>

    <!-- Style-sheets -->
    <!-- Bootstrap Css -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap Css -->
    <!-- Common Css -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
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
            <h2 class="main-title-w3layouts mb-2 text-center text-white">Register</h2>
            <!--// main-heading -->
            <div class="form-body-w3-agile text-center w-lg-50 w-sm-75 w-100 mx-auto mt-5">
                <form action="" id="registration-form" method="POST">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="user" class="form-control" placeholder="user name" data-validation="required" name="Name" data-validation="length alphanumeric" 
                                  data-validation-length="3-12" 
		                          data-validation-error-msg="User name has to be an alphanumeric value (3-12 chars)">
                    </div>
                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" class="form-control" placeholder="email" data-validation="required" name="Email" data-validation="email">
                    </div>
                    <div class="form-group">
                        <label>Phone number</label>
                        <input type="text" class="form-control" placeholder="phone number" data-validation="length" data-validation-length="10"  name="Phone">

                    </div>
                    <div class="form-group">
                        <label> Password</label>
                        <input type="password" class="form-control" placeholder="Password" data-validation="required" name="pass_confirmation">
                    </div>
                    <div class="form-group">
                        <label> ConfirmPassword</label>
                        <input type="password" class="form-control" placeholder="ConfirmPassword" data-validation="confirmation" name="pass">
                    </div>
                    <div class="form-check text-center">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Agree the terms and policy</label>
                    </div>
                    <button type="submit" class="btn btn-primary error-w3l-btn mt-sm-5 mt-3 px-4">Submit</button>
                </form>
                <p class="paragraph-agileits-w3layouts mt-4">Already have account?
                    <a href="login.html">Login</a>
                </p>
                <h1 class="paragraph-agileits-w3layouts mt-2">
                    <a href="index.html">Back to Home</a>
                </h1>
            </div>

            <!-- Copyright -->
            <div class="copyright-w3layouts py-xl-3 py-2 mt-xl-5 mt-4 text-center">
                <p>© <?= date('Y');?> Modernize . All Rights Reserved | Design by
                    <a href="http://w3layouts.com/"> IsoftMinds</a>
                </p>
            </div>
            <!--// Copyright -->
        </div>
    </div>

    
    <div class="modal fade bd-example-modal-sm" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" >
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="mySmallModalLabel">
                        <?php if($msg == 1){?>Success<?php }?>
                        <?php if($msg == 2){?>Error<?php }?>
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php if($msg == 1){?>Registered Successfully<?php }?>
                    <?php if($msg == 2){?>Error while signup<?php }?>
                </div>
            </div>
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
            form : '#registration-form',
            modules : 'security'
        });
        
        
        <?php if(isset($msg)){?>
        $('#loginModal').modal('show')
        <?php }?>
        
    </script>

</body>

</html>