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