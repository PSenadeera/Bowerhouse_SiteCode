<!doctype html>
<html lang="en">
<head>
<meta http-equiv="Refresh" content="5; url=index.php">
<meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1">
    
    <!--GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!--FONTAWESOME ICON FONTS-->
    <link rel="stylesheet" href="css/font-awesome.min.css">   
    <!--FLEXSLIDER--> 
    <link rel="stylesheet" href="css/flexslider.css" type="text/css">
    <!--BOOTSTRAP-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--CUSTOM STYLES-->
    <link rel="stylesheet" href="css/style.css">
    
       
    
    <title>MyBowerhouse</title>
<style type="text/css">
#contact-form > input[type="text"], #contact-form > input[type="number"], #contact-form > input[type="email"], #contact-form > textarea {
	background:#ffffff;
}

.fancybox-custom .fancybox-skin {
			box-shadow: 0 0 50px #222;
		}

.header_rgt {
    background: none repeat scroll 0 0 #435363;
    border-radius: 10px;
    color: #FFFFFF;
    float:left;
    height: 50px;
    padding: 10px 20px;
    width: 250px;
}


</style>

</head>
<body>

<section id="site-banner" class="site-banner" data-stellar-background-ratio="0" > <!--START SITE-BANNER-->
    <div class="site-banner-inner">
           
        <div class="container">
            <div class="row">                
                <div class="col-md-12">
                    
                    <header class="banner-header"><!--START BANNER-HEADER-->
                        <h1> Thank you for your donation! <br><span></span></h1>
                        Your payment has been made and your transaction has been completed. Now you will be redirected to Bowerhouse homepage.
                        
                        <div class="flexslider"><!--START FLEXSLIDER TEXT BASED SLIDESHOW-->
                            <ul class="slides">
                            
                            </ul>
                        </div><!--END FLEXSLIDER TEXT BASED SLIDESHOW--> 
                          
                        <span class="sep"></span>                     
                    </header><!--END BANNER-HEADER-->
                    
                </div>
            </div><!--END ROW-->
            
           
          
                 
        </div><!--END CONTAINER-->
            
    </div><!--END SITE-BANNER-INNER-->
</section><!--END SITE-BANNER-->

<!--
/////////////////////////////////////////////////////////////////////
               NAVIGATION SECTION
/////////////////////////////////////////////////////////////////////
-->


<script src="js/jquery-1.10.2.min.js"></script><!--JQUERY - JAVASCRIPT LIBRARY-->
<script src="js/bootstrap.min.js"></script><!--DEFAULT BOOTSTRAP JQUERY LIBRARY-->
<script src="js/jquery.flexslider-min.js"></script><!--FLEXSLIDER-->
<script src="js/jquery.stellar.min.js"></script><!--STELLAR>JS FOR PARALLAX EFFECT-->
<script src="js/jquery.sticky.js"></script><!--STICKY.JS FOR STICKY NAVIGATION-->
<script src="js/jquery.scrollTo-1.4.3.1-min.js"></script><!--SCROLLTO.JS FOR ANIMATED PAGE SCROLLING -->
<script src="js/jquery.fitvids.js"></script><!--FITVID.JS FOR RESPONSIVE VIDEOS -->
<script src="js/script.js"></script><!--CUSTOM JAVASCRIPT-->




    <!-- Add jQuery library -->

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="source/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="source/jquery.fancybox.css?v=2.1.5" media="screen" />

	<script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();

			/*
			 *  Different effects
			 */

			// Change title type, overlay closing speed
			$(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedOut : 0
					}
				}
			});

			// Disable opening and closing animations, change title type
			$(".fancybox-effects-b").fancybox({
				openEffect  : 'none',
				closeEffect	: 'none',

				helpers : {
					title : {
						type : 'over'
					}
				}
			});

			// Set custom style, close if clicked, change title type and overlay color
			$(".fancybox-effects-c").fancybox({
				wrapCSS    : 'fancybox-custom',
				closeClick : true,

				openEffect : 'none',

				helpers : {
					title : {
						type : 'inside'
					},
					overlay : {
						css : {
							'background' : 'rgba(238,238,238,0.85)'
						}
					}
				}
			});

			// Remove padding, set opening and closing animations, close if clicked and disable overlay
			$(".fancybox-effects-d").fancybox({
				padding: 0,

				openEffect : 'elastic',
				openSpeed  : 150,

				closeEffect : 'elastic',
				closeSpeed  : 150,

				closeClick : true,

				helpers : {
					overlay : null
				}
			});

			/*
			 *  Button helper. Disable animations, hide close button, change title type and content
			 */

			$('.fancybox-buttons').fancybox({
				openEffect  : 'none',
				closeEffect : 'none',

				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,

				helpers : {
					title : {
						type : 'inside'
					},
					buttons	: {}
				},

				afterLoad : function() {
					this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
				}
			});


			/*
			 *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
			 */

			$('.fancybox-thumbs').fancybox({
				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,
				arrows    : false,
				nextClick : true,

				helpers : {
					thumbs : {
						width  : 50,
						height : 50
					}
				}
			});

			/*
			 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
			*/
			$('.fancybox-media')
				.attr('rel', 'media-gallery')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',

					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
				});

			/*
			 *  Open manually
			 */

			$("#fancybox-manual-a").click(function() {
				$.fancybox.open('1_b.jpg');
			});

			$("#fancybox-manual-b").click(function() {
				$.fancybox.open({
					href : 'iframe.html',
					type : 'iframe',
					padding : 5
				});
			});

			$("#fancybox-manual-c").click(function() {
				$.fancybox.open([
					{
						href : '1_b.jpg',
						title : 'My title'
					}, {
						href : '2_b.jpg',
						title : '2nd title'
					}, {
						href : '3_b.jpg'
					}
				], {
					helpers : {
						thumbs : {
							width: 75,
							height: 50
						}
					}
				});
			});


		});
	</script>
</body>
</html>