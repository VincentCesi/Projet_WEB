
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->

<?php
//index.php
$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');
function make_query($bdd)
{
 $reponse = $bdd->prepare('SELECT * FROM images');
 $reponse -> execute();
 return $reponse;
}

function make_slide_indicators($bdd)
{
 $output = '';
 $count = 0;
 $reponse = make_query($bdd);
 while($row = $reponse->fetch(PDO::FETCH_ASSOC))
 {
  if($count == 0)
  {
   $output .= '
   <li data-target="#dynamic_slide_show" data-slide-to="'.$count.'" class="active"></li>
   ';
  }
  else
  {
   $output .= '
   <li data-target="#dynamic_slide_show" data-slide-to="'.$count.'"></li>
   ';
  }
  $count = $count + 1;
 }
 return $output;
}

function make_slides($bdd)
{
 $output = '';
 $count = 0;
 $reponse = make_query($bdd);
 while($row = $reponse->fetch(PDO::FETCH_ASSOC))
 {
  if($count == 0)
  {
   $output .= '<div class="item active">';
  }
  else
  {
   $output .= '<div class="item">';
  }
  $output .= '
   <img src="images/'.$row["UrlImage"].'" style="height:450px;margin:auto;" />
   <div class="carousel-caption">
   </div>
  </div>
  ';
  $count = $count + 1;
 }
 return $output;
}

?>

                <div class="container">
                    <br />
                    <div id="dynamic_slide_show" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <?php echo make_slide_indicators($bdd); ?>
                        </ol>

                        <div class="carousel-inner">
                            <?php echo make_slides($bdd); ?>
                        </div>
                        <a class="left carousel-control" href="#dynamic_slide_show" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>

                        <a class="right carousel-control" href="#dynamic_slide_show" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>

                    </div>
                </div>

