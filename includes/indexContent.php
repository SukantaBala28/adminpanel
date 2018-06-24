<div class="adminLogin mt-3">
	<h4 class="text-center">Admin Login</h4>
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-md-6">
				<form action="" method="POST">
				  <div class="form-group">
				    <label for="userEmail">Email address</label>
				    <input type="email" class="form-control" id="userEmail" name="userEmail" placeholder="Enter email">
				  </div>
				  <div class="form-group">
				    <label for="userPassword">Password</label>
				    <input type="password" class="form-control" id="userPassword" name="userPassword" placeholder="Password">
				  </div>
				  <button type="submit" class="btn btn-primary" name="log_dashboard" >Submit</button>
				  <span><?php echo  $log_err; ?></span>
				</form>
			</div>
		</div>
	</div>
</div>
