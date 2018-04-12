<link href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
 <script type="text/javascript">

         var regExpName = /^[A-Za-z][a-z]*\b/;
        var regExpMail = /^[a-z0-9.-]+@[a-z0-9.-]{2,}.[a-z]{2,4}$/;
        var rexExpPass = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[\da-zA-Z]{5,16}$/;
        var TestFullForm = 0;




        function testEmail(email){
            var OK = regExpMail.exec(email.value);
            if (!OK){
                window.alert(" cette email n'est correct!");

            }else
                TestFullForm = TestFullForm + 1;
        }
        function testPass(password){
            var OK = rexExpPass.exec(password.value);
            if (!OK){
                window.alert("Votre mot de passe n'est pas assez sécurisé!");

            }else

                TestFullForm = TestFullForm + 1;
        }
        function testSamePass(password,confirm_password){

            if(password.value === confirm_password.value)

            window.alert("Passwords Don't Match");
               else  {
TestFullForm = TestFullForm + 1;

               }
            }
        function VerificationTotale(){
            if (TestFullForm < 3){
                window.alert("vous n'avez pas remplis tout les champs");

                window.alert("Value test =  " +TestFullForm);
            }
            else
                window.alert("merci de votre inscription");
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
			    		<form role="form" action ="testInscription.php">
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			                <input type="text" name="first_name" id="firstName" class="form-control input-sm" placeholder="First Name">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="lastName" id="name" class="form-control input-sm" placeholder="Last Name">
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
			    						<input type="password" name="password_confirmation" id="confirm_password" class="form-control input-sm" placeholder="Confirm Password">
			    					</div>
			    				</div>
			    			</div>
		    			<input type="submit" value="Register" class="btn btn-info btn-block" onclick=" testPass(document.getElementById('password')); testEmail(document.getElementById('email'));
                            VerificationTotale();
                            testSamePass(document.getElementById('confirm_password', 'password'));
                            ">


			    		</form>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>


<style>

   body{
        background-color: #999999;
    }
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
azertyuiO1

