<?php
$name = $_POST['name'];
  $cgm = $_POST['cgm'];
  $email = $_POST['email'];
  $mtv = $_POST['mtv'];
  $msg = $_POST['msg'];


$to = "@amaroneceschi@libero.it";
$subject = 'Nuovo messaggio dal sito';
$message = "Messaggio da $name $cgm:\n $mtv $msg ";
$from = "$email";

// Sending email

if($_POST["name"]) {
    mail("amaroneceschi@libero.it", $subject, $message, "From: $from" );
}
?>


<!DOCTYPE html>
<html lang="it">
<head><title>Ceschi - Brugnoli | Hill Vineyard in Classic Valpolicella </title>
<meta name="description" content="BlaBlaBla">
<meta name="keywords" content="BlaBlaBla">

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!--import bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<style>

mark {
background-color: white;
color: black;
opacity: 0.8;
}
@media screen and (min-width: 601px) {
body {
  font-size: 20px;
}
}

/* If the screen size is 600px wide or less, set the font-size of <div> to 30px */
@media screen and (max-width: 600px) {
body {
  font-size: 15px;
}
}

/* If the screen size is 600px wide or less, set the font-size of <div> to 30px */
@media screen and (max-width: 720px) {
.logo2 {
  width: 100px;
  height: 100px;
}
}


.parallax {
  /* The image used */
  background-image: url("pesi_1.jpg");

  /* Set a specific height */
  min-height: 400px;

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.logo{
height: 30px;
padding-right: 10px;
padding-left: 0px;

}

body, html {
  height: 95%;
}


.bg {
  /* The image used */
  background-image: url("contribuisci2.png");

  /* Full height */
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.big_margin { padding: 30% 0px; }

.big_margin2 { padding: 50px 50px; }

.module {

background:

  url("palestra_1_b.png");

position: relative;

/* Full height */
height: 100%;

/* Center and scale the image nicely */
background-position: center;
background-repeat: no-repeat;
background-size: cover;
}

.module2 {

background:

  url("fisioterapia.png");

position: relative;

/* Full height */
height: 100%;

/* Center and scale the image nicely */
background-position: center;
background-repeat: no-repeat;
background-size: cover;
}

.mid .inside {

position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
}

@media screen and (max-width: 600px) {
.display-2 {
  font-size: 50px;
}
}



</style>
<style>
html, body {
height: 100%;
margin: 0;
}



body {
font-family: 'Bitter', serif;

  }

  .display-1 {
    font-family: 'Oswald', sans-serif;

  }
  .display-2{
    font-family: 'Oswald', sans-serif;

  }


  <style type="text/css">

    html,body { height: 100%; margin: 0px; padding: 0px; }

    /* full screen w/o image*/

    #full0 { background: #2E442D; min-height: 100% }

    /* full screen with image*/
          #full1 {     background-image: url("cantina.jpg"); /* The image used */
      background-color: #cccccc; /* Used if the image is unavailable */
      height: 500px; /* You must set a specified height */
      background-position: center; /* Center the image */
      background-repeat: no-repeat; /* Do not repeat the image */
      background-size: cover; height: 100vh}


/* full screen with image*/
    #full2 {     background-image: url("amarone.jpg"); /* The image used */
background-color: #cccccc; /* Used if the image is unavailable */
height: 500px; /* You must set a specified height */
background-position: center; /* Center the image */
background-repeat: no-repeat; /* Do not repeat the image */
background-size: cover; height: 100vh}


/* full screen with image*/
      #full4 {     background-image: url("info.jpg"); /* The image used */
  background-color: #cccccc; /* Used if the image is unavailable */
  height: 500px; /* You must set a specified height */
  background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover; height: 100vh}


  .shadow {
box-shadow: 10px 10px 5px grey;
}


/* Container holding the image and the text */
.container2 {
  position: relative;
  text-align: center;
}


