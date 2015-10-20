<?php
ob_start();
error_reporting(0);
session_start();
if ($_SESSION['Passengers'] == '1') 
	{
		echo '<style type="text/css">
        #pass10,#pass9,#pass8,#pass7,#pass6,#pass5,#pass4,#pass3,#pass2{
            display: none;
        }
        </style>';
	}
if ($_SESSION['Passengers'] == '2') 
	{
		echo '<style type="text/css">
        #pass10,#pass9,#pass8,#pass7,#pass6,#pass5,#pass4,#pass3{
            display: none;
        }
        </style>';
	}
if ($_SESSION['Passengers'] == '3') 
	{
		echo '<style type="text/css">
        #pass10,#pass9,#pass8,#pass7,#pass6,#pass5,#pass4{
            display: none;
        }
        </style>';
	}
if ($_SESSION['Passengers'] == '4') 
	{
		echo '<style type="text/css">
        #pass10,#pass9,#pass8,#pass7,#pass6,#pass5{
            display: none;
        }
        </style>';
	}
if ($_SESSION['Passengers'] == '5') 
	{
		echo '<style type="text/css">
        #pass10,#pass9,#pass8,#pass7,#pass6{
            display: none;
        }
        </style>';
	}
if ($_SESSION['Passengers'] == '6') 
	{
		echo '<style type="text/css">
        #pass10,#pass9,#pass8,#pass7{
            display: none;
        }
        </style>';
	}
if ($_SESSION['Passengers'] == '7') 
	{
		echo '<style type="text/css">
        #pass10,#pass9,#pass8{
            display: none;
        }
        </style>';
	}
if ($_SESSION['Passengers'] == '8') 
	{
		echo '<style type="text/css">
        #pass10,#pass9{
            display: none;
        }
        </style>';
	}
