<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <title>Dashboard</title>
        <meta name="generator" content="Dashboard" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/dashboard.css" rel="stylesheet">
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
	      <a class="navbar-brand" href="#">Dashboard</a>
	    </div>
	    <div class="navbar-collapse collapse">
	      <ul class="nav navbar-nav navbar-right">
	        
	        <li class="dropdown">
	          <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#"><i class="glyphicon glyphicon-user"></i> Admin <span class="caret"></span></a>
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

	<!-- Main -->
	<div class="container">
	<div class="row">
		<div class="col-md-3">
	      <!-- Left column -->
	      <a href="#"><strong><i class="glyphicon glyphicon-wrench"></i> Tools</strong></a>  
	      
	      <hr>
	      
	      <ul class="list-unstyled">
	        <li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#userMenu">
	          <h5>Settings <i class="glyphicon glyphicon-chevron-down"></i></h5>
	          </a>
	            <ul class="list-unstyled collapse in" id="userMenu">
	                <li class="active"> <a href="#"><i class="glyphicon glyphicon-home"></i> Home</a></li>
	                <li><a href="#"><i class="glyphicon glyphicon-envelope"></i> Messages <span class="badge badge-info">4</span></a></li>
	                <li><a href="#"><i class="glyphicon glyphicon-cog"></i> Options</a></li>
	                <li><a href="#"><i class="glyphicon glyphicon-comment"></i> Shoutbox</a></li>
	                <li><a href="#"><i class="glyphicon glyphicon-off"></i> Logout</a></li>
	            </ul>
	        </li>
	        <li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#menu2">
	          <h5>Reports <i class="glyphicon glyphicon-chevron-right"></i></h5>
	          </a>
	        
	            <ul class="list-unstyled collapse" id="menu2">
	                <li><a href="#">Information &amp; Stats</a>
	                </li>
	                <li><a href="#">Requests</a>
	                </li>
	                <li><a href="#">Alerts</a>
	                </li>
	            </ul>
	        </li>
	      </ul>
	           
	      <hr>
	      
	      <a href="#"><strong><i class="glyphicon glyphicon-link"></i> Resources</strong></a>  
	      
	      <hr>
	      
	      <ul class="nav nav-pills nav-stacked">
	        <li class="nav-header"></li>
	        <li><a href="#"><i class="glyphicon glyphicon-list"></i> Layouts &amp; Templates</a></li>
	        <li><a href="#"><i class="glyphicon glyphicon-briefcase"></i> Toolbox</a></li>
	        <li><a href="#"><i class="glyphicon glyphicon-link"></i> Widgets</a></li>
	        <li><a href="#"><i class="glyphicon glyphicon-list-alt"></i> Reports</a></li>
	        <li><a href="#"><i class="glyphicon glyphicon-book"></i> Pages</a></li>
	        <li><a href="#"><i class="glyphicon glyphicon-star"></i> Social Media</a></li>
	      </ul>
	  	</div><!-- /col-3 -->
	    <div class="col-md-9">
	      	
	      <!-- column 2 -->	
	      <ul class="list-inline pull-right">
	         <li><a href="#"><i class="glyphicon glyphicon-cog"></i></a></li>
	         <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-comment"></i><span class="count">3</span></a><ul class="dropdown-menu" role="menu"><li><a href="#">1. Is there a way..</a></li><li><a href="#">2. Hello, admin. I would..</a></li><li><a href="#"><strong>All messages</strong></a></li></ul></li>
	         <li><a href="#"><i class="glyphicon glyphicon-user"></i></a></li>
	         <li><a title="Add Widget" data-toggle="modal" href="#addWidgetModal"><span class="glyphicon glyphicon-plus-sign"></span> Add Widget</a></li>
	      </ul>
	      <a href="#"><strong><i class="glyphicon glyphicon-dashboard"></i> My Dashboard</strong></a>  
	      
	      	<hr>
	      
			<div class="row">
			<!-- center left-->	
				<div class="col-md-6">

				</div>
				<div class="well">Inbox Messages <span class="badge pull-right">3</span></div>              		
				<hr>              
				<!--tabs-->
				<div class="container">
					<div class="col-md-4">
						<ul class="nav nav-tabs" id="myTab">
							<li class="active"><a href="#profile" data-toggle="tab" onclick="showProfile()">Profile</a></li>
							<li><a href="#messages" data-toggle="tab" onclick="showMessages()">Messages</a></li>
							<li><a href="#settings" data-toggle="tab" onclick="showSettings()">Settings</a></li>
						</ul>
					</div> 
					<!-- New item 5/7/2014 -->
					<div id="profile" class="hidden">
						<form role="form">
							<p></br></br></p>
							<div class="form-group">
								<label for="showUsername">Chosen Username</label>
								<input type="text" class="form-control" id="showUsername" placeholder="Chosen Username" disabled>
							</div>
							<div class="form-group">
								<label for="realName">Name</label>
								<input type="text" class="form-control" id="realName" placeholder="Enter your Name">
							</div>
							<div class="form-group">
								<label for="showEmail">Email Address</label>
								<input type="email" class="form-control" id="showEmail" placeholder="Enter Email">
							</div>
							
							<!-- ??? -->
							<div class="dropdown">
								<a data-toggle="dropdown" href="#">Industry</a>
								<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
									Industries here...
								</ul>
							</div>

							<div class="form-group">
								<label for="specTag">Areas of Specialization</label>
								<input type="text" data-role="tagsinput" class="form-control" id="specTag" placeholder="Enter your fields of specialization here. These are interpreted as tags.">
							</div>
							
							<div class="form-group">
								<label for="experience">Past Experience</label>
								<textarea class="form-control" rows="5" id="experience" placeholder="Write a brief excerpt of your past experience.">
								</textarea>
							</div>
							
							<div class="form-group">
								<label for="oldPassword">Enter Old Password</label>
								<input type="password" class="form-control" id="oldPassword" placeholder="Enter Old Password">
							</div>
							<div class="form-group">
								<label for="newPassword">Enter New Password</label>
								<input type="password" class="form-control" id="inputPassword" placeholder="Enter New Password">
							</div>
							<div class="form-group">
								<label for="conFirmPassword">Confirm New Password</label>
								<input type="password" class="form-control" id="confirmPassword" placeholder="Confirm New Password">
							</div>
							<button type="submit" class="btn btn-success" id="submitChanges">Submit Changes</button>
						</form>
					</div>
					
					<div id="messages" class="hidden">
						<form role="form">
							<div class="form-group">
								<label class="sr-only" for="testing">Testing</label>
								<input type="text" class="form-control" id="testing" placeholder="Just testing...">
							</div>
							
							<button type="submit" class="btn btn-success" id="testButton">Le Test Button</button>
						</form>
					</div>
					
					<div id="settings" class="hidden">
						<form role="form">
							<div class="form-group">
								<label class="sr-only" for="testing2">Testing</label>
								<input type="text" class="form-control" id="testing2" placeholder="Just testing part 2...">
							</div>
							
							<button type="submit" class="btn btn-success" id="testButton2">Le Test Button Deux</button>
						</form>
					</div>
					<!-- End new item-->
				</div>
			</div>
		</div>
	</div>
	</div>
	<!-- /Main -->

	<footer class="text-center"></footer>

	<div class="modal" id="addWidgetModal">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	        <h4 class="modal-title">Add Widget</h4>
	      </div>
	      <div class="modal-body">
	        <p>Add a widget stuff here..</p>
	      </div>
	      <div class="modal-footer">
	        <a href="#" data-dismiss="modal" class="btn">Close</a>
	        <a href="#" class="btn btn-primary">Save changes</a>
	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dalog -->
	</div><!-- /.modal -->



	  
	        
	        <script type='text/javascript' src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


	        <script type='text/javascript' src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>


	        <!-- JavaScript jQuery code from Bootply.com editor -->
	        
	        <script type='text/javascript'>
	        
	        $(document).ready(function() {
	        
	            $(".alert").addClass("in").fadeOut(4500);

	/* swap open/close side menu icons */
	$('[data-toggle=collapse]').click(function(){
	  	// toggle icon
	  	$(this).find("i").toggleClass("glyphicon-chevron-right glyphicon-chevron-down");
	});
				
				
				$('#myTab a').click(function (e) {
					e.preventDefault()
					$(this).tab('show')
				})
				
				$(function () {
					$('#myTab a:last').tab('show')
				})

	        
	        </script>
			
			
			
		
	        
    </body>
</html>