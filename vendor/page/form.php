<html>
	<head>
		<title><?=$show['name'];?></title>
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
		<link rel="icon" href="/favicon.ico" type="image/x-icon">
		<link rel="canonical" href="<?=URL.$_SERVER[REQUEST_URI];?>" />
		<meta property="og:site_name" content="<?=$show['name'];?>"/>
		<meta property="og:description" content="<?=$show['desc'];?>" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="<?=URL.$_SERVER['REQUEST_URI'];?>"/>
		<meta property="og:image" content="<?=$show['ogimg'];?>" />
		<meta property="og:image:secure_url" content="<?=$show['ogimg'];?>" />
		<meta property="og:image:type" content="image/jpeg" />
		<meta property="og:image:width" content="500" />
		<meta property="og:image:height" content="500" />
		<meta property="og:image:alt" content="<?=$show['name'];?>" />
		<meta name="keywords" content="<?=$show['keyword'];?>">
		<meta name="description" content="<?=$show['desc'];?>">
		<meta name="author" content="Wildan Izzudin">
		<meta name="copyright" content="Copyright &copy; Indocoder. All Rights Reserved." />
		<script src="/vendor/static/js/jquery.js" type="text/javascript"></script>
		<script src="/vendor/static/js/tod.js" type="text/javascript"></script>
		<script src="/vendor/static/js/form.js" type="text/javascript"></script>
		<script src="/vendor/static/js/copy.js" type="text/javascript"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style> @import "/vendor/static/css/style.css"; @import "/vendor/static/css/tod.css"; </style>
	</head>
<body>
	<div id="index"></div>
		<script src="/vendor/static/js/script.js"></script>
		<script> _('Crop me', '<?=number_format(total)?>');</script>
	</body>
</html>