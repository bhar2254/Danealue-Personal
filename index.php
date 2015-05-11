
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/favicon.ico">

    <title>Tale of Two Nerds</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
	<!-- Custom CSS -->
<!--     <link href="css/custom.css" rel="stylesheet"> -->

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
	<?php include './base/navBar.html';?>
	</br>
    <div class="container">
    	<div class="jumbotron">
  			<h1>Tale of Two Nerds</h1><p>The place where people from the internet waste 
  			their time. You're the one that chose to come here.</p>
		</div>
    	<div class="row">
    		<?php include './base/leftBar.html';?>
    		<div class="col-md-6">
      			<div class="panel panel-default">
        			<div class="panel-heading" id="1">
        		  		<h3 class="panel-title">NEWS</h3>
        			</div>
        			<div class="panel-body">
        			
        			<?php
        			include './posts/2015/5/May-the-Fourth.php';
        			include './base/indexPost.html';
        			
        			include './posts/2015/4/Borderlands-2.php';
        			include './base/indexPost.html';
        			
        			include './posts/2015/4/Mikecraft.php';
        			include './base/indexPost.html';
        			
        			include './posts/2015/4/Domain.php';
        			include './base/indexPost.html';
        			
        			include './posts/2015/4/Hard-Efforts.php';
					include './base/indexPost.html';
					
        			include './posts/2015/4/That-Feed.php';
					include './base/indexPost.html';
					
        			include './posts/2015/4/Automation.php';
					include './base/indexPost.html';
					
        			include './posts/2015/4/More-Information.php';
        			include './base/indexPost.html';
        			
        			include './posts/2015/4/More-Data.php';
        			include './base/indexPost.html';
        			
        			include './posts/2015/4/Update-in-Progress.php';
        			include './base/indexPost.html';
        			
        			include './posts/2015/4/Oh-Hello.php';
        			include './base/indexPost.html';
        			?>
        			<div>
        				<a href="">Older Posts</a>
        			</div>
        			</div>
        		</div>
       		</div>
    		<?php include './base/rightBar.html';?>
    	</div>
	</div><!-- /.container -->
	<?php include './base/footer.html';?>
	<script>
	+function ($) {
		var pathArray = window.location.pathname.split( '/' );
		var secondLevelLocation = pathArray[0];
		window.alert(pathArray[1]);
	}
	</script>
	<!-- Twitter Feed -->
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
	</body>
</html>
