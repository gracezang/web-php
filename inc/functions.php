<!--Grace Zang 20065628 -->
<?PHP
function print_head($page_title,$value) { ?>
	<?php if ($value == TRUE){ ?>
	<head>
		<title><?= $page_title ?></title>
		<meta charset="utf-8"/>
		<meta name="author" content="Zilong Zhang"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" href="css/icons.css"> 	
		<link rel="stylesheet" href="css/style.css"> 	
		<link rel="stylesheet" href="css/responsive.css">
		<link rel="stylesheet" href="css/magnific-popup.css">
		<script src="js/jquery-3.4.1.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/header-slideshow.js"></script>
		<script src="js/thumbnail-gallery.js"></script>
		<script src="js/submissionValidation.js"></script>
	</head>
	<?php
	}else{ ?>
		<head>
		<title><?= $page_title ?></title>
		<meta charset="utf-8"/>
		<meta name="author" content="Zilong Zhang"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" href="css/icons.css"> 	
		<link rel="stylesheet" href="css/style.css"> 	
		<link rel="stylesheet" href="css/responsive.css">
		<script src="js/jquery-3.4.1.min.js"></script>
		<script src="js/header-slideshow.js"></script>
		<script src="js/submissionValidation.js"></script>
	</head>
	<?PHP
	}
}

function get_string_form_data($name, $superglobal, $filter = FILTER_SANITIZE_STRING) {
	$form_data = '';
	if (array_key_exists($name, $superglobal)) {
		$form_data = trim($superglobal[$name]);
		$form_data = filter_var($form_data, $filter);
	}
	
	return $form_data;
}