/* Centered text */
.centered {
  position: relative;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.bottom {
  position: relative;
  top: 90%;
  left: 50%;
  transform: translate(-50%, -50%);
}

  </style>

<link href="https://fonts.googleapis.com/css?family=Bitter" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dosis:800" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">

</head>
</head>
<body >

  <div  id ="full0" class="container2">

  <div class="pos-f-t">

    <nav class="navbar-dark" style="background-color: #2E442D;" >

    <div class="collapse" id="navbarToggleExternalContent">
      <div class="p-4">

        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link " href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="territorio.html">Azienda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="prodotti.html">I nostri vini</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="diconodinoi.html">Dicono di noi</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="riconoscimenti.html">Riconoscimenti</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="info.html">Contatti</a>
          </li><br>
          <li class="nav-item dropdown centered " style="max-width:200px">
          <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="flag-icon flag-icon-us"> </span> Italiano</a>
          <div class="dropdown-menu text-center " aria-labelledby="dropdown09">
          <a class="dropdown-item text-center  " href="indexen.html"><span class="flag-icon flag-icon-it"> </span>  <div class="text-center ">English</div></a>
          </div>
          </li><br>
        </ul>
      </div>
    </div>

  </nav>

    <nav class="navbar navbar-dark " style="background-color: #2E442D;" >
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </nav>

  </div>

<h1 class="text-center text-white"> Contatti </h1>
    <blockquote class="blockquote text-white">
  <p class="mb-0 p-4">All that you need is love <br>and a bottle of Amarone Ca' del Mato </p>
  <footer class="blockquote-footer"> <cite title="Source Title">Ceschi-Brugnoli</cite></footer>
</blockquote>
<img class="img-fluid" src="logo.png" alt="facebook sketch">

  </div>


  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/it_IT/sdk.js#xfbml=1&version=v3.2&appId=826868194186527&autoLogAppEvents=1';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>




  <div class="row no-gutters">
    <div class="col-md-4"></div>
    <div class="col-md-4">
  <div >
    <font color="#2E442D">
  <h2 class="p-4 text-center">Scrivi direttamente qui il tuo messaggio</h2>
  </font>
  <form method="post" action="form.php">
    <div class="form-group">
      <input type="email" class="form-control" id="email" placeholder="Indirizzo email" name="email">
    </div>
    <div class="form-group">
      <input type="text" class="form-control" id="name" placeholder="Nome" name="name">
    </div>
    <div class="form-group">
      <input type="text" class="form-control" id="gnm" placeholder="Cognome" name="cgm">
    </div>
    <div class="form-group">
      <input type="text" class="form-control" id="mtv" placeholder="Oggetto" name="mtv">
    </div>
    <div class="form-group">
      <input type="text" class="form-control" id="msg" placeholder="Messaggio" name="msg">
    </div>
  <div class="text-center">  <button type="submit" class="btn text-white" style="background-color: #2E442D;">Invia</button></div>
  <br><div class="text-center text-success">Messaggio inviato</div>
  </form>
    </div>
    <font color="#2E442D">
  <br>
  <h2 class="p-4 text-center">Soc.Agr.Ceschi di Ceschi Claudia e C.SS</h2>
  <div class="text-center p-4"><p><h4>Telefono Stefano Brugnoli:</h4>  <a href="tel:+39 3356432640">+39 3356432640 <img style="max-width:20px" class="img-fluid" src="link.png"></a>  <br> <h4>Telefono Claudia Ceschi:</h4> <a href="tel:+39 3491901409">+39 3491901409 <img style="max-width:20px" class="img-fluid" src="link.png"></a>  <br>
  <h4>Email:</h4> <a href="mailto:amaroneceschi@libero.it?Subject=Richiesta%20Info" target="_top">amaroneceschi@libero.it <img style="max-width:20px" class="img-fluid" src="link.png"></a><br>
  <h4>Indirizzo:</h4> <a href="https://goo.gl/maps/egJDLgGXaMB1hKnD9">Via T.A.Massa, 44 - 37015 Sant’Ambrogio di Valpolicella -Verona - ITALY <img style="max-width:20px" class="img-fluid" src="link.png"></a></p></div>
  <h2 class="p-4 text-center">Rimanete Collegati</h2>
  <div class="text-center"><a href="https://www.facebook.com/CESCHI-BRUGNOLI-Wines-423067201210506/"><img class="img-fluid m-4" src="fb.png" alt="facebook sketch"></a></div>

  </font>
  </div>
  <div class="col-md-4"></div>
  </div>

<script>
//insert this in your jquery
//control the resizing of menu and go down the content in the correct position

    $("#navMenu").resize(function () {
        $('#godown').height($("#navMenu").height() + 10);
    });

    if ($("#navMenu").height() > $('#godown').height()) $('#godown').height($("#navMenu").height() + 10);

</script>

</body>
</html>
