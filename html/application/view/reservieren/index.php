<!DOCTYPE html>
<html lang="de">

<head>
	<title>Tisch Reservierung</title>
	<!-- Meta tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Tisch Reservierung für Restaurant"
	/>
	<script type="application/x-javascript">
		addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
	</script>
	<!-- Meta tags -->
	<!--stylesheets-->
	<link href="<?php echo Config::get('URL'); ?>css/style.css" rel='stylesheet' type='text/css' media="all">
	<!--//style sheet end here-->
	<!-- Calendar -->
	<link rel="stylesheet" href="<?php echo Config::get('URL'); ?>css/jquery-ui.css" />
	<!-- //Calendar -->
	<link href="<?php echo Config::get('URL'); ?>css/wickedpicker.css" rel="stylesheet" type='text/css' media="all" />
	<!-- Time-script-CSS -->

	
</head>

<body>
	<h1 class="header">
		Tisch Reservierung</h1>
	<div class="appointment-w3">
		<form action="/html/reservierungdatenbank/index" method="post">
			<div class="personal">
			
				<div class="main">
					<div class="form-left">

						<input type="text" class="top-up" name="name" placeholder="Name" required="">
					</div>
					<div class="form-left">

						<input type="Email" name="email" placeholder="Email" required="">
					</div>
					<div class="form-right ">

						<input class="buttom" type="text" name="telefonnummer" placeholder="Telefon Nummer" required="">
						<div class="clearfix"></div>
					</div>
				</div>
				
			</div>
			<div class="information">
				
				
				<div class="main">

					
					<div class="form-left">
						<input id="datepicker" name="datum" type="text" placeholder="Datum" required="">
						<!--<input type="text" id="timepicker" name="Zeit" class="timepicker form-control hasWickedpicker" placeholder="Zeit" required=""-->
						<onkeypress="return false;">
						<div class="clear"></div>
					</div>
				</div>
				
				<div class="main">

					<div class="form-left">
						<select class="form-control" name="personen_anzahl">
					<option value="">Personen</option>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
						<option>6</option>
						<option>7</option>
						<option>8</option>
						<option>9</option>
						<option>10</option>
					</select>
					</div>
				</div>
				
			</div>
			
			
			<div class="btnn">
				<input type="submit" value="Tisch Reservieren">
			</div>
		</form>
	</div>
	<div class="copy">
	</div>
	<!-- js -->
	<script type='text/javascript' src='<?php echo Config::get('URL'); ?>js/jquery-2.2.3.min.js'></script>
	<!-- //js -->
	<!-- Calendar -->
	<script src="<?php echo Config::get('URL'); ?>js/jquery-ui.js"></script>
	<script>
		$(function () {
			$("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
		});
	</script>
	<!-- //Calendar -->
	<!-- Time -->
	<script type="text/javascript" src="<?php echo Config::get('URL'); ?>js/wickedpicker.js"></script>
	<script type="text/javascript">
		$('.timepicker,.timepicker1').wickedpicker({ twentyFour: false });
	</script>
	<!-- //Time -->
	<body>
    

</body>

</html>