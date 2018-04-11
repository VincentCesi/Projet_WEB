<link href="//netdna.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-3.3.1.min.js"></script>


<!------ Include the above in your HEAD tag ---------->

<div class="container">
	<div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
		<form class="form-signin mg-btm">
    	<h3 class="heading-desc">
		Connexion au site</h3>

		<div class="main">

		<input type="text" class="form-control" placeholder="Email" autofocus>
        <input type="password" class="form-control" placeholder="Password">


		<span class="clearfix"></span>
        </div>
		<div class="login-footer">
		<div class="panel-boddy">

                        <div>
                            <button type="submit" class="btn btn-info btn-block">Login</button>
                        </div>
                    </div>

		</div>
      </form>
	</div>
</div>

<style>

.form-signin {
  max-width: 400px;
  display:block;
  background-color: #f7f7f7;
  -moz-box-shadow: 0 0 3px 3px #888;
    -webkit-box-shadow: 0 0 3px 3px #888;
	box-shadow: 0 0 3px 3px #888;
  border-radius:2px;
}
.main{
	padding: 38px;
}

.heading-desc{
	font-size:20px;
	font-weight:bold;
	padding:38px 38px 0px 38px;

}
.form-signin .form-signin-heading,
.form-signin .checkbox {
  margin-bottom: 10px;
}
.form-signin .checkbox {
  font-weight: normal;
}
.form-signin .form-control {
  position: relative;
  font-size: 16px;
  height: 20px;
  padding: 20px;
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="text"] {
  margin-bottom: 10px;
  border-radius: 5px;

}
/*.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-radius: 5px;
}*/
.login-footer{
	background:#f0f0f0;
	margin: 0 auto;
	border-top: 1px solid #dadada;
	padding:20px;
}
/*.login-footer .left-section a{
	font-weight:bold;
    color:#8a8a8a;
	line-height:19px;
}*/

    .btn.btn-info.btn-block{

       border-color: #E00A0A;
       background: #E00A0A;
    }

</style>
