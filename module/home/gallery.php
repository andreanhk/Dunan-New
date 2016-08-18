<?php
	$root = "../../";
	require "../template/setting.php";
?>

<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if (IE 9)]><html class="no-js ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--> <html lang="en-US"> <!--<![endif]-->
<head>

<!-- Meta Tags -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>Dunan's Gallery</title>   

<meta name="description" content="Photo Studio Gallery" /> 

<!-- Mobile Specifics -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="HandheldFriendly" content="true"/>
<meta name="MobileOptimized" content="320"/>   

<!-- Mobile Internet Explorer ClearType Technology -->
<!--[if IEMobile]>  <meta http-equiv="cleartype" content="on">  <![endif]-->

<!-- Bootstrap -->
<link href="<?php echo $root; ?>assets/css/bootstrap.min.css" rel="stylesheet">

<!-- Main Style -->
<link href="<?php echo $root; ?>assets/css/main.css" rel="stylesheet">

<!-- FancyBox -->
<link href="<?php echo $root; ?>assets/css/fancybox/jquery.fancybox.css" rel="stylesheet">

<!-- Font Icons -->
<link href="<?php echo $root; ?>assets/css/fonts.css" rel="stylesheet">

<!-- Shortcodes -->
<link href="<?php echo $root; ?>assets/css/shortcodes.css" rel="stylesheet">

<!-- Responsive -->
<link href="<?php echo $root; ?>assets/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="<?php echo $root; ?>assets/css/responsive.css" rel="stylesheet">

<!-- Gallery CSS -->
<link href="<?php echo $root; ?>assets/css/gallery.css" rel="stylesheet">

<!-- Google Font -->
<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900' rel='stylesheet' type='text/css'>

<!-- Fav Icon -->
<link rel="shortcut icon" href="#">

<!-- Justified Gallery -->
<link rel="stylesheet" href="<?php echo $root; ?>assets/css/justifiedGallery.min.css">

<!-- Colorbox -->
<link rel="stylesheet" href="<?php echo $root; ?>assets/css/colorbox.css">

<link rel="apple-touch-icon" href="#">
<link rel="apple-touch-icon" sizes="114x114" href="#">
<link rel="apple-touch-icon" sizes="72x72" href="#">
<link rel="apple-touch-icon" sizes="144x144" href="#">

</head>


<body>

<!-- Header -->
<header>
    <div class="sticky-nav">
    	<a id="mobile-nav" class="menu-nav" href="#menu-nav"></a>
        
        <div id="logo">
        	<a id="goUp" href="<?php echo $root.HOME."home.php#home-slider"; ?>" title="Studio">Studio</a>
        </div>
        
        <nav id="menu">
        	<ul id="menu-nav">
            	<li><a href="<?php echo $root.HOME."home.php#home-slider"; ?>" class="external">Beranda</a></li>
                <li><a href="<?php echo $root.HOME."home.php#work"; ?>" class="external">Karya Kami</a></li>
                <li><a href="<?php echo $root.HOME."home.php#about"; ?>" class="external">Tentang Kami</a></li>
                <li><a href="<?php echo $root.HOME."home.php#contact"; ?>" class="external">Hubungi Kami</a></li>
				<li class="current"><a href="<?php echo $root.HOME."gallery.php"; ?>" class="external">Galeri</a></li>
            </ul>
        </nav>
        
    </div>
</header>
<!-- End Header -->

<!-- Our Work Section -->
<div id="gallery" class="gallery-page">
	<div class="container">
    	<!-- Title Page -->
        <div class="row">
            <div class="span12">
                <div class="gallery-title-page">
                    <h2 class="title">Galeri Foto</h2>
                </div>
            </div>
        </div>
        <!-- End Title Page -->

