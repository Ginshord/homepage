<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Frijole" rel="stylesheet"><!--Google font: lobster -->
    <link href="https://fonts.googleapis.com/css?family=Wallpoet" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nosifer" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">
    <script src="bootstrap4/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
    <style>
    nav{
      font-family: Frijole;
    }
    body {
      background-color: ;
    }
    </style>
    <!-- Custom styles for this template -->
    <link href="navbar.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">
      <nav class="navbar navbar-light bg-faded">

        <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#navbar-header" aria-controls="navbar-header" aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-toggleable-xs" id="navbar-header">
          <a class="navbar-brand" href="#" style="font-size:30px;"><b style="color:red;">Love</b> Who U ARE &nbsp;<img src="img/index_img/love.png" title="Hearts" width="25"></a>

          <ul class="nav navbar-nav float-xs-right">
            <li class="nav-item">
              <a class="nav-link" href="index1.php">Anniversary</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Recite words</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
          </ul>

        </div>

      </nav> <!-- /navbar -->

      <!-- Main component for a primary marketing message or call to action -->

        <nav class="navbar navbar-light" style="background-color:#E3E7EA;border-radius:20px;-moz-border-radius:25px;">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" style="float:left;" >
        </button> <p style="font-size:25px;">Love Menu</p>  <div class="collapse" id="collapseExample"><br/><br/>
        <div class="card card-block" style="background-color: #fbf6f8; border-radius:60px;-moz-border-radius:25px;">
        <center><img src="img/index_img/ring.png" style="width:31px;"></center>
        <center><span><img src="img/index_img/poppy.png" style="width:18px;">_____________<a style="font-size:40px; color: black;" href="baidu.com">&nbsp;&nbsp;Plan&nbsp;&nbsp;</a>_____________</span><img src="img/index_img/poppy.png" style="width:18px;"><br/>
        <span><img src="img/index_img/carnation.png" style="width:17px;">____________<a style="font-size:37px;color: black;" href="baidu.com">&nbsp;&nbsp;Love Story&nbsp;&nbsp;</a>.____________</span><img src="img/index_img/carnation.png" style="width:17px;"><br/>
        <span><img src="img/index_img/daisy.png" style="width:16px;">_________<a style="font-size:34px;color: black;" href="baidu.com">&nbsp;&nbsp;Love Photos Album&nbsp;&nbsp;</a>._________</span><img src="img/index_img/daisy.png" style="width:16px;"><br/>
        <span><img src="img/index_img/lotus.png" style="width:15px;">_________<a style="font-size:31px;color: black;" href="baidu.com">&nbsp;&nbsp;Real-time Love Text Chat&nbsp;&nbsp;</a>._________</span><img src="img/index_img/lotus.png" style="width:15px;"></center><br/><!--class="text-muted": text in a line. not worked here -->
        </div>
        </nav>
             <div class="jumbotron" style="border-radius:40px;-moz-border-radius:25px;">
               <div style="font-family:Wallpoet; font-style:; font-size: 40px;text-shadow: 10px 10px 5px #888888;box-shadow: 10px 10px 5px #888888;background-color:#f6e9ee;"><!-- box-shadow: 10px 10px 5px #888888;   clock 用box shadow 比较好-->
             <center>We've already loved For</center>
         </div>
         <br/><br/>
         <div style="border:1px bold; font-size:40px; font-family:Nosifer;border-radius:60px;-moz-border-radius:25px; box-shadow: 10px 10px 5px #888888; ">
             <center>
             <?php
             $startdate="2015-7-29 23:50:00";
             $enddate=date("Y-m-d");
             $date=floor((strtotime($enddate)-strtotime($startdate))/86400);
             echo $date;
             ?></center>
         </div><br/>
         <div style="border:1px bold; font-size:40px; background-color:#f6e9ee;font-family:Wallpoet;border-radius:60px;-moz-border-radius:25px; box-shadow: 10px 10px 5px #888888; ">
             <center>Days</center>
         </div><br/><br/>
         <div style="border:1px bold; font-size:40px; font-family:Wallpoet; box-shadow: 10px 10px 5px #888888; ">
             <center>To. Be. Forever.</center>
         </div>

      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
