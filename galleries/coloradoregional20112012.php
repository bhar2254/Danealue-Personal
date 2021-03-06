	<div class="container-fluid marketing">
    <div class="container">
      <div class="row-fluid">
			<div class="gallery-container">
				<div id="gallery" class="content">
					<div id="controls" class="controls"></div>
					<div class="slideshow-container">
						<div id="loading" class="loader"></div>
						<div id="slideshow" class="slideshow"></div>
					</div>
					<div id="caption" class="caption-container"></div>
				</div>
				<div id="thumbs" class="navigation">
					<div class="gallery-selector">
						<div class="btn-group">
							<button class="btn btn-primary dropdown-toggle">Select Gallery <span class="caret"></span></button>
								<ul class="dropdown-menu">
									<?php include'gallerymenu.php';?>
								</ul>
						</div>
					</div>
					<ul class="thumbs noscript">
					  <?php
						$defFolder = $_GET["gallery"];
						$imgcoll = array("IMG_7819.jpg","IMG_7830.jpg","IMG_7855.jpg","IMG_7891.jpg","IMG_7905.jpg","IMG_7918.jpg","IMG_7942.jpg","IMG_8007.jpg","IMG_8012.jpg","IMG_8016.jpg","IMG_8043.jpg","IMG_8069.jpg","IMG_8077.jpg","IMG_8098.jpg","IMG_8151.jpg","IMG_8155.jpg");
						foreach($imgcoll as $img)
						{
							//img string url.
							?><!--Photo-->
							<li>
								<a class="thumb" href="/bootstrap/img/gallery/<?= $defFolder; ?>/<?= $img; ?>">
									<img src="/bootstrap/img/gallery/<?= $defFolder; ?>/thumbs/<?= $img; ?>" alt="<?= $_GET["title"]?>"/>
								</a>
								<div class="caption">
								  <div class="image-title"><?= $_GET["title"]?></div>
								  <div class="image-desc">Photos of the team at the <?= $_GET["title"]?>.</div>
								</div>
							</li><!--End Photo-->
							<?php
						}
					?>
					</ul>
				</div>
				<div style="clear: both;"></div>
			</div>
      </div><!--/row-->
    </div><!--/.fluid-container-->
	</div><!--/Marketing-->
	
  <!-- "Advanced Galleriffic Gallery" JavaScript code -->
  <!-- See http://www.twospy.com/galleriffic/ for more info. -->
  <script type="text/javascript"><!--
    $(document).ready(function() {
      // Only apply these styles when JavaScript is enabled
      $('div.navigation').css({'width' : '185px', 'float' : 'left'});
      $('div.content').css('display', 'block');

      // Initially set opacity on thumbs and add additional styling for hover
      // effect on thumbs
      var onMouseOutOpacity = 0.67;
      $('#thumbs ul.thumbs li').opacityrollover({
        mouseOutOpacity:   onMouseOutOpacity,
        mouseOverOpacity:  1.0,
        fadeSpeed:         'fast',
        exemptionSelector: '.selected'
      });

      // Initialize Advanced Galleriffic Gallery
      var gallery = $('#thumbs').galleriffic({
        delay:                     2500,
        numThumbs:                 5,
        preloadAhead:              10,
        enableTopPager:            true,
        enableBottomPager:         true,
        maxPagesToShow:            7,
        imageContainerSel:         '#slideshow',
        controlsContainerSel:      '#controls',
        captionContainerSel:       '#caption',
        loadingContainerSel:       '#loading',
        renderSSControls:          true,
        renderNavControls:         true,
        playLinkText:              'Play Slideshow',
        pauseLinkText:             'Pause Slideshow',
        prevLinkText:              '&lsaquo; Previous Photo',
        nextLinkText:              'Next Photo &rsaquo;',
        nextPageLinkText:          '&rsaquo;',
        prevPageLinkText:          '&lsaquo;',
        enableHistory:             false,
        autoStart:                 false,
        syncTransitions:           true,
        defaultTransitionDuration: 900,
        onSlideChange:             function(prevIndex, nextIndex) {
          // 'this' refers to the gallery, which is an extension of $('#thumbs')
          this.find('ul.thumbs').children()
            .eq(prevIndex).fadeTo('fast', onMouseOutOpacity).end()
            .eq(nextIndex).fadeTo('fast', 1.0);
        },
        onPageTransitionOut:       function(callback) {
          this.fadeTo('fast', 0.0, callback);
        },
        onPageTransitionIn:        function() {
          this.fadeTo('fast', 1.0);
        }
      });
    });
  --></script>