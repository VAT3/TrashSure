<html>
<head>
<title>Login TrashSure</title>
<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>-->
<script src="js/jquery.min.js"></script>
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
<link rel="stylesheet" href="{{asset('css/style.css')}}" />
<script src="assets/js/bootstrap.min.js"></script>
<!-- <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script> -->

</head>
<body class="index_content">
		<div class="navbar navbar-inverse navbar-fixed-top headroom" >
			<div class="container">
				<div class="navbar-header">
					<!-- Button for smallest screens -->
				</div>
			</div>
		</div> 
	<div class="container">
		<div class="indexpage">
			<div class="col-md-7">
				<h2>Welcome!</h2><br>
				<h3>Please Login with your own Account</h3>
			</div>
			<div class="col-md-5">
				<form method="post" action="/login">
				    <input name="_token" hidden value="{!! csrf_token() !!}" />
					<div class="form-group">
						<label for="username">Username</label>
						<input type="input" class="form-control" id="username" placeholder="Enter username" name="username">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
					</div>
					<font color="red"> 
						<?php echo Session::pull('notification'); ?>
					</font><br><br>
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input type="submit" name="submit" class="form-control" value="Login" style="width:75px;">
				</form>
			</div>
		</div>
	</div>
	<footer class="footer">
      <div class="container">
      	<hr>
        <p class="text-muted">&copy; 2015 <a href="mailto:a.dwisaty4@yahoo.com">Guerilla Team</a></p>
      </div>
    </footer>

<!-- inisasi #2 -->
</body>
</html>