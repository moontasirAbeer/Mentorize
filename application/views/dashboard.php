
	
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

	