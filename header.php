<!doctype html>

  <html class="no-js"  <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">

		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Google site verification tag -->
    

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta class="foundation-mq">


			<!-- Icons & Favicons -->

  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#00aba9">
  <meta name="theme-color" content="#ffffff">

		  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>

		<!-- Drop Google Analytics here -->
		<!-- end analytics -->

	</head>

	<!-- Uncomment this line if using the Off-Canvas Menu -->
<?php if (is_front_page()) {
  ?>
  <body <?php body_class(''); ?> style="background: url('<?php the_post_thumbnail_url('full'); ?>') rgba(38,38,38,.65) no-repeat center top;">
<?php } else {?>
  <body <?php body_class('white'); ?>>
<?php }?>

  <header class="header navbar-fixed valign-wrapper" role="banner">

		<?php get_template_part( 'parts/nav', 'topbar' ); ?>

	</header> <!-- end .header -->

  <!--[if IE 8]>
<div style="padding: 10%; font-size: 2em; font-family: Helvetica; background: tomato; position: fixed; top: 0; left: 0; right: 0; bottom: 0; z-index: 10000; height: 100%;">
This website does not work in versions of Internet Explorer less than IE9.  As IE8 and below are no longer supported by Microsoft, we strongly recommend you update your browser to a more secure and modern alternative such as Google Chrome or Mozilla Firefox. Not only will this make your experience of using the Internet a faster and more pleasurable experience, it will also expose you to significantly fewer risks than continuing to use IE8.


</div>

    <![endif]-->
    <!--[if IE 7]>
  <div style="padding: 10%; font-size: 2em; font-family: Helvetica; background: tomato; position: fixed; top: 0; left: 0; right: 0; bottom: 0; z-index: 10000; height: 100%;">
  This website does not work in versions of Internet Explorer less than IE9.  As IE8 and below are no longer supported by Microsoft, we strongly recommend you update your browser to a more secure and modern alternative such as Google Chrome or Mozilla Firefox. Not only will this make your experience of using the Internet a faster and more pleasurable experience, it will also expose you to significantly fewer risks than continuing to use IE8.


  </div>

      <![endif]-->
