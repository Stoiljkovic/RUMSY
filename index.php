<?php
require_once('_engine.php');    // IMPORTANT - MUST BE INCLUDED FIRST, ABOVE ALL
include_once('header.inc.php');     // INCLUDE <HEAD> PART (SKIN RELATED)
include_once ('mainmenu.inc.php');  // INCLUDE MAIN MENU (SKIN RELATED)
?>


    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
      <?php if(!$session->logged_in){ ?>
        <h1>Hello, stranger!</h1>
        <p>You are not logged in. Please <a href="registration.php">REGISTER</a> or <a href="login.php">LOGIN</a></p>
		<p>Please note that text on this page is hardcoded (not translated) and will not change if you change a language.</p>
      <?php } else { ?>
        <h1>Hello, <?php echo $session->username;?>!</h1>
        <p>You are logged in. If you want to edit your account <a href="useredit.php">CLICK HERE</a>. If you want to see your profile <a href="userinfo.php?user=<?php echo $session->username;?>">CLICK HERE</a>.</p>
      <?php } ?>

      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
	  	<div class="col-md-4">
          <h2>About RUMSY</h2>
          <p>RedIcon User Membership System RUMSY is a easy to install, integrate, configure and maintain PHP/MySQL powered software for your website with lots of features. And it is extremely optimized.</p>
		  <br />
          <?php if(!$session->logged_in){ ?><p><a class="btn btn-warning" href="login.php" role="button">Login &raquo;</a></p><?php } else { ?><p><a class="btn btn-warning" href="admin/process.php" role="button">Logout &raquo;</a><?php } ?>
        
        </div>
        <div class="col-md-4">

          <h2>Did you know?</h2>
          <p>RUMSY scored 99% on GTMetrix Page Speed tests, with Page load time: 0.99s, Total page size: 117KB and Total number of requests: 5. Click on button below to see report.</p>
		  <br />
          <p><a class="btn btn-default" href="http://gtmetrix.com/reports/redicon.eu/qm7JZPhy" target="_blank">GTMetrix Report &raquo;</a></p>

        </div>

        <div class="col-md-4">

          <h2>Features</h2>
          <p>- Easy install, configure and maintain<br />
            - Caching and Backup Functions<br />
            - Statistics, Messaging, Comments<br />
            - Unlimited languages and Extremely fast</p>
			<br />
            <p><a href="http://redicon.eu/RUMSY" class="btn btn-primary" role="button" target="_blank">Learn more about RUMSY &raquo;</a></p>
       </div>

      </div>

      <br />

      <?php include ('_comments.php');?>

    </div>
<?php include('footer.inc.php');    // INCLUDE <FOOTER> PART (SKIN RELATED) ?>