
	    <div class="col-md-10">
	      	
	      <!-- column 2 -->	
	      <ul class="list-inline pull-right">
	         <li><a href="#"><i class="glyphicon glyphicon-cog"></i></a></li>
	         <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-comment"></i><span class="count">3</span></a><ul class="dropdown-menu" role="menu"><li><a href="#">1. Is there a way..</a></li><li><a href="#">2. Hello, admin. I would..</a></li><li><a href="#"><strong>All messages</strong></a></li></ul></li>
	         <li><a href="#"><i class="glyphicon glyphicon-user"></i></a></li>
	         <li><a title="Add Widget" data-toggle="modal" href="#addWidgetModal"><span class="glyphicon glyphicon-plus-sign"></span> Add Widget</a></li>
	      </ul>
	      <a href="#"><strong><i class="glyphicon glyphicon-dashboard"></i> Profile</strong></a>  
			<div class="row">
			<!-- center left-->	
				<div class="col-md-6">
					<div id="profile" class="">
						<div class="container">
	<div class="row">
		<div class="col-lg-8">
    	 <div class="well profile">
            <div class="col-sm-12">
                <div class="col-xs-12 col-sm-8">
                    <h2><?php echo $profile[0]['user_name']; ?></h2>
                    <p><strong>Primary Industry: </strong> <?php echo $profile[0]['industry_primary']; ?> </p>
                    <p><strong>Hobbies: </strong> Hobbies go here. </p>
                    <p><strong>Skills: </strong><?php echo $profile[0]['specializations']; ?></p>
                    <p><strong>Experience: </strong><?php echo $profile[0]['experience']; ?></p>
                </div>             
                <div class="col-xs-12 col-sm-4 text-center">
                    <figure>
                        <img src="http://www.localcrimenews.com/wp-content/uploads/2013/07/default-user-icon-profile.png" alt="" class="img-circle img-responsive">
                        <figcaption class="ratings">
                            <p>Ratings
                            <a href="#">
                                <span class="fa fa-star"></span>
                            </a>
                            <a href="#">
                                <span class="fa fa-star"></span>
                            </a>
                            <a href="#">
                                <span class="fa fa-star"></span>
                            </a>
                            <a href="#">
                                <span class="fa fa-star"></span>
                            </a>
                            <a href="#">
                                 <span class="fa fa-star-o"></span>
                            </a> 
                            </p>
                        </figcaption>
                    </figure>
                </div>
            </div>            
            <div class="col-xs-12 divider text-center">
                <div class="col-xs-12 col-sm-4 emphasis">
                    <h2><strong> 20,7K </strong></h2>                    
                    <p><small>Followers</small></p>
                    <button class="btn btn-success btn-block"><span class="fa fa-plus-circle"></span> Follow </button>
                </div>
                <div class="col-xs-12 col-sm-4 emphasis">
                    <h2><strong>245</strong></h2>                    
                    <p><small>Following</small></p>
                    <button class="btn btn-info btn-block"><span class="fa fa-user"></span> View Profile </button>
                </div>
                <div class="col-xs-12 col-sm-4 emphasis">
                    <h2><strong>43</strong></h2>                    
                    <p><small>Snippets</small></p>
                    <div class="btn-group dropup btn-block">
                      <button type="button" class="btn btn-primary"><span class="fa fa-gear"></span> Options </button>
                      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                      </button>
                      <ul class="dropdown-menu text-left" role="menu">
                        <li><a href="#"><span class="fa fa-envelope pull-right"></span> Send an email </a></li>
                        <li><a href="#"><span class="fa fa-list pull-right"></span> Add or remove from a list  </a></li>
                        <li class="divider"></li>
                        <li><a href="#"><span class="fa fa-warning pull-right"></span>Report this user for spam</a></li>
                        <li class="divider"></li>
                        <li><a href="#" class="btn disabled" role="button"> Unfollow </a></li>
                      </ul>
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
		</div>
	</div>
	</div>
	<!-- /Main -->
