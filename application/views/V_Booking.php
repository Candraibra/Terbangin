
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
    <section class="dorne-welcome bg-img bg-overlay" style="background-image: url(http://localhost/Terbangin/assets/img/home.jpg);">
        <div class="container h-150">
            <div class="row h-150 align-items-center justify-content-center">
                <div class="col-12 col-md-12">
				
								<div class="flight-wrapper">

<!-- ###### -->
<div class="flight-booking-info row"style="margin-top:90px ;height:100%">

	<div class="col-lg-7 animated fadeInLeft">

		<form action="<?php echo base_url() ?>booking/insert_customer" method="POST">
			<input name="key" value="<?php echo $_GET['key'] ?>" type="hidden">
			<?php for ($i = 1; $i <= $data['passengers']; $i++) : ?>

			<div class="customer-data">
				<div class="booking-title">
					<h4>
						<span class="glyphicon glyphicon-user"></span>Passengers Penumpang
						<?php echo $i ?>
					</h4>
					<div class="booking-line"></div>
				</div>
				<label for="">Nama</label>
				<input class="form-control" type="text" name="name[]">
				<br>
				<label for="">Address</label>
				<textarea style="height: 60px;" class="form-control" name="address[]" id="" cols="30" rows="10"></textarea>
				<br>
				<div class="row">
					<div class="col-lg-6">
						<label for="">Phone</label>
						<input class="form-control" type="text" name="phone[]">
					</div>
					<div class="col-lg-6">
						<label for="">Email</label>
						<input class="form-control" type="text" name="email[]">
					</div>
				</div>
				<br>
				<label for="">Gender</label>
				<select class="form-control" name="gender[]" id="">
					<option value="l">Male</option>
					<option value="p">Female</option>
				</select>
			</div>
			<?php endfor; ?>
	</div>
	<div class="col-lg-5 animated fadeInRight">
		<div class="flight-booking-1">
			<div class="booking-title">
				<h4>
					<span class="glyphicon glyphicon-plane"></span> Flight Details</h4>
				<div class="booking-line"></div>
			</div>
			<table class="flight-table">
				<tr>
					<td>Airline</td>
					<td> : </td>
					<td>
						<?php echo $data_rute['code'] ?>
					</td>
				</tr>
				<tr>
					<td>Depart</td>
					<td> : </td>
					<td>
						<?php 
											echo date('G:i:s, D d M Y', strtotime($data_rute['depart']));
											?>
					</td>
				</tr>
				<tr>
					<td>Arrive</td>
					<td> : </td>
					<td>
						<?php 
											echo date('G:i:s, D d M Y', strtotime($data_rute['arrive']));
											?>
					</td>
				</tr>
				<tr>
					<td>Duration</td>
					<td> : </td>
					<td>
						<!-- duration -->
						<?php
									$datetime1 = new DateTime($data_rute['depart']); //convert to datetime
									$datetime2 = new DateTime($data_rute['arrive']); //convert to datetime
									$interval = $datetime1->diff($datetime2); //get interval from two datetime
									echo $interval->format('%d d %H h %i m'); //convert interval to  day hours and minute
									//materikita.com
									?>

					</td>
				</tr>
				<tr>
					<td>Class</td>
					<td> : </td>
					<td>
						<?php echo $data_rute['class'] ?>
					</td>
				</tr>
			</table>
		</div>

		<div class="flight-booking-2">
			<div class="booking-title">
				<h4>
					<span class="glyphicon glyphicon-pencil"></span> Summary</h4>
				<div class="booking-line"></div>
			</div>
			<table class="summary-table">
				<tr>
					<td>Ticket Price</td>
					<td> : </td>
					<td>
						<?php 
					echo "Rp." . strrev(implode('.', str_split(strrev(strval($data_rute['price'])), 3)));
					?>
					</td>
				</tr>
				<tr>
					<td>Total Passengers</td>
					<td> : </td>
					<td>
						<?php echo $data['passengers'] ?>
					</td>
				</tr>
				<tr class="price-you-pay">
					<td>Price you pay</td>
					<td> : </td>
					<td>
						<?php 
					echo "Rp." . strrev(implode('.', str_split(strrev(strval($data['passengers']*$data_rute['price'])), 3)));
					?>
					</td>
				</tr>
			</table>
		</div>


	</div>
</div>

<div class="booking-continue animated fadeInUp">
	<button type="submit" name="submit" class="choose-btn">Continue</button>
</div>

</form>

</div>
<!-- ###### -->
</div>



                                                        </div>
                                                    </div>
                                            
														</section>


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


