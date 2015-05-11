<?php include '../../../base/header.html';?>
<body>
	<?php include '../../../base/navBar.html';?>
	</br>
    <div class="container">
    	<div class="row">
    		<?php include '../../../base/leftBar.html';?>
			<div class="col-md-6">
      			<div class="panel panel-default">
        			<div class="panel-heading" id="1">
        		  		<h3 class="panel-title"><?php echo $pageInfo[postDate]?></h3>
        			</div>
        			<div class="panel-body">
  					<h2 class="blog-post-heading"><?php echo $pageInfo[postTitle]?></h2>
        			<hr>
        			<?php echo $pageInfo[postTeaser]?>
   					</br></br>
   						<?php echo $pageInfo[postText]?>
   						</br></br>-- <a href="../../../index.php">BACK</a> to Home.
   						</br>
   						<nav>
  							<ul class="pager">
    							<li class="previous"><a href="#"><span aria-hidden="true">&larr;</span> Older</a></li>
    							<li class="next"><a href="#">Newer <span aria-hidden="true">&rarr;</span></a></li>
  							</ul>
						</nav>
        			</div>
        		</div>
       		</div>
    		<?php include '../../../base/rightBar.html';?>
    	</div>
	</div><!-- /.container -->
	<?php include '../../../base/footer.html';?>
	

	
	<!-- Twitter Feed -->
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../../../js/bootstrap.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../../js/ie10-viewport-bug-workaround.js"></script>
	</body>
</html>
