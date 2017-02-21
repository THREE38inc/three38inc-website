<?php $isMin = ture; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- PAGE TITLE -->
    <title>THREE38 inc</title>

    <!-- FAVICON AND APPLE TOUCHSCREEN ICONS -->
    <link rel="shortcut icon" href="images/favicon_338_red.png">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png.html">

    <!-- ******************************
            STYLESHEETS
    *********************************** -->

    <!-- DEFAULT AND BOOTSTRAP STYLESHEET -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">

    <!-- FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>

    <!-- FONT ICONS -->
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/simple-line-icons.css" />
    <link rel="stylesheet" href="css/pe-icon-7-stroke.css" />
    <link rel="stylesheet" href="css/themify-icons.css" />

    <!-- PLUGINS DEFAULT STYSHEETS-->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/slider-pro.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <link rel="stylesheet" href="css/jquery.mmenu.all.css">
    <link rel="stylesheet" href="css/animate.min.css">


    <!-- MAIN STYLESHEETS -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css" />
    <link rel="stylesheet" href="css/port_style.css" />
    <link rel="stylesheet" href="css/quote.css"/>
    <link rel="stylesheet" href="css/style.css" />

    <!-- MODERNIZER -->
    <?php if($isMin): ?>
      <script src="js/min/modernizr-2.8.3.min-min.js"></script>
    <?php else: ?>
      <script src="js/modernizr-2.8.3.min.js"></script>
    <?php endif; ?>

	<!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
        <script src="js/selectivizr-min.js"></script>
        <script src="js/nwmatcher.js"></script>
        <script src="js/IE9.js"></script>
	<![endif]-->
</head>

<body class="do-homepage-one">
    <!-- PRELOADER -->
    <div class="preloader">
        <div class="do-loader">&nbsp;</div>
    </div>
    <!-- START THE MAIN CONTENT HERE -->

    <!--side menu code included here-->
    <?php include ("includes/side-menu.php"); ?>

    <!--navbar code included here-->
    <?php include ("includes/navbar.php") ; ?>

    <!--slider code included here-->
    <?php include ("includes/slider.php") ; ?>

    <!--about-us code included here-->
    <?php include ('includes/about-us.php'); ?>

    <!--services code included here-->
    <?php include("includes/services.php"); ?>

    <!--counter section included here-->
    <?php include('includes/counter.php');?>

    <!--custom sections-->
    <?php include('includes/facts-n-features.php');?>

    <!-- portfolio section included here-->
    <?php include('includes/portfolio.php'); ?>

    <!-- Team section included here-->
    <?php include('includes/teams.php');?>

    <!--Testimonial section included here-->
    <?php include('includes/testimonial.php');?>

    <!--quote sectionincluded here-->
    <?php include('includes/quote.php');?>

    <!--social link section included here-->
    <?php include('includes/social-link.php');?>

    <!--footer section included here-->
    <?php include('includes/footer.php');?>


    <!--overlay for quotation   -->
	<div class="md-overlay"></div>




	<!-- *******************************
                SCRIPTS
    ************************************ -->
    <?php if($isMin): ?>
      <script src="js/min/jquery-1.11.3.min-min.js"></script>
      <script src="js/min/google-map-init-min.js"></script>
      <script src="js/min/plugins-min.js"></script>
      <script src="js/min/classie-min.js"></script>
      <script src="js/min/modalEffects-min.js"></script>
      <script src="js/min/main-min.js"></script>
      <script type="text/javascript" src="js/min/jquery.gallery-min.js"></script>
    <?php else: ?>
      <script src="js/jquery-1.11.3.min.js"></script>
      <script src="js/google-map-init.js"></script>
      <script src="js/plugins.js"></script>
      <script src="js/classie.js"></script>
      <script src="js/modalEffects.js"></script>
      <script src="js/main.js"></script>
      <script type="text/javascript" src="js/jquery.gallery.js"></script>
    <?php endif; ?>
    
    <script type="text/javascript">
        $(function() {
            // this is important for IEs
			var polyfilter_scriptpath = '/js/';

            $('#dg-container').gallery();
            $(document).on('mouseenter','a.dg-center .scrollbar',function(){

                var height=$(this).children('img').height()-$(this).height()+35;
                console.log($(this).children('img').height());
                console.log($(this).height());
                $(this).animate({scrollTop:height}, 5000, 'swing', function() {
                    $(this).animate({scrollTop:0}, 1000, 'swing');
                });
            });
            $(document).on('mouseleave','a.dg-center .scrollbar',function(){
                $(this).stop();
                 $(this).animate({scrollTop:0}, 1000, 'swing');
            });

        });
    </script>

</body>
</html>
