<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous"><link href="//netdna.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.bundle.min.js" integrity="sha384-lZmvU/TzxoIQIOD9yQDEpvxp6wEU32Fy0ckUgOH4EIlMOCdR823rg4+3gWRwnX1M" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script type="text/javascript">

        function verificationTotale(){
            if (TestFullForm < 2){
                window.alert("vous n'avez pas remplis tout les champs");

                window.alert("Value test =  " +TestFullForm);
            }
            else
                window.alert("merci de votre inscription");
        }
    </script>
<!--  Ensemble des liens et scripts nécessaire à la date -->
<!--  jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script>
    $(document).ready(function(){
      var date_input=$('input[name="date"]'); //notre injection de date a pour nom "date"

      var options={
        format: "dd/mm/yyyy",
        clearBtn: true,
        keyboardNavigation: true,
        startDate: "now",
        autoclose: true,
      };
      date_input.datepicker(options);
    })
</script>

<div class="container centered_form">
        <div class="row centered-form">
        <div class="col-xs-4 col-sm-4 col-md-8 col-lg-8 col-sm-offset-4 col-md-offset-8">
        	<div class="panel panel-default">
        		<div class="panel-heading">
                    <h3 class="panel-title" ><center>Soumission Evenement </center></h3>
			 			</div>
			 			<div class="panel-body">
			    		<form role="form" action ="propositionIdeeDb.php" method="post">
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-12">
			    					<div class="form-group">
			                             <input type="text" name="Titre" id="TitreActivité" class="form-control input-sm" placeholder="Titre de l'activité" required>
			    					</div>
			    				</div>
                            </div>

                            <div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-12">
			    					<div class="form-group">
			    						<input type="text" name="nameAuthor" id="nameAuthor" class="form-control input-sm" placeholder="Votre nom" required>
			    					</div>
			    				</div>
			    			</div>

			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-12">
			    					<div class="form-group">
                                        <textarea rows="6" type="text" name="description" id="description" class="form-control input-sm" placeholder="Description" required></textarea>
			    					</div>

                                    <div class="row">
                                        <div class="col-md-12 col-sm-6 col-xs-12">

                                                    <!-- Form code begins -->
                                            <div class="form-group"> <!-- Date input -->
                                                    <input class="form-control" id="date" name="date" placeholder="Veuillez rentrer une date de proposition" type="text"/>
                                            </div>

                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
			    					    <div class="form-group">
                                            <input type="submit" value="Upload Image" class="btn btn-info btn-block">
			    					    </div>
			    	            </div>

                                <div class="col-xs-6 col-sm-6 col-md-6">
		    			                   <input type="submit" value="Proposer" class="btn btn-info btn-block">
                                </div>
                            </div>
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
       justify-content: center;
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

    .panel-body{
        padding: 30px;
    }

    .panel-heading{
    font-size:10px;
	padding:30px 30px 0px 38px;
    background-color: silver;
    }
