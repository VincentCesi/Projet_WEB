<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous"><link href="//netdna.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.bundle.min.js" integrity="sha384-lZmvU/TzxoIQIOD9yQDEpvxp6wEU32Fy0ckUgOH4EIlMOCdR823rg4+3gWRwnX1M" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<div class="container centered_form">
    <div class="row centered-form">
        <div class="col-xs-2 col-sm-12 col-md-10 col-lg-6 col-sm-offset-4 col-md-offset-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title" ><center>Ajout de produit à la boutique</center></h3>
                </div>
                <div class="panel-body">
                    <form role="form" action ="testBoutique.php" method="post">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <input type="text" name="product" id="product" class="form-control input-sm" placeholder="Nom du produit" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-3 col-sm-3 col-md-3">
                                <div class="form-group">
                                    <input type="text" name="price" id="price" class="form-control input-sm" placeholder="Prix" required>
                                </div>
                            </div>

                            <div class="col-xs-3 col-sm-3 col-md-3 ">
                                <div class="form-group">
                                    <input type="text" name="quantity" id="quantity" class="form-control input-sm" placeholder="Quantité" required>
                                </div>
                            </div>
                        </div>





                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <textarea rows="6" type="text" name="description" id="description" class="form-control input-sm" placeholder="Présentation du produit" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="checkbox">
                                    <label><input type="checkbox" name="available" id="available" value="1">Disponible ?</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="submit" value="Upload d'images" class="btn btn-info btn-block">
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
