<?php
/**
 * The header for our theme
 */
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php the_title(); ?></title>
	<meta content="<?php the_title(); ?>" property="og:title">
	<?php the_field('meta', 'option'); ?>
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<link href="<?php echo get_template_directory_uri(); ?>/webflow/css/normalize.css" rel="stylesheet" type="text/css">
	<link href="<?php echo get_template_directory_uri(); ?>/webflow/css/webflow.css" rel="stylesheet" type="text/css">
	<link href="<?php echo get_template_directory_uri(); ?>/webflow/css/craft-restaurant.webflow.css?<?php echo date('l jS \of F Y h:i:s A'); ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo get_template_directory_uri(); ?>/webflow/css/style.css?<?php echo date('l jS \of F Y h:i:s A'); ?>" rel="stylesheet" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/webflow/js/fonts.js" type="text/javascript"></script>
	<!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
	<script src="<?php echo get_template_directory_uri(); ?>/webflow/js/events.js" type="text/javascript"></script>
	<link href="<?php echo get_template_directory_uri(); ?>/webflow/icons/favicon.png" rel="shortcut icon" type="image/x-icon">
	<link href="<?php echo get_template_directory_uri(); ?>/webflow/icons/favicon.png" rel="apple-touch-icon">
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=<?php the_field('google_api', 'option'); ?>"></script>
	<?php the_field('head_code', 'option'); ?>
</head>
<body class="body">