<!-- Gallery -->
        <div class="row">
        	<div class="span2">
            	<!-- Filter -->
                <nav id="options" class="work-nav">
                    <ul id="filters" class="option-set" data-option-key="filter">
                    	<li class="type-work">Kategori</li>
                        <li><a href="#filter" data-option-value="*" class="selected">Semua</a></li>
                        <li><a href="#filter" data-option-value=".studio">Pilihan Studio</a></li>
                        <li><a href="#filter" data-option-value=".prop">Properti Foto</a></li>
                        <li><a href="#filter" data-option-value=".hasil">Contoh Hasil</a></li>
                    </ul>
                </nav>
                <!-- End Filter -->
            </div>
            
            <div class="span10">
				<div id="pic-gallery">
					<a href="<?php echo $root; ?>assets/img/work/thumbs/image-01 (1).jpg">
				        <img src="<?php echo $root; ?>assets/img/work/thumbs/image-01 (1).jpg"></img>
				    </a>
					<a href="<?php echo $root; ?>assets/img/work/thumbs/image-01 (2).jpg">
				        <img src="<?php echo $root; ?>assets/img/work/thumbs/image-01 (2).jpg"></img>
				    </a>
					<a href="<?php echo $root; ?>assets/img/work/thumbs/image-01 (3).jpg">
				        <img src="<?php echo $root; ?>assets/img/work/thumbs/image-01 (3).jpg"></img>
				    </a>
					<a href="<?php echo $root; ?>assets/img/work/thumbs/image-01 (4).jpg">
				        <img src="<?php echo $root; ?>assets/img/work/thumbs/image-01 (4).jpg"></img>
				    </a>
					<a href="<?php echo $root; ?>assets/img/work/thumbs/image-01 (5).jpg">
				        <img src="<?php echo $root; ?>assets/img/work/thumbs/image-01 (5).jpg"></img>
				    </a>
					<a href="<?php echo $root; ?>assets/img/work/thumbs/image-01 (6).jpg">
				        <img src="<?php echo $root; ?>assets/img/work/thumbs/image-01 (6).jpg"></img>
				    </a>
					<a href="<?php echo $root; ?>assets/img/work/thumbs/image-01 (7).jpg">
				        <img src="<?php echo $root; ?>assets/img/work/thumbs/image-01 (7).jpg"></img>
				    </a>
					<a href="<?php echo $root; ?>assets/img/work/thumbs/image-01 (8).jpg">
				        <img src="<?php echo $root; ?>assets/img/work/thumbs/image-01 (8).jpg"></img>
				    </a>
					<a href="<?php echo $root; ?>assets/img/work/thumbs/image-01 (9).jpg">
				        <img src="<?php echo $root; ?>assets/img/work/thumbs/image-01 (9).jpg"></img>
				    </a>
					<a href="<?php echo $root; ?>assets/img/work/thumbs/image-01 (10).jpg">
				        <img src="<?php echo $root; ?>assets/img/work/thumbs/image-01 (10).jpg"></img>
				    </a>
					<a href="<?php echo $root; ?>assets/img/work/thumbs/image-01 (11).jpg">
				        <img src="<?php echo $root; ?>assets/img/work/thumbs/image-01 (11).jpg"></img>
				    </a>
					<a href="<?php echo $root; ?>assets/img/work/thumbs/image-01 (12).jpg">
				        <img src="<?php echo $root; ?>assets/img/work/thumbs/image-01 (12).jpg"></img>
				    </a>
					<a href="<?php echo $root; ?>assets/img/work/thumbs/image-01 (13).jpg">
				        <img src="<?php echo $root; ?>assets/img/work/thumbs/image-01 (13).jpg"></img>
				    </a>
					<a href="<?php echo $root; ?>assets/img/work/thumbs/image-01 (14).jpg">
				        <img src="<?php echo $root; ?>assets/img/work/thumbs/image-01 (14).jpg"></img>
				    </a>
					<a href="<?php echo $root; ?>assets/img/work/thumbs/image-01 (15).jpg">
				        <img src="<?php echo $root; ?>assets/img/work/thumbs/image-01 (15).jpg"></img>
				    </a>
					<a href="<?php echo $root; ?>assets/img/work/thumbs/image-01 (16).jpg">
				        <img src="<?php echo $root; ?>assets/img/work/thumbs/image-01 (16).jpg"></img>
				    </a>
					<a href="<?php echo $root; ?>assets/img/work/thumbs/image-01 (17).jpg">
				        <img src="<?php echo $root; ?>assets/img/work/thumbs/image-01 (17).jpg"></img>
				    </a>
					<a href="<?php echo $root; ?>assets/img/work/thumbs/image-01 (18).jpg">
				        <img src="<?php echo $root; ?>assets/img/work/thumbs/image-01 (18).jpg"></img>
				    </a>
					<a href="<?php echo $root; ?>assets/img/work/thumbs/image-01 (19).jpg">
				        <img src="<?php echo $root; ?>assets/img/work/thumbs/image-01 (19).jpg"></img>
				    </a>
					<a href="<?php echo $root; ?>assets/img/work/thumbs/image-01 (20).jpg">
				        <img src="<?php echo $root; ?>assets/img/work/thumbs/image-01 (20).jpg"></img>
				    </a>
				</div>
			</div>
        <!-- End Gallery Photos -->
		</div>
	</div>
<!-- End Gallery Section -->
<br>

<!-- Footer -->
<footer>
	<p class="credits">&copy;2016 Dunan's Do Art and Studio</p>
</footer>
<!-- End Footer -->

<!-- Js -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> <!-- jQuery Core -->
<script src="<?php echo $root; ?>assets/js/bootstrap.min.js"></script> <!-- Bootstrap -->

<script src="<?php echo $root; ?>assets/js/jquery.justifiedGallery.min.js"></script> <!-- Justified Gallery -->
<script src="<?php echo $root; ?>assets/js/jquery.colorbox-min.js"></script> <!-- Colorbox -->

<script src="<?php echo $root; ?>assets/js/jquery.isotope.js"></script> <!-- Isotope Filter -->
<script src="<?php echo $root; ?>assets/js/jquery.fancybox.pack.js"></script> <!-- Fancybox -->
<script src="<?php echo $root; ?>assets/js/jquery.fancybox-media.js"></script> <!-- Fancybox for Media -->

<script src="<?php echo $root; ?>assets/js/plugins.js"></script> <!-- Contains: jPreloader, jQuery Easing, jQuery ScrollTo, jQuery One Page Navi -->
<script src="<?php echo $root; ?>assets/js/main.js"></script> <!-- Default JS -->
<script src="<?php echo $root; ?>assets/js/jquery.nicescroll.js"</script> <!-- Nicescroll -->

<!-- Modernizr -->
<script src="<?php echo $root; ?>assets/js/modernizr.js"></script>

<script>
	colorboxConf={
		maxWidth:'85%',
		maxHeight:'85%',
		opacity:'0.8',
		transition:'fade',
		current:''
	};
</script>

<script>
	$('#pic-gallery').justifiedGallery({
		rowHeight:150,
		lastRow:'nojustify',
		margins:3,
		sizeRangeSuffixes: {
            'lt100': '_t',
            'lt240': '_m',
            'lt320': '_n',
            'lt500': '',
            'lt640': '_z',
            'lt1024': '_b'
        }
    }).on('jg.complete', function () {
        $(this).find('a').colorbox(colorboxConf);
	});
</script>

<!-- End Js -->

</body>
</html>