if ($_SESSION['Passengers'] == '9') 
	{
		echo '<style type="text/css">
        #pass10{
            display: none;
        }
        </style>';
	}
	if($_SESSION['Departure'] == 'Chennai')
	{
			$show_Dep='MAS';
	}
	if($_SESSION['Departure'] == 'Bangalore')
	{
			$show_Dep='BAN';
	}
	if($_SESSION['Departure'] == 'Delhi')
	{
			$show_Dep='DEL';
	}
	if($_SESSION['Departure'] == 'Coimbatore')
	{
			$show_Dep='COM';
	}
	if($_SESSION['Departure'] == 'Goa')
	{
			$show_Dep='GOA';
	}
	if($_SESSION['Destination'] == 'Chennai')
	{
			$show_Des='MAS';
	}
	if($_SESSION['Destination'] == 'Bangalore')
	{
			$show_Des='BAN';
	}
	if($_SESSION['Destination'] == 'Delhi')
	{
			$show_Des='DEL';
	}
	if($_SESSION['Destination'] == 'Coimbatore')
	{
			$show_Des='COM';
	}
	if($_SESSION['Destination'] == 'Goa')
	{
			$show_Des='GOA';
	}
	
	
	if($_SESSION['travel-paln'] != 'Round Trip')
	{
		$_SESSION['re_date'] = 'Nil';
	}


	if($_SESSION['travel-time'] == 'Midnight to 6am')
			{
				$dep_time = '01.25';
				$des_time = '04.30';
			}
		if($_SESSION['travel-time'] == '6am to Noon')
			{
				$dep_time = '07.15';
				$des_time = '09.50';
			}
		if($_SESSION['travel-time'] == 'Noon to 6pm')
			{
				$dep_time = '13.10';
				$des_time = '16.30';
			}
		if($_SESSION['travel-time'] == '6pm to Midnight')
			{
				$dep_time = '19.05';
				$des_time = '20.25';
			}					
	if (isset($_POST['confirm']))
	{
		$confirm_bid=$_POST['confirm-bid'];
		if($confirm_bid == 'accepted')
		{
			header('Location:step4.php');
		}
		else
		{
			echo '<script language="javascript">alert("Please accept teram and conditions")</script>';
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>CanFly</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="font-awesome-4.4.0/css/font-awesome.min.css">
  	<link rel="stylesheet" type="text/css" href="assets/css/datepicker.css">  	
  	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-select.min.css"> 	
	<!--<script type="text/javascript" src="assets/js/main.js"></script>-->	
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600' rel='stylesheet' type='text/css'>
	<link href="assets/square/yellow.css" rel="stylesheet">
	<link href="assets/flat/yellow.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/style.css">
      <style type="text/css">
        #preloader {
            position: fixed;
            left: 0;
            top: 0;
            z-index: 999;
            width: 100%;
            height: 100%;
            overflow: visible;
            background: #ffffff url('canflyloader.gif') no-repeat center center;
        }
    </style>

</head>
<body>
<div id="preloader"></div>
	<div class="wrap">
		<div class="border-top">			
		</div>
		<div class="container-fluid">
			<div class="row">			
				<div class="col-md-3 col-sm-12 col-xs-12 align-center">
					<a href="index.php">
						<div class="logo-steps">							
						</div>
					</a>
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12 top-select align-center">
					<h3>
						<div class="input-group date top-input">
							<div class="datepicker form-control ondate"><?php echo $_SESSION['Passengers']." passenger(s)"; ?></div>
						</div>
						<br><div class="top-divider"></div>
						<span class="top-letter">are flying from</span>
						<br>
						<div class="input-group date top-input">
							<div class="datepicker form-control ondate"><?php echo $_SESSION['Departure']; ?></div>
						</div>
						<br><div class="top-divider"></div>
						<span class="top-letter">to</span>
						<br>
						<div class="input-group date top-input">
							<div class="datepicker form-control ondate"><?php echo $_SESSION['Destination']; ?></div>
						</div>
						<br><div class="top-divider"></div>
						<span class="top-letter">on</span>
						<br>
						<div class="input-group date top-input">
							<div class="datepicker form-control ondate"><?php echo $_SESSION['date']; ?></div>
						</div>		
					</h3>
				</div>
			</div>	
		</div>
		<div class="container-fluid steps-bar">
			<div class="container">
				<div class="row steps-align">
					<div class="col-md-3 col-sm-3 col-xs-3 text-center">
							<span class="step-number"><a href="step2.php" class="fa fa-arrow-left"></a></span>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-6 text-center current-page">
						<div class="round">
							<span class="step-number">3</span>
						</div>Bid
					</div>
					<div class="col-md-3 col-sm-3 col-xs-3 text-center">
							<span class="step-number"><a href="step4.php" class="fa fa-arrow-right"></a></span>
					</div>
				</div>
			</div>			
		</div>
		<div class="container-fluid form-part middle-content">
			<div class="container">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="journey-plan">
					<div class="col-md-12">
						<div class="col-sm-4 dep-des text-center">
							<p><?php echo $_SESSION['Departure']; ?>-India</p>
							<h2><?php echo $show_Dep; ?> <?php echo $dep_time; ?></h2>
							<p><?php echo $_SESSION['date']; ?></p>
							<p><?php echo $_SESSION['Departure']; ?>,T-1</p>
						</div>
						<div class="col-sm-4 dep-des">
							<img src="assets/images/ticket-fly.jpg" class="img-responsive" style="width:100%;">					
						</div>
						<div class="col-sm-4 dep-des text-center">
							<p><?php echo $_SESSION['Destination']; ?>-India</p>
							<h2><?php echo $show_Des; ?> <?php echo $des_time; ?></h2>
							<p><?php echo $_SESSION['date']; ?></p>
							<p><?php echo $_SESSION['Destination']; ?>,T-3</p>
						</div>
					</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
				<div class="divider"></div>
				<div class="col-md-8 col-md-offset-2">
					<div class="detail-box">
						<h3>TRAVEL DETAILS</h3>
						<table class="table table-bordered">
							<tbody>
								<tr>
									<td class="text-left"><h4>Departure</h4></td>
									<td class="text-left"><h4><?php echo $_SESSION['Departure']; ?></h4></td>
								</tr>
								<tr>
									<td class="text-left"><h4>Destination</h4></td>
									<td class="text-left"><h4><?php echo $_SESSION['Destination']; ?></h4></td>
								</tr>
								<tr>
									<td class="text-left"><h4>Date of travel</h4></td>
									<td class="text-left"><h4><?php echo $_SESSION['date']; ?></h4></td>
								</tr>
								<tr>
									<td class="text-left"><h4>Total No of passengers</h4></td>
									<td class="text-left"><h4><?php echo $_SESSION['Passengers']; ?></h4></td>
								</tr>
								<tr>
									<td class="text-left"><h4>Time Zone</h4></td>
									<td class="text-left"><h4><?php echo $_SESSION['travel-time']; ?></h4></td></td>
								</tr>
								<tr>
									<td class="text-left"><h4>Travel Plan</h4></td>
									<td class="text-left"><h4><?php echo $_SESSION['travel-paln']; ?></h4></td></td>
								</tr>
								<tr>
									<td class="text-left"><h4>Stoppage Preferences</h4></td>
									<td class="text-left"><h4><?php echo $_SESSION['stoppage']; ?><h4></td></td>
								</tr>
								<tr>
									<td class="text-left"><h4>Luggage</h4></td>
									<td class="text-left"><h4><?php echo $_SESSION['luggage']; ?></h4></td>
								</tr>
								<tr>
									<td class="text-left"><h4>Return Date</h4></td>
									<td class="text-left"><h4><?php echo $_SESSION['re_date']; ?></h4></td>
								</tr>
							</tbody>							
						</table>
					</div>
				</div>
				<div class="col-md-8 col-md-offset-2">
					<div class="detail-box" style="margin-bottom:25px;">
						<h3>YOUR DETAILS</h3>
						<div class="col-md-12">
							<div class="col-md-6 text-left ydetails">
							<h4>Name:</h4>							
							<h5><?php echo $_SESSION['fname1']." ".$_SESSION['lname1'];?></h5>
							<h4>Age:</h4>
							<h5><?php echo $_SESSION['age1']; ?></h5>
							<h4>Contact Number:</h4>
							<h5><?php echo $_SESSION['number1']; ?></h5>
							<h4>E-mail:</h4>
							<h5><?php echo $_SESSION['mail']; ?></h5>
							</div>
						</div>
					</div>
				</div>				
				<div class="col-md-8 col-md-offset-2">
					<div class="detail-box passenger-box" style="min-width:220px;">
						<h3>PASSENGER DETAILS</h3>
						<table class="table table-bordered">
							<thead>
								<tr>
									<th><h4>Name</h4></th>
									<th><h4>Age</h4></th>
								</tr>
							</thead>
							<tbody>
								<tr id="pass1">
									<td class="text-left"><h4><?php echo $_SESSION['fname1']." ".$_SESSION['lname1'];?></h4></td>
									<td class="text-left"><h4><?php echo $_SESSION['age1']; ?></h4></td>							
								</tr>
								<tr id="pass2">
									<td class="text-left"><h4><?php echo $_SESSION['fname2']." ".$_SESSION['lname2'];?></h4></td>
									<td class="text-left"><h4><?php echo $_SESSION['age2']; ?></h4></td>
								</tr>
								<tr id="pass3">
									<td class="text-left"><h4><?php echo $_SESSION['fname3']." ".$_SESSION['lname3'];?></h4></td>
									<td class="text-left"><h4><?php echo $_SESSION['age3']; ?></h4></td>
								</tr>
								<tr id="pass4">
									<td class="text-left"><h4><?php echo $_SESSION['fname4']." ".$_SESSION['lname4'];?></h4></td>
									<td class="text-left"><h4><?php echo $_SESSION['age4']; ?></h4></td>
								</tr>
								<tr id="pass5">
									<td class="text-left"><h4><?php echo $_SESSION['fname5']." ".$_SESSION['lname5'];?></h4></td>
									<td class="text-left"><h4><?php echo $_SESSION['age5']; ?></h4></td>
								</tr>
								<tr id="pass6">
									<td class="text-left"><h4><?php echo $_SESSION['fname6']." ".$_SESSION['lname6'];?></h4></td>
									<td class="text-left"><h4><?php echo $_SESSION['age6']; ?></h4></td>
								</tr>
								<tr id="pass7">
									<td class="text-left"><h4><?php echo $_SESSION['fname7']." ".$_SESSION['lname7'];?></h4></td>
									<td class="text-left"><h4><?php echo $_SESSION['age7']; ?></h4></td>
								</tr>
								<tr id="pass8">
									<td class="text-left"><h4><?php echo $_SESSION['fname8']." ".$_SESSION['lname8'];?></h4></td>
									<td class="text-left"><h4><?php echo $_SESSION['age8']; ?></h4></td>
								</tr>
								<tr id="pass9">
									<td class="text-left"><h4><?php echo $_SESSION['fname9']." ".$_SESSION['lname9'];?></h4></td>
									<td class="text-left"><h4><?php echo $_SESSION['age9']; ?></h4></td>
								</tr>
								<tr id="pass10">
									<td class="text-left"><h4><?php echo $_SESSION['fname10']." ".$_SESSION['lname10'];?></h4></td>
									<td class="text-left"><h4><?php echo $_SESSION['age10']; ?></h4></td>
								</tr>
							</tbody>							
						</table>
					</div>
				</div>
				<div class="col-md-8 col-md-offset-2">
					<div class="detail-box">
						<h3>CONFIRM YOUR BID</h3>
						<div class="bid-amt">
						<h2><i class="fa fa-inr"></i><?php echo $_SESSION['bidamount']; ?></h2>
						</div>
					</div>					
				</div>
				<div class="clearfix"></div>
				<div class="divider"></div>
				<div class="col-md-8 col-md-offset-2 payment-part">
					<img src="assets/images/payment-method.png" class="img-responsive" width="100%">
				</div>
				<div class="col-md-8 col-md-offset-2 conditions">
					<ul>
						<li>Your airline tickets are non-refundable, non-transferable and non-changeable.</li>
						<li>Your tickets will be round-trip, coach class tickets issued on one of CanFly's partner airlines. You must fly on the flights assigned to you. Upgrades and standbys are not available. If you do not take your outbound flight, the airlines will automatically cancel the remainder of your reservation. If any part of the ticket is unused it has no value after ticketed departure time.</li>
						<li>Name Your Own Price tickets issued through CanFly are not eligible for frequent flyer miles. CanFly customers are protected by the same airline regulations extended to all passengers, including protection against overbookings and baggage loss.</li>
						<li>If we find an airline that accepts your price, we'll immediately purchase your tickets using the payment information you provided.</li>
						<li>You will be issued electronic tickets. Remember to bring a valid government-issued photo ID with you to check-in</li>
					</ul>
				</div>
				<div class="confirm-bid">
				<form method="POST" accept-charset="utf-8" action="step3.php" onclick="return validate(this)">
					<div class="checkbox">
						<label>
							<input type="checkbox" value="accepted" name="confirm-bid" required>
							I agree to Honor Payment by Default if the Bidding is Successfully
						</label>
					</div>
					<div class="btn-bottom" style="margin-top:50px;">
						<input type="submit" class="btn home-btn" value="BID" name="confirm">
					</div>
				</form>
				</div>
			</div>			
		</div>
	</div>
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/bootstrap-select.min.js"></script>
	<script type="text/javascript" src="assets/js/datepicker.js"></script>
	<script src="assets/js/icheck.min.js"></script>
	<script>
		$(document).ready(function(){
		  $('input').iCheck({
		    checkboxClass: 'icheckbox_square-yellow',
		    radioClass: 'iradio_square-yellow'
		  });
		});
		$(document).ready(function ($) {
        $(window).load(function () {
            setTimeout(function(){
                $('#preloader').fadeOut('slow', function () {
                });
            },2000);

        });  
    });    
	</script>	
</body>
</html>