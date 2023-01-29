@extends('layouts.main')  
@section('content')  
<style type="text/css">
	body {
		background-image: url("{{ asset('/img/technical-support.jpg') }}"), url("{{ asset('/img/technical-support.jpg') }}");
		background-position: 98% 90%, top left;
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: 100% 100%;
		margin: 0px;
		padding: 0px;
	}
	h1{
		font-family:sans-serif;
		font-weight:bold;
	}

	.input-group-addon
{
    background-color: rgb(50, 118, 177);
    border-color: rgb(40, 94, 142);
    color: rgb(255, 255, 255);
}

</style>
<div class="container">
  <br> <br><br><br> <br><br><br> <br><br>
    <div class="row vertical-offset-100">
    	<div class="col-md-4 col-md-offset-4">
    		<div class="panel panel-default" >
			  	<div class="panel-heading">
			    	<h3 class="panel-title"><center> <b> Log In</b></center></h3>
			 	</div>
			  	<div class="panel-body">
			    	<form method="post" action="index.php?page=login" accept-charset="UTF-8" role="form" class="login">
            <fieldset>
							<div style="margin-bottom: 25px" class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<input id="login-username" type="text" class="form-control" name="txtUsuario" value="" placeholder="Usuario">
							</div>

							<div style="margin-bottom: 25px" class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
              <input id="login-password" type="password" class="form-control" name="txtPassword" placeholder="Contraseña">
              </div>


			    		<input class="btn btn-block btn-lg btn-primary" type="submit" value="Login"  name="btnLogin">
			    	</fieldset>
			      	</form>
			    </div>
			</div>
		</div>
	</div>
</div>
@endsection