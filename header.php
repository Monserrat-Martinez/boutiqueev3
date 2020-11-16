<?php
    session_start();
    //HEADER INICIO
echo <<<_INIT
 
<!DOCTYPE html>
<html>
   <head>
      <meta charset= 'utf-8'>
      <meta name='viewport' content='width=device-width, initial-scale=1'>
      <link rel='stylesheet' href='bootstrap4/bootstrap.min.css'>
      <link rel='stylesheet' href='bootstrap4/bootstrap.min.js'>
      <script src='node_modules/jquery/dist/jquery.min.js'></script>
      <script src='node_modules/jquery-mobile/js/jquery.mobile.js'></script>
      <script type="text/javascript" src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
      <link href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">        
      <link rel='stylesheet' href='styles.css' type='text/css'>    
      <script src='javascript.js'></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.0/css/bulma.min.css">
	  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
_INIT;

   //require_once 'functions.php';
   //$userstr = 'BOUTIQUE MONSE';
   
echo <<<_MAIN
      <title>Boutique Monse: </title>
   </head>
   <body >
<!DOCTYPE html>
<html>
<head>
   <nav class="navbar" role="navigation" aria-label="main navigation" >
  <div class="navbar-brand">
    <a class="navbar-item" href="https://bulma.io">
      <img src="logo3.jpg" width="112" height="28">
    </a>

    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item" href='home.php'>
        Home
      </a>

      <a class="navbar-item" href="Information.php">
        Documentation
      </a>

    </div>

    <div class="navbar-end>
      <div class="navbar-item">
        <div class="buttons">
          <a class="button is-primary" href='login.php' style="background-color: rgb(219, 60, 113)">
            <strong>Log in</strong>
          </a>
          
          
        </div>
      </div>
    </div>
  </div>
</nav>


</html>




        <div data-role="page">
            <div data-role="header">
                <div class="centro">
                    <h3 style= "text-align:center">
                        <img id= "logo3" src="logo3.jpg" width="200px" height="200px">
                    </h3>    
                </div>
            </div>
               
_MAIN;
?>