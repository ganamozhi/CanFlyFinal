<?php
ob_start();
error_reporting(0);
session_start();
if (isset($_POST['fly']))
{
	$start=$_POST['Departure'];
	$end=$_POST['Destination'];
	$date=$_POST['date'];
	$Passengers=$_POST['Passengers'];
	if(($date != '')&&($Passengers != '')&&($start != '')&&($end != ''))
	{
		if($start != $end)
		{
			$_SESSION['Departure']=$start;
			$_SESSION['Destination']=$end;
			$_SESSION['date']=$date;
			$_SESSION['Passengers']=$Passengers;
			header('Location:step2.php');
		}
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CanFly</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/datepicker.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600' rel='stylesheet' type='text/css'>
     
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
    <div id="wrapper">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li>
                    <a href="index.php" id="close">
                       <i class="fa fa-home active"></i>&nbsp;&nbsp;Home
                    </a>
                </li>
                <li>
                    <a href="#">
                    <i class="fa fa-globe active"></i>&nbsp;&nbsp;About Us</a>
                </li>
                <li>
                    <a href="#">
                    <i class="fa fa-map-marker active"></i>&nbsp;&nbsp;Contact Us</a>
                </li>
                <li>
                    <a href="#">
                    <i class="fa fa-info active"></i>&nbsp;&nbsp;Policy</a>
                </li>
            </ul>
        </div>                            
        <div class="wrap">
        	<div class="border-top">            
        	</div>
        	<div id="page-content-wrapper">
          	<a href="#menu-toggle" class="fa fa-bars nav-btn" id="menu-toggle"></a>
          	</div>
        	<div class="container">
            	<div class="logo-section">
                	<a href="index.php">
                    	<div class="logo-img">
                        	<img src="assets/images/logo.png">
                    	</div>
                	</a>
                	<div class="banner-box">
                    	<h1>Let us know your travel plan.</h1>
                    	<form method="POST" accept-charset="utf-8" id="step1" name="step1">
                        	<div class="col-md-12 banner-inner-box">
                            	<div class="row">
                                	<div class="col-md-3 col-sm-6 col-xs-12 teen" style="border-right: 1px solid #ccc;margin-bottom:10px;">
                                         
                                    	<select required class="form-control" id="departure" name="Departure"  title="Departure">
                                        	<option value="">Departure</option>
                        	                <option value="Chennai">Chennai</option>
                            	            <option value="Bangalore">Bangalore</option>
                                	        <option value="Delhi">Delhi</option>
                                    	    <option value="Coimbatore">Coimbatore</option>
                                        	<option value="Goa">Goa</option>
                                    	</select>
                                	</div> 
                                	<div class="col-md-3 col-sm-6 col-xs-12 teen" style="border-right: 1px solid #ccc;margin-bottom:10px;">
                                    	<select required  class="form-control" id="destination" name="Destination" title="Destination" onchange="if(step1.departure.value == this.value) this.value='';">
                                        	<option  value="">Destination</option>
                                        	<option value="Chennai">Chennai</option>
                                        	<option value="Bangalore">Bangalore</option>
                                        	<option value="Delhi">Delhi</option>
                                        	<option value="Coimbatore">Coimbatore</option>
                                        	<option value="Goa">Goa</option>
                                   		</select>
                                	</div>
                                	<div class="col-md-3 col-sm-6 col-xs-12 teen" style="margin-bottom:10px;">              
                                    	<div class="input-group" id="datetimepicker1" title="Date of travel">
                                        	<input type="text" id="datepicker" name="date" class="datepicker form-control" placeholder="Date of travel" data-date-format="dd/mm/yyyy" data-provide="datepicker"/ required>
                                        	<span class="input-group-addon">
                                            	<span class="fa fa-calendar-o">
                                            	</span>
                                        	</span>
                                    	</div>
                                	</div>
                                	<div class="col-md-3 col-sm-6 col-xs-12 teen" style="border-left: 1px solid #ccc;">
                                    	<select required class="form-control" id="passenger" name="Passengers" title="No. of passengers">
                                        	<option class="bs-title-option" value="">No. of passengers</option>
                                        	<option value="1" name="passenger1">1 passenger</option>
                                        	<option value="2" name="passenger2">2 passengers</option>
                                        	<option value="3" name="passenger3">3 passengers</option>
                                        	<option value="4" name="passenger4">4 passengers</option>
                                        	<option value="5" name="passenger5">5 passengers</option>
                                        	<option value="6" name="passenger6">6 passengers</option>
                                        	<option value="7" name="passenger7">7 passengers</option>
                                        	<option value="8" name="passenger8">8 passengers</option>
                                        	<option value="9" name="passenger9">9 passengers</option>
                                        	<option value="10" name="passenger10">10 passengers</option>
                                    	</select>
                                	</div>
                            	</div>
                        	</div>
                        	<input type="submit" class="btn home-btn" name="fly" value="LETS FLY">
                    	</form>
                	</div>
            	</div>
        	</div>
    	</div>
    </div>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    $("#menu-toggle,#close").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
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
    
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="assets/js/datepicker.js"></script> 
</body>
</html>
