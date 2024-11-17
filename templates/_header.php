<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/imperialsofetch.png">
    <title></title>
    <!-- Bootstrap Core CSS -->
    <link href="plugins/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">

    <link href="plugins/bower_components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />

    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="css/colors/blue.css" id="theme" rel="stylesheet">

    <link href="css/sweetAlert.css" id="theme" rel="stylesheet">

    <link href="plugins/bower_components/switchery/dist/switchery.min.css" rel="stylesheet" />


    <!-- Popup CSS -->
    <link href="plugins/bower_components/Magnific-Popup-master/dist/magnific-popup.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/parsley.css">

    <link href="plugins/bower_components/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
    <link href="plugins/bower_components/bootstrap-datetimepicker-master/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">


    <style type="text/css">
        .float-right
        {
            float: right;
        }

        .parsley-required , .red{
            color: red;
        }
    </style>

    <!-- <script src="http://www.w3schools.com/lib/w3data.js"></script> -->
    <!-- jQuery -->
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
    <style>
    body .navbar-header {
        background: #fff;
    }

    body .navbar-header .logo {
        color: #252525;
    }
    </style>
    <script>
        <?php if (isset($_GET['demo'])) {?>
<?php if ($_GET['demo'] == "1") {?>
                const demo = "true";
            Cookies.set('demo', '' + demo);

            <?php } else {?>
            const demo = "false";
            Cookies.set('demo', '' + demo);
             <?php }?>
<?php }?>

         <?php if (isset($_GET['dong'])) {?>
            const isDong = true;
         <?php }?>


    </script>
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Navigation -->
<!--         <nav class="navbar navbar-default navbar-static-top m-b-0 sidebar">
            <div class="navbar-header">
                <div class="top-left-part"><a class="logo" href="index.php"><b><img width="30" src="plugins/images/logo.png" alt="home" /></b><span class="hidden-xs"> sourcetrack.co</span></a></div>
            </div>
        </nav> -->
        <!-- Left navbar-header -->

        <!-- Left navbar-header end -->

        <!-- Page Content -->
        <div id="page-wrapper">