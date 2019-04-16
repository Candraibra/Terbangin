
<!DOCTYPE html>

<html class="no-js"> 
<head>
	<!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'> -->
	<link rel="icon" href="<?=base_url("../assets/img/icon.png")?>">

<!-- Core Stylesheet -->
<link href="<?=base_url("../assets/style1.css")?>" rel="stylesheet">
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
                        <!-- Nav -->
                        <div class="collapse navbar-collapse" id="dorneNav" style="margin-top:40px">
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

<div class="search-flight-title animated fadeIn" style="margin-top:90px">
	<!-- get data from get -->
	<h4>
		<span class="glyphicon glyphicon-plane"></span>
		Trip from
		<b>
			<?php echo $_GET['rute_from'] ?>
		</b> to
		<b>
			<?php echo $_GET['rute_to'] ?>
		</b>
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
			<span>
				<?php echo $_GET['passengers'] ?> Passengers, </span>
			<span>
				<?php echo $_GET['flight_class'] ?> Class</span>
		</b>
	</p>

</div>


<div class="search-flight animated fadeInUpBig">
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

	<!-- foreach variabel data as value -->
	<?php foreach ($data as $value) : ?>
	<?php 

	$seat_bookeds = 0;
	if (count($value['seat_bookeds']) > 0) {
		$seat_bookeds = count($value['seat_bookeds']);
	}
	$seat_available = $value['seat_total'] - $seat_bookeds;

	?>

	<div class="flight-rute row <?php echo ($seat_available > 0 ? '' : 'rute-full' ) ?>">
		<form class="row form-flight" action="<?php echo base_url() ?>prebooking/" method="GET">
			<input type="hidden" name="passengers" value="<?php echo $_GET['passengers'] ?>">
			<input type="hidden" name="rute_from" value="<?php echo $_GET['rute_from'] ?>">
			<input type="hidden" name="rute_to" value="<?php echo $_GET['rute_to'] ?>">
			<input type="hidden" name="depart_date" value="<?php
	
	// convert date to month day using date function php
																																																	$date = strtotime($_GET['depart_date']);
																																																	echo date(" D d M Y ", $date);
																																																	?>">
			<input type="hidden" name="flight_class" value="<?php echo $_GET['flight_class'] ?>">
			<?php if ( $seat_available > 0): ?>
			<input type="hidden" name="rute_id" value="<?php echo $value['id']; ?>">					
			<?php endif; ?>
			<div class="col-lg-3">
				<p>
					<?php echo $value['code']; ?>
				</p>
					<p>
					<?php echo $value['class']; ?> Class
					</p>
					<p>
					<?php if ( $seat_available > 0): ?>
					Seat Availabel : <?php echo $seat_available ?>
					<?php else: ?>
					Seat Not Available
					<?php endif; ?>	
					</p>
			</div>
			<div class="col-lg-2">
				<p>
					<?php 
				echo date('G:i:s', strtotime($value['depart']));
				?>
				</p>
				<p class="flight-rute-date">
					<?php 
				echo date('D d M Y', strtotime($value['depart']));
				?>
				</p>
				<p>
					<?php echo $value['rute_from']; ?>
				</p>
			</div>
			<div class="col-lg-2">
				<p>
					<?php 
				echo date('G:i:s', strtotime($value['arrive']));
				?>
				</p>
				<p class="flight-rute-date">
					<?php 
				echo date('D d M Y', strtotime($value['arrive']));
				?>
				</p>
				<p>
					<?php echo $value['rute_to']; ?>
				</p>
			</div>
			<div class="col-lg-2">
				<p>

					<!-- duration -->
					<?php
				$datetime1 = new DateTime($value['depart']); //convert to datetime
				$datetime2 = new DateTime($value['arrive']); //convert to datetime
				$interval = $datetime1->diff($datetime2); //get interval from two datetime
				echo $interval->format('%d d %H h %i m'); //convert interval to  day hours and minute
		//materikita.com
				?>

				</p>
			</div>
			<div class="col-lg-3">
				<p class="flight-price">

					<!-- convert number to idr format -->
					<?php 
				echo "Rp." . strrev(implode('.', str_split(strrev(strval($value['price'])), 3)));
				?>

				</p>
				<?php if ( $seat_available > 0): ?>
				<button class="choose-btn">Choose</button>						
				<?php else: ?>		
				<button disabled class="choose-btn btn-full">Full</button>					
				<?php endif; ?>
			</div>
		</form>
	</div>

	<!-- end foreach -->
	<?php endforeach; ?>

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

