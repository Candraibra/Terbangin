
<!DOCTYPE html>

<html class="no-js"> 
<head>
	<!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'> -->
	<link rel="icon" href="<?=base_url("../assets/img/icon.png")?>">

<!-- Core Stylesheet -->
<link href="<?=base_url("../assets/style.css")?>" rel="stylesheet">
<!-- Date Picker -->
<link rel="stylesheet" href="<?php echo base_url() ?>../assets/css/bootstrap-datepicker.min.css">

<!-- Responsive CSS -->
<link href="<?=base_url("../assets/css/responsive/responsive.css")?>" rel="stylesheet">
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo base_url() ?>../assets1/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo base_url() ?>../assets1/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo base_url() ?>../assets1/css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="<?php echo base_url() ?>../assets1/css/superfish.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="<?php echo base_url() ?>../assets1/css/magnific-popup.css">
	<!-- Date Picker -->
	<link rel="stylesheet" href="<?php echo base_url() ?>../assets1/css/bootstrap-datepicker.min.css">
	<!-- CS Select -->
	<link rel="stylesheet" href="<?php echo base_url() ?>../assets1/css/cs-select.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>../assets1/css/cs-skin-border.css">
	
	<link rel="stylesheet" href="<?php echo base_url() ?>../assets1/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>../assets1/css/seat.css">


	<!-- Modernizr JS -->
	<script src="<?php echo base_url() ?>_assets/js/modernizr-2.6.2.min.js"></script>
    </head>
	<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="dorne-load"></div>
    </div>

    <!-- ***** Search Form Area ***** -->
    <div class="dorne-search-form d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-close-btn" id="closeBtn">
                        <i class="pe-7s-close-circle" aria-hidden="true"></i>
                    </div>
                    <form action="#" method="get">
                        <input type="search" name="caviarSearch" id="search" placeholder="Search Your Desire Destinations or Events">
                        <input type="submit" class="d-none" value="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header_area" id="header">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <nav class="h-100 navbar navbar-expand-lg">
                        <a class="navbar-brand" href="index.html" style="height:120px;"><img src="<?=base_url("../assets/img/logo1.png")?>" alt="">&nbsp &nbsp Terbangin</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#dorneNav" aria-controls="dorneNav" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                        <!-- Nav -->
                        <div class="collapse navbar-collapse" id="dorneNav">
                            <ul class="navbar-nav mr-auto" id="dorneMenu">
                                <li class="nav-item active">
                                    <a class="nav-link" href="<?php echo base_url() ?>">Home <span class="sr-only">(current)</span></a>
                                </li>
                        
                                <?php if ( $this->session->userdata('user') ): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url() ?>reservation">My Reservation</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"><?php echo $this->session->userdata('user')['username'] ?></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url() ?>account/logout">Logout</a>
                                </li>
                            </ul>
                            <!-- Signin btn -->
                            <div class="dorne-signin-btn">
                            <?php else: ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url() ?>Account/signin">Sign in</a>
                            </li>
                            <li class="nav-item">
                                <a  class="nav-link" href="<?php echo base_url() ?>Account/signup">Sign up</a>
                            </li>
							<?php endif; ?>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
    <section class="dorne-welcome-area bg-img bg-overlay" style="background-image: url(http://localhost/Terbangin/assets/img/home.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-md-12">
                        <div class="flight-wrapper">
                            <div class="search-flight-title animated fadeIn">
                                <!-- get data from get -->
                                <h4>
                                    <span class="glyphicon glyphicon-plane"></span>
                                    Trip from 
                                    <b><?php echo $_GET['rute_from'] ?></b> to 
                                    <b><?php echo $_GET['rute_to'] ?></b>
                                </h4>
                                <p> 
                                    <b>
                                    <?php
                                    // convert date to month day using date function php
                                    $date = strtotime($_GET['depart_date']);
                                    echo date("D d M Y", $date);
                                    ?>
                                    </b>
                                </p>
                                <p>
                                    <b>
                                    <span><?php echo $_GET['passengers'] ?> Passengers, </span> 
                                    <span><?php echo $_GET['flight_class'] ?> Class</span>
                                    </b>
                                </p>

                            </div>


                            <div class="search-flight animated fadeInUp">
                                <div class="search-header">
                                    <div class="col-lg-3">
                                    <h6>Airline</h6>
                                    </div>
                                    <div class="col-lg-2">
                                    <h6>Depart</h6>
                                    </div>
                                    <div class="col-lg-2">
                                    <h6>Arrive</h6>
                                    </div>
                                    <div class="col-lg-2">
                                    <h6>Duration</h6>
                                    </div>
                                    <div class="col-lg-3">
                                    <h6>Price per Person</h6>
                                    </div>
                                </div>
                                <div class="notfound">
                                    <h2>Rute Tidak Tersedia :(</h2>
                                    <h4>Cari rute lain, <span onclick='window.location.href="<?php echo base_url() ?>"' class="choose-btn">Cari</span></h4>
                                </div>

                                </div>
                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                            </div>
                            </div>

                            </div>


<script src="<?php echo base_url() ?>../assets1/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="<?php echo base_url() ?>../assets1/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="<?php echo base_url() ?>../assets1/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="<?php echo base_url() ?>../assets1/js/jquery.waypoints.min.js"></script>
	<script src="<?php echo base_url() ?>../assets1/js/sticky.js"></script>

	<!-- Stellar -->
	<script src="<?php echo base_url() ?>../assets1/js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="<?php echo base_url() ?>../assets1/js/hoverIntent.js"></script>
	<script src="<?php echo base_url() ?>../assets1/js/superfish.js"></script>
	<!-- Magnific Popup -->
	<script src="<?php echo base_url() ?>../assets1/js/jquery.magnific-popup.min.js"></script>
	<script src="<?php echo base_url() ?>../assets1/js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="<?php echo base_url() ?>../assets1/js/bootstrap-datepicker.min.js"></script>
	<!-- CS Select -->
	<script src="<?php echo base_url() ?>../assets1/js/classie.js"></script>
	<script src="<?php echo base_url() ?>../assets1/js/selectFx.js"></script>
	
	<!-- Main JS -->
	<script src="<?php echo base_url() ?>../assets1/js/main.js"></script>
	<script>
		document.getElementById('current_url').value = window.location.href;
	</script>
	
    <!-- jQuery-2.2.4 js -->
    <script src="<?=base_url("../assets/js/jquery/jquery-2.2.4.min.js")?>"></script>
    <!-- Popper js -->
    <script src="<?=base_url("../assets/js/bootstrap/popper.min.js")?>"></script>
    <!-- Bootstrap-4 js -->
    <script src="<?=base_url("../assets/js/bootstrap/bootstrap.min.js")?>"></script>
    <!-- Date Picker -->
	<script src="<?php echo base_url() ?>../assets/js/bootstrap-datepicker.min.js"></script>
    <!-- All Plugins js -->
    <script src="<?=base_url("../assets/js/others/plugins.js")?>"></script>
    <script src="<?php echo base_url() ?>../assets/js/main.js"></script>
    <!-- Active JS -->
    <script src="<?=base_url("../assets/js/active.js")?>"></script>
	
	</body>
</html>
