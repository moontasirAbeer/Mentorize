<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <title>Dashboard</title>
        <meta name="generator" content="Dashboard" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/dashboard.css'); ?>" />
		<script src="js/menteeDash.js"></script>
        
        <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head> 

    <body class="universal">
        
    <!-- Header -->
    <div id="top-nav" class="navbar navbar-inverse navbar-static-top">
	  <div class="container">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	          <span class="icon-toggle"></span>
	      </button>
	      <a class="navbar-brand" href="#">Personal Information</a>
	    </div>
	    <div class="navbar-collapse collapse">
	      <ul class="nav navbar-nav navbar-right">
	        
	        <li class="dropdown">
	          <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#"><i class="glyphicon glyphicon-user"></i> 
	          	<!--Name of user obtained from database--> <span class="caret"></span></a>
	          <ul id="g-account-menu" class="dropdown-menu" role="menu">
	            <li><a href="#">My Profile</a></li>
	          </ul>
	        </li>
	        <li><a href="#"><i class="glyphicon glyphicon-lock"></i> Logout</a></li>
	      </ul>
	    </div>
	  </div><!-- /container -->
	</div>
	<!-- /Header -->