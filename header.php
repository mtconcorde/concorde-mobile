<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"><![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<script src="//cdn.optimizely.com/js/4323152489.js"></script>
		
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
	<meta name="viewport" content="width=device-width">
	<meta name="format-detection" content="telephone=no">
	<meta name="msvalidate.01" content="9FC6D74952BFC826956EF5065AC9858F" />

    <link rel="shortcut icon" type="image/vnd.microsoft.icon" href="<?php echo content_url(); ?>/img/icons/favicon.ico">
	<link rel="apple-touch-icon" type="image/png" href="<?php echo content_url(); ?>/img/icons/apple-touch-icon-precomposed.png"><!-- iPhone -->
	<link rel="apple-touch-icon" type="image/png" sizes="72x72" href="<?php echo content_url(); ?>/img/apple-touch-icon-precomposed.png"><!-- iPad -->
	<link rel="apple-touch-icon" type="image/png" sizes="114x114" href="<?php echo content_url(); ?>/img/apple-touch-icon-precomposed.png"><!-- iPhone4 -->
	<link rel="icon" type="image/png" href="<?php echo content_url(); ?>/img/icons/favicon.ico"><!-- Opera Speed Dial, at least 144×114 px -->

	<link href='http://fonts.googleapis.com/css?family=Raleway:200,300,400,500,700,600' rel='stylesheet' type='text/css'>
	<meta name="google-site-verification" content="bn14IDesq1wlaX06bAdFis8KcsMuNrkZrmPNM4Q22nw" />
	<meta name="msvalidate.01" content="5705E8BB645D9CDFEC5FB57E38A25824" />		
	<script type='text/javascript'>
		window.__wtw_lucky_site_id = 25519;

		(function() {
		var wa = document.createElement('script'); wa.type = 'text/javascript'; wa.async = true;
		wa.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://cdn') + '.luckyorange.com/w.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(wa, s);
		})();
	</script>
	<?php wp_head(); ?>
	<script src="http://maps.google.com/maps/api/js?key=AIzaSyDiwiiJnlEJWTVtHoC4PML983F8RmcQPXc&sensor=false"></script>
	<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
	<script type="text/javascript">stLight.options({publisher: "dr-f076c7f3-b955-4859-a8e9-5b2fb220c67e", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
	
</head>
<?php 
if (empty($_SESSION['SourceID']) || empty($_SESSION['PhoneNum'])) {
    set_source_phone(); 
}
?>
	<body <?php body_class(); ?>>
		<div id="container">
			<header id="header">
				<div id="header-top">
					<div class="content">
						<div class="row clearfix">
							<div class="col-4 text-center">
								<a href="tel:<?=$_SESSION['PhoneNum']?>" class="btn-primary">
									<span>Call</span>
								</a>
							</div><!-- col-4 -->
							<div class="col-4 text-center">
								<a class="live-chat btn-primary" onclick="_gaq.push(['_trackEvent', 'Live Chat', 'Clicks', 'Live Chat']);">
									<span>Chat</span>
								</a>
							</div><!-- col-4 -->
							<div class="col-4 text-center">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>apply-online" class="btn-accent-alt">
									<span>Apply</span>
								</a>
							</div><!-- col-4 -->
						</div><!-- row -->
					</div><!-- content -->
				</div><!-- header-top -->
				<div class="header-inner">
					<div class="row clearfix">
						<div class="col-3 text-center">
							<?php if( !is_front_page() ) : ?>
							<div class="mobile-menu-container">
								<img class="mobile-back-btn" onclick="history.go(-1);" src="<?php echo content_url(); ?>/img/back-icon.png" alt="Back" >
							</div><!-- mobile-menu-container -->
							<?php endif; ?>
						</div><!-- col-2 -->
						<div class="col-6 text-center">
							<a href="<?php echo esc_url( home_url() ); ?>" class="logo"><img src="<?php echo content_url(); ?>/img/logo.png" alt="Concorde Logo"></a>
						</div><!-- col-6 -->
						<div class="col-3 text-center">
							<div class="visible-xs visible-sm pull-right">
								<div class="mobile-menu-container">
									<img class="mobile-menu" src="<?php echo content_url(); ?>/img/menu-icon.png" alt="Concorde Menu">
								</div><!-- mobile-menu-container -->
							</div><!-- pull-right -->
						</div><!-- col-2 -->
					</div><!-- row -->
				</div><!-- header-inner -->
				<?php if ( is_blog() ) {
					include (TEMPLATEPATH . '/includes/social-share-buttons.php');	
				} ?>
			</header>
			<nav id="offscreen-nav">
				<div class="nav-action-btns">
					<?php mobile_theme_nav(); ?>
				</div><!-- nav-action-btns -->
			</nav>
			<div id="upper" class="region">
				<div class="content clearfix"></div>
			</div><!-- upper -->