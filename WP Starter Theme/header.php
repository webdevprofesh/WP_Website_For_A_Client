<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery-3.2.1.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/smooth-scroll.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>

    <?php wp_head(); ?>

</head>
<?php if(is_page_template('page-landing.php')) {?> <body class="landing">
<?php } else { ?><body><?php } ?>
