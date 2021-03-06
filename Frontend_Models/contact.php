<?php session_start(); error_reporting(E_ALL); ini_set('display_errors', 0); ?>

<!DOCTYPE html>
<html lang='en'>
    <head>
        <link href="css.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <title>Maroon Gaming Co</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <style>
            #contact{
                margin-top: 20px;
            }
            .text-center{
            margin-top: -10px;
            }
            .form-group{
                margin-top: 5px;
                padding-bottom: 3px;
            }
            .form-group-submit{
                margin-top: 14px;
                padding-bottom: 2px;
            }
            footer{
                margin-top: 70px;
                padding-bottom: 0px;
            }
        		
            .w3-input {
                padding: 8px;
                display: block;
                border: none;
                border-bottom: 1px solid #ccc;
                width: 100%;
            }
        </style>
    </head>
    <body>
 <div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>
  <?php
      //display different banner identification based on session type
        if(isset($_SESSION['type'])){
        switch ($_SESSION['type']) {
          case 'user':
            echo "Maroon Gaming - Basic User";
            break;
          case 'admin':
            echo "Maroon Gaming - Administrator";
            break;
        }
      }
      else{
        echo "";
      }
      ?></a>

  <a href="../index.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Home</a>

  <?php
  	if(isset($_SESSION['type'])){
      switch ($_SESSION['type']) {
        case 'user':
          echo "<a href='editAccount.php' class='w3-bar-item w3-button w3-hide-small w3-hover-white'>Account</a>";
          echo "<a href='viewCart.php' class='w3-bar-item w3-button w3-hide-small w3-hover-white'>Cart</a>";
          break;
      }
    }
    else{
      echo "<a href='login.php' class='w3-bar-item w3-button w3-hide-small w3-hover-white'><i class='fa fa-sign-in' aria-hidden='true'></i> Login</a>";
    }
    ?>
   <?php
  		if(isset($_SESSION['type'])){
	  		echo "<a href='../Frontend_Models/logout.php' class='w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal' title='Logout'><i class='fa fa-sign-in' aria-hidden='true'></i> Logout</a>";
	  	}
	  	else{
	  		echo "";
	  	}
  	?>
		</div>
	    </div>
 


  <div class="w3-container w3-padding-64 w3-theme-l5" id="contact">
    <div class="w3-row">
      <div class="w3-col m5">
      <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">Contact Us</span></div>
        <h3>Address</h3>
        <p>Swing by for a cup of coffee, or whatever.</p>
        <p><i class="fa fa-map-marker w3-text-teal w3-xlarge"></i>  Starkville, US</p>
        <p><i class="fa fa-phone w3-text-teal w3-xlarge"></i>  +00 1515151515</p>
        <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i>  msstate.edu</p>
      </div>
      <div class="w3-col m7">
        <form class="w3-container w3-card-4 w3-padding-16 w3-white" action="../index.php">
        <div class="w3-section">
          <label>Name</label>
          <input class="w3-input" type="text" name="Name" required>
        </div>
        <div class="w3-section">
          <label>Email</label>
          <input class="w3-input" type="text" name="Email" required>
        </div>
        <div class="w3-section">
          <label>Message</label>
          <input class="w3-input" type="text" name="Message" required>
        </div>
          <br><input class="w3-check" type="checkbox" checked name="Like">
          <label>I Like it!</label>
        <div class="w3-container">
    <button type="submit" class="w3-button w3-right w3-theme">Send</button>
  </form>
  </div>
    
</div>
  </div>


  <footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">
    <h4>Maroon Gaming Co. @ 2018</h4>
  </footer>
</body>
</html>
