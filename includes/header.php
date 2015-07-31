<!-- Set default language -->
<?php if (strcmp(substr(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), 1,2), "fr") == 0) {$LANG = "fr";} elseif (strcmp(substr(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), 1,2), "es") == 0) {$LANG = "es";} elseif (strcmp(substr(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), 1,3), "cat") == 0) {$LANG = "cat";} else {$LANG = "/";} ?>


	<meta name="author" content="Paul Hickey">

	<!-- Le styles -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

	<link href="/css/style.css" rel="stylesheet">
	<link href="/css/scrolling-nav.css" rel="stylesheet">


	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.js"></script>
	<script src="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

	<!-- Slider js & css -->
	<script type="text/javascript" src="/js/jquery.anoslide.js"></script>
	<style type="text/css">
		.carousel { position:relative; margin: 0px auto; width: 600px; display: block; min-height: 20px; height:auto !important; height: 20px;  background:url(/images/loader.gif) center center no-repeat; }
		.carousel .next,
		.carousel .prev { display:none; width:56px; height:56px; position:absolute; top:30px; left:50%; margin-top:-28px; z-index:9999; cursor:pointer; }
		.carousel .prev { margin-left:-60px; background:url(/images/prev.png) 0 0 no-repeat;  }
		.carousel .next { margin-right:-60px;  background:url(/images/next.png) 0 0 no-repeat; }
		.carousel li { display:none; }
		.carousel li img { width:100%; height:auto; }
		.paging { position:absolute; z-index:9998; }
		.paging > a { display:block; cursor:pointer; width:40px; height:40px; float:left; background:url(/images/dots.png) 0px -40px no-repeat; }
		.paging > a:hover,
		.paging > a.current { background:url(/images/dots.png) 0px 0px no-repeat;  }
		.badge { display:block; width:104px; height:104px; background:url(/images/badge.png) 0 0 no-repeat; z-index:9000; position:absolute; top:-3px; left:-3px; }
		img {
			-webkit-user-select: none;  /* Chrome all / Safari all */
			-moz-user-select: none;     /* Firefox all */
			-ms-user-select: none;      /* IE 10+ */
			-o-user-select: none;
			user-select: none;
		}
		/* Figure */
	</style>



	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
	<![endif]-->

	<!-- Fav and touch icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
	<link rel="shortcut icon" href="../assets/ico/favicon.png">
