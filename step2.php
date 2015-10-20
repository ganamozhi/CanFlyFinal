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

if (isset($_POST['startbiding']))
	{
		$fname1=$_POST['fname1'];
		$fname2=$_POST['fname2'];
		$fname3=$_POST['fname3'];
		$fname4=$_POST['fname4'];
		$fname5=$_POST['fname5'];
		$fname6=$_POST['fname6'];
		$fname7=$_POST['fname7'];
		$fname8=$_POST['fname8'];
		$fname9=$_POST['fname9'];
		$fname10=$_POST['fname10'];
		$lname1=$_POST['lname1'];
		$lname2=$_POST['lname2'];
		$lname3=$_POST['lname3'];
		$lname4=$_POST['lname4'];
		$lname5=$_POST['lname5'];
		$lname6=$_POST['lname6'];
		$lname7=$_POST['lname7'];
		$lname8=$_POST['lname8'];
		$lname9=$_POST['lname9'];
		$lname10=$_POST['lname10'];
		$passtype1=$_POST['number1'];
		$passtype2=$_POST['number2'];
		$passtype3=$_POST['number3'];
		$passtype4=$_POST['number4'];
		$passtype5=$_POST['number5'];
		$passtype6=$_POST['number6'];
		$passtype7=$_POST['number7'];
		$passtype8=$_POST['number8'];
		$passtype9=$_POST['number9'];
		$passtype10=$_POST['number10'];
		$email=$_POST['mail'];
		$age1=$_POST['age1'];
		$age2=$_POST['age2'];
		$age3=$_POST['age3'];
		$age4=$_POST['age4'];
		$age5=$_POST['age5'];
		$age6=$_POST['age6'];
		$age7=$_POST['age7'];
		$age8=$_POST['age8'];
		$age9=$_POST['age9'];
		$age10=$_POST['age10'];
		$time=$_POST['travel-time'];
		$plan=$_POST['travel-paln'];
		$return=$_POST['re_date'];
		$stops=$_POST['stoppage'];
		$luggages=$_POST['luggage'];
		$bidamt=$_POST['bidamount'];
		$_SESSION['fname1']=$fname1;
		$_SESSION['fname2']=$fname2;
		$_SESSION['fname3']=$fname3;
		$_SESSION['fname4']=$fname4;
		$_SESSION['fname5']=$fname5;
		$_SESSION['fname6']=$fname6;
		$_SESSION['fname7']=$fname7;
		$_SESSION['fname8']=$fname8;
		$_SESSION['fname9']=$fname9;
		$_SESSION['fname10']=$fname10;
		$_SESSION['lname1']=$lname1;
		$_SESSION['lname2']=$lname2;
		$_SESSION['lname3']=$lname3;
		$_SESSION['lname4']=$lname4;
		$_SESSION['lname5']=$lname5;
		$_SESSION['lname6']=$lname6;
		$_SESSION['lname7']=$lname7;
		$_SESSION['lname8']=$lname8;
		$_SESSION['lname9']=$lname9;
		$_SESSION['lname10']=$lname10;
		$_SESSION['number1']=$passtype1;
		$_SESSION['number2']=$passtype2;
		$_SESSION['number3']=$passtype3;
		$_SESSION['number4']=$passtype4;
		$_SESSION['number5']=$passtype5;
		$_SESSION['number6']=$passtype6;
		$_SESSION['number7']=$passtype7;
		$_SESSION['number8']=$passtype8;
		$_SESSION['number9']=$passtype9;
		$_SESSION['number10']=$passtype10;
		$_SESSION['mail']=$email;
		$_SESSION['age1']=$age1;
		$_SESSION['age2']=$age2;
		$_SESSION['age3']=$age3;
		$_SESSION['age4']=$age4;			
		$_SESSION['age5']=$age5;
		$_SESSION['age6']=$age6;
		$_SESSION['age7']=$age7;
		$_SESSION['age8']=$age8;
		$_SESSION['age9']=$age9;
		$_SESSION['age10']=$age10;			
		$_SESSION['travel-time']=$time;
		$_SESSION['travel-paln']=$plan;
		$_SESSION['re_date']=$return;
		$_SESSION['stoppage']=$stops;
		$_SESSION['luggage']=$luggages;
		$_SESSION['bidamount']=$bidamt;		
		header('Location:step3.php');
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
							<span class="step-number"><a href="index.php" class="fa fa-arrow-left"></a></span>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-6 text-center current-page">
						<div class="round">
							<span class="step-number">2</span>
						</div>
						Preferences
					</div>
					<div class="col-md-3 col-sm-3 col-xs-3 text-center">
							<span class="step-number"><a href="step3.php" class="fa fa-arrow-right"></a></span>
					</div>
				</div>
			</div>			
		</div>
		<div class="container-fluid form-part form-align">
			<div class="col-md-12 margin-top">
				<form method="POST" accept-charset="utf-8">
					<div class="form-group">
						<div id="pass1">
						<h3>Passenger1 Details</h3>
						<div class="col-md-2 col-sm-6 col-xs-12 input-sapce">
							<input class="form-control" type="text" name="fname1" placeholder="First Name">
						</div>
						<div class="col-md-2 col-sm-6 col-xs-12 input-sapce">
							<input class="form-control" type="text" name="lname1" placeholder="Last Name">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 input-sapce">
							<input class="form-control" type="email" name="mail" placeholder="* Ticket can be sent to this E-mail address *">
						</div>
						<div class="col-md-2 col-sm-6 col-xs-12 input-sapce">
							<input class="form-control" type="number" name="number1" placeholder="Mobile number">
						</div>
						<div class="col-md-2 col-sm-6 col-xs-12 input-sapce">
							<input class="form-control" type="number" name="age1" placeholder="Age">
						</div>
						<div class="clearfix"></div>
						<br>
						</div>
						<div id="pass2">
						<h3>Passenger2 Details</h3>
						<div class="col-md-4 col-sm-6 col-xs-12 input-sapce">
							<input class="form-control" type="text" name="fname2" placeholder="First Name">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 input-sapce">
							<input class="form-control" type="text" name="lname2" placeholder="Last Name">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 input-sapce">
							<input class="form-control" type="number" name="age2" placeholder="Age">
						</div>
						<div class="clearfix"></div>
						<br>
						</div>
						<div id="pass3">
						<h3>Passenger3 Details</h3>
						<div class="col-md-4 col-sm-6 col-xs-12 input-sapce">
							<input class="form-control" type="text" name="fname3" placeholder="First Name">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 input-sapce">
							<input class="form-control" type="text" name="lname3" placeholder="Last Name">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 input-sapce">
							<input class="form-control" type="number" name="age3" placeholder="Age">
						</div>
						<div class="clearfix"></div>
						<br>
						</div>
						<div id="pass4">
						<h3>Passenger4 Details</h3>
						<div class="col-md-4 col-sm-6 col-xs-12 input-sapce">
							<input class="form-control" type="text" name="fname4" placeholder="First Name">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 input-sapce">
							<input class="form-control" type="text" name="lname4" placeholder="Last Name">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 input-sapce">
							<input class="form-control" type="number" name="age4" placeholder="Age">
						</div>
						<div class="clearfix"></div>
						<br>
						</div>
						<div id="pass5">
						<h3>Passenger5 Details</h3>
						<div class="col-md-4 col-sm-6 col-xs-12 input-sapce">
							<input class="form-control" type="text" name="fname5" placeholder="First Name">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 input-sapce">
							<input class="form-control" type="text" name="lname5" placeholder="Last Name">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 input-sapce">
							<input class="form-control" type="number" name="age5" placeholder="Age">
						</div>
						<div class="clearfix"></div>
						<br>
						</div>
						<div id="pass6">
						<h3>Passenger6 Details</h3>
						<div class="col-md-4 col-sm-6 col-xs-12 input-sapce">
							<input class="form-control" type="text" name="fname6" placeholder="First Name">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 input-sapce">
							<input class="form-control" type="text" name="lname6" placeholder="Last Name">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 input-sapce">
							<input class="form-control" type="number" name="age6" placeholder="Age">
						</div>
						<div class="clearfix"></div>
						<br>
						</div>
						<div id="pass7">
						<h3>Passenger7 Details</h3>
						<div class="col-md-4 col-sm-6 col-xs-12 input-sapce">
							<input class="form-control" type="text" name="fname7" placeholder="First Name">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 input-sapce">
							<input class="form-control" type="text" name="lname7" placeholder="Last Name">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 input-sapce">
							<input class="form-control" type="number" name="age7" placeholder="Age">
						</div>
						<div class="clearfix"></div>
						<br>
						</div>
						<div id="pass8">
						<h3>Passenger8 Details</h3>
						<div class="col-md-4 col-sm-6 col-xs-12 input-sapce">
							<input class="form-control" type="text" name="fname8" placeholder="First Name">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 input-sapce">
							<input class="form-control" type="text" name="lname8" placeholder="Last Name">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 input-sapce">
							<input class="form-control" type="number" name="age8" placeholder="Age">
						</div>
						<div class="clearfix"></div>
						<br>
						</div>
						<div id="pass9">
						<h3>Passenger9 Details</h3>
						<div class="col-md-4 col-sm-6 col-xs-12 input-sapce">
							<input class="form-control" type="text" name="fname9" placeholder="First Name">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 input-sapce">
							<input class="form-control" type="text" name="lname9" placeholder="Last Name">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 input-sapce">
							<input class="form-control" type="number" name="age9" placeholder="Age">
						</div>
						<div class="clearfix"></div>
						<br>
						</div>
						<div id="pass10">
						<h3>Passenger10 Details</h3>
						<div class="col-md-4 col-sm-6 col-xs-12 input-sapce">
							<input class="form-control" type="text" name="fname10" placeholder="First Name">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 input-sapce">
							<input class="form-control" type="text" name="lname10" placeholder="Last Name">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 input-sapce">
							<input class="form-control" type="number" name="age10" placeholder="Age">
						</div>
						<div class="clearfix"></div>
						<br>
						</div>								
					</div>
					<div class="form-group">
						<h3>Choice of time zone</h3>
						<div class="col-md-10 col-md-offset-1">
						<div class="col-md-3 col-sm-6 col-xs-12 text-left">
						<label class="checkbox-inline pad-top-bot"><input type="checkbox" value="Midnight to 6am" name="travel-time">Midnight to 6am</label>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 text-left">
						<label class="checkbox-inline pad-top-bot"><input type="checkbox" value="6am to Noon" name="travel-time">6am to Noon</label>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 text-left">
						<label class="checkbox-inline pad-top-bot"><input type="checkbox" value="Noon to 6pm" name="travel-time">Noon to 6pm</label>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 text-left">
						<label class="checkbox-inline pad-top-bot"><input type="checkbox" value="6pm to Midnight" name="travel-time">6pm to Midnight</label>
						</div>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="form-border">							
					</div>
					<div class="form-group">
						<h3>Choice of travel</h3>
						<div class="col-md-10 col-md-offset-1">
							<div class="col-md-6 col-sm-6 col-xs-12 text-left">
							<label class="radio-inline pad-top-bot"><input type="radio" name="travel-paln" value="One Way">One Way</label>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12 text-left">
							<label class="radio-inline pad-top-bot"><input type="radio" name="travel-paln" value="Round Trip">Round Trip</label>
						</div>
						</div>
					</div>
					<div class="clearfix"></div>

					<div id="re-date">
						<div class="form-group align-center">
							<h3>Choose Returning Date</h3>
							<div class="col-md-10 col-md-offset-1 return">
								<div class="col-md-4 col-sm-6 col-xs-12 text-center">
								</div>
								<div class="col-md-4 col-sm-6 col-xs-12 text-center">              
	                                <div class="input-group" id="datetimepicker1" title="Date of travel">
	                                   	<input type="text" id="datepicker" name="re_date" class="datepicker form-control" placeholder="Date of return (only for Round Trip)" data-date-format="dd/mm/yyyy" data-provide="datepicker"/>
	                                    <span class="input-group-addon">
	                                    	<span class="fa fa-calendar-o">
	                                      	</span>
	                                    </span>
	                                </div>
	                            </div>
	                            <div class="col-md-4 col-sm-6 col-xs-12 text-center">
								</div>							
							</div>
						</div>
					</div>
					<div class="clearfix"></div>

					<div class="form-border">							
					</div>
					<div class="form-group">
						<h3>Stoppage preferences</h3>
						<div class="col-md-10 col-md-offset-1">
						<div class="col-md-3 col-sm-6 col-xs-12 text-left">
						<label class="checkbox-inline pad-top-bot"><input type="checkbox" value="No Stops" name="stoppage">No Stops</label>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 text-left">
						<label class="checkbox-inline pad-top-bot"><input type="checkbox" value="One Stop" name="stoppage">One Stop</label>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 text-left">
						<label class="checkbox-inline pad-top-bot"><input type="checkbox" value="Two Stops" name="stoppage">Two Stops</label>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 text-left">
						<label class="checkbox-inline pad-top-bot"><input type="checkbox" value="Any" name="stoppage">Any</label>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="form-border">							
					</div>
					<div class="form-group">
						<h3>Luggage</h3>
							<div class="col-md-10 col-md-offset-1">
								<div class="col-md-4 col-sm-4 col-xs-12 text-left">
									<label class="radio-inline pad-top-bot"><input type="radio" name="luggage" value="No luggage">No luggage</label>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-12 text-left">
									<label class="radio-inline"><input type="radio" name="luggage" value="Hand Baggage Only">Hand Baggage Only</label>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-12 text-left">
									<label class="radio-inline pad-top-bot"><input type="radio" name="luggage" value="upto 15KG">upto 15KG</label>
								</div>							
							</div>
						<div class="clearfix"></div>
					</div>
					<div class="form-border">							
					</div>
					<div class="form-group">
						<div class="col-md-8 col-md-offset-2 space-top">
							<div class="col-md-1 text-center">
								<i class="fa fa-inr fa-3x"></i>
							</div>
							<div class="col-md-11">
								<input class="form-control" type="number" id="bid-amt" name="bidamount" placeholder="Enter Your Bid Amount" required>
							</div>											
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="form-border">							
					</div>
					<div class="btn-bottom" style="margin-bottom:50px;">
						<input type="submit" class="btn home-btn" value="START BIDING" name="startbiding" onclick="return validatetwo(this.form)">
					</div>
				</form>
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
		$(document).ready(function(){
    	$('input[type="radio"]').onClick(function(){
        if($(this).attr("value")=="One Way"){
             $("#re-date").css("display", "none");
        }
        else
        {
        	$("#re-date").css("display", "block");
        }
        });
        }); 
		  
	</script>
	<script type="text/javascript">
	function validatetwo(form)
	{
		//Time Zone Validation
		var tzone = document.getElementsByName('travel-time');
		var zon = -1;
		for (var i=0; i<tzone.length; i++) 
		{ 
			if (tzone[i].checked)
			{
			zon = i;
			}
		}
		if (zon == -1)
		{
		alert("Please select Time Zone");
		return false;
		} 

		//Travel Plan Validation
		var tplan = document.getElementsByName('travel-paln');
		var pln = -1;
		for (var j=0; j<tplan.length; j++) 
		{ 
			if (tplan[j].checked)
			{
			pln = j;
			}
		}
		if (pln == -1)
		{
		alert("Please select Travel Plan");
		return false;
		} 

		//Stoppages Preference Validation
		var tstop = document.getElementsByName('stoppage');
		var stp = -1;
		for (var k=0; k<tstop.length; k++) 
		{ 
			if (tstop[k].checked)
			{
			stp = k;
			}
		}
		if (stp == -1)
		{
		alert("Please select Stoppage Preference");
		return false;
		} 

		//Luggage Validation
		var tlug = document.getElementsByName('luggage');
		var lug = -1;
		for (var l=0; l<tlug.length; l++) 
		{ 
			if (tlug[l].checked)
			{
			lug = l;
			}
		}
		if (lug == -1)
		{
		alert("Please select luggages Type");
		return false;
		} 
		var bid=document.getElementById("bid-amt").value;
		var numbReg = /^[0-9]+$/;
		if (bid == null || bid == ""){  
	  alert("Please Enter the Bid Amount'");  
	  return false;  
		}
		if (!bid.match(numbReg)) {
		alert("Please Enter Bid Amount correctly");
		return false;
		}
	}
	</script>
</body>
</html>