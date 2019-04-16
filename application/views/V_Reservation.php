
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
	<script src="<?php echo base_url() ?>../assets1/js/modernizr-2.6.2.min.js"></script>
	<head>
	    <!-- ***** Header Area Start ***** -->
		<header class="header_area" id="header">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <nav class="h-100 navbar navbar-expand-lg">
                        <a class="navbar-brand" href="index.html" style="height:120px"><img src="<?=base_url("../assets/img/logo1.png")?>" alt="">Terbangin</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#dorneNav" aria-controls="dorneNav" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                        <!-- Nav -->
                        <div class="collapse navbar-collapse" id="dorneNav">
                            <ul class="navbar-nav mr-auto" id="dorneMenu">
                                <li class="nav-item ">
                                    <a class="nav-link" href="<?php echo base_url() ?>">Home <span class="sr-only">(current)</span></a>
                                </li>
                        
                                <?php if ( $this->session->userdata('user') ): ?>
                                <li class="nav-item active">
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
	<!-- ***** Welcome Area Start ***** -->
    <section class="dorne-welcome-area bg-img bg-overlay" style="background-image: url(http://localhost/Terbangin/assets/img/home.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-md-12">
                    <!-- Hero Search Form -->
					<div class="flight-wrapper">
<!-- ###### -->
<div class="flight-booking-info row">
	<div class="col-lg-12 animated fadeInUp">
		<div class="customer-data">
			<div class="booking-title">
				<h4>
					<span class="glyphicon glyphicon-list-alt"></span>
					Pesananku
				</h4>
				<div class="booking-line"></div>
			</div>
			<table class="table table-bordered table-reservation">
				<thead>
				  <tr>
					<th>No</th>
					<th>Reservation Code</th>
					<th>Reservation Date</th>
					<th>Route</th>
					<th>Status</th>
					<th>Action</th>
				  </tr>
				</thead>
				<tbody>
				<?php $i = 0 ?>
				<?php foreach ( $reservation as $value ): ?>
				<?php $i++ ?>
					<tr>
						<td><?php echo $i ?></td>
						<td><?php echo $value['reservation_code'] ?></td>
						<td><?php echo date('D d M Y, G:i:s', strtotime($value['reservation_date'])) ?></td>
						<td class="reservation-route">From <span><?php echo $value['rute_from'] ?> to <span><?php echo $value['rute_to'] ?></span></span></td>
						<td>

							<?php 
							if($value['status'] == 1){
								echo "<span class='status-paid'>PAID</span>";
							}
							else{
								echo "<span class='status-unpaid'>UNPAID</span>";
							}
							
							?>

						</td>
						<td>
							<a class="status-check" href="<?php echo base_url() ?>reservation/status/?reservation_code=<?php echo $value['reservation_code'] ?>">Check</a>
						</td>
					</tr>	
				<?php endforeach; ?>
				</tbody>
			  </table>
		</div>
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
    <!-- ***** Welcome Area End ***** -->


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
