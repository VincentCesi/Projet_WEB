<link href="//netdna.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
 <script type="text/javascript">

        var re = /^[a-z0-9.-]+@[a-z0-9.-]{2,}.[a-z]{2,4}$/;
        var re2 = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[\da-zA-Z]{8,16}$/;
        var Test = 0;

        function testEmail(email){
            var OK = re.exec(email.value);
            if (!OK){
                window.alert(email.input + " n'est pas une email correct!");

            }else
                Test = Test + 1;
        }
        function testPass(password){
            var OK = re2.exec(password.value);
            if (!OK){
                window.alert("Votre mot de passe n'est pas assez sécurisé!");

            }else
                Test = Test + 1;
        }

        function testCorrespondance(password, password_confirmation){

            if (password != password_confirmation){
                    window.alert("Mot de passe ne correspondant pas");

                    window.alert("Valuer " +Test);
            }else
                Test = Test + 1;
            window.alert("Valuer " +Test);
        }
    </script>
<div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title">Inscription au site <small>Pouf Pouf</small></h3>
			 			</div>
			 			<div class="panel-body">
			    		<form role="form">
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			                <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="First Name">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="last_name" id="last_name" class="form-control input-sm" placeholder="Last Name">
			    					</div>
			    				</div>
			    			</div>

			    			<div class="form-group">
			    				<input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address">
			    			</div>

			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password">
			    					</div>
			    				</div>
			    			</div>

			    			<input type="submit" value="Register" class="btn btn-info btn-block" onclick="testPass(document.getElementById('password')); testEmail(document.getElementById('email')); testCorrespondance(document.getElementById(password, password_confirmation))">

			    		</form>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>

<style>

   /* body{
        background-color: #525252;
    }*/
    .centered-form{
	   margin-top: 60px;

    }

    .centered-form .panel{
	   background: rgba(255, 255, 255, 0.8);
	   box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
       background-color: #525252;

    }

    .btn.btn-info.btn-block{

       border-color: #E00A0A;
       background: #E00A0A;
    }

</style>
