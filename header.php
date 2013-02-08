<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?="\n".header_()."\n"?>
		<?php if(GA_ACCOUNT or CB_UID):?>
		
		<script type="text/javascript">
			var _sf_startpt = (new Date()).getTime();
			<?php if(GA_ACCOUNT):?>
			
			var GA_ACCOUNT  = '<?=GA_ACCOUNT?>';
			var _gaq        = _gaq || [];
			_gaq.push(['_setAccount', GA_ACCOUNT]);
			_gaq.push(['_setDomainName', 'none']);
			_gaq.push(['_setAllowLinker', true]);
			_gaq.push(['_trackPageview']);
			<?php endif;?>
			<?php if(CB_UID):?>
			
			var CB_UID      = '<?=CB_UID?>';
			var CB_DOMAIN   = '<?=CB_DOMAIN?>';
			<?php endif?>
			
		</script>
		<?php endif;?>
		
		<?  $post_type = get_post_type($post->ID);
			if(($stylesheet_id = get_post_meta($post->ID, $post_type.'_stylesheet', True)) !== False
				&& ($stylesheet_url = wp_get_attachment_url($stylesheet_id)) !== False) { ?>
				<link rel='stylesheet' href="<?=$stylesheet_url?>" type='text/css' media='all' />
		<? } ?>
		
		<?php if (is_front_page() || get_post_type($post) == 'centerpiece') { ?>
			<script type="text/javascript" src="<?=THEME_JS_URL?>/cycle.min.js"></script>
		<?php } ?>
		
		<script type="text/javascript">
			var PostTypeSearchDataManager = {
				'searches' : [],
				'register' : function(search) {
					this.searches.push(search);
				}
			}
			var PostTypeSearchData = function(column_count, column_width, data) {
				this.column_count = column_count;
				this.column_width = column_width;
				this.data         = data;
			}

			var ALERT_RSS_URL				= '<?php echo get_theme_option('alert_feed_url'); ?>';
			var SITE_DOMAIN					= '<?php echo WP_SITE_DOMAIN; ?>';
			var SITE_PATH					= '<?php echo WP_SITE_PATH; ?>';

		</script>
		
	</head>
	<!--[if IE 7 ]>     <body class="ie ie7 <?=body_classes()?><?=!is_front_page() ? ' subpage': ''?>"> <![endif]-->
	<!--[if IE 8 ]>     <body class="ie ie8 <?=body_classes()?><?=!is_front_page() ? ' subpage': ''?>"> <![endif]-->
	<!--[if IE 9 ]>     <body class="ie ie9 <?=body_classes()?><?=!is_front_page() ? ' subpage': ''?>"> <![endif]-->
	<!--[if (gt IE 9)|!(IE)]><!--> <body class="<?=body_classes()?><?=!is_front_page() ? ' subpage': ''?>"> <!--<![endif]-->
		
		<div class="container">
			<div class="row status-alert" id="status-alert-template" data-alert-id="">
				<div class="span2 alert-icon-wrap">
					<div class="alert-icon general"></div>
				</div>
				<div class="span10 alert-wrap">
					<div class="alert alert-error alert-block">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<h2>
							<a href="<?php echo get_theme_option('alert_more_information_url'); ?>">
								<span class="title">TITLE</span>
							</a>
						</h2>
						<p class="alert-body">
							<a href="<?php echo get_theme_option('alert_more_information_url'); ?>">
								<span class="content">CONTENT</span>
							</a>
						</p>
						<p class="alert-action">
							<a class="more-information" href="<?php echo get_theme_option('alert_more_information_url'); ?>">Click Here for More Information</a>
						</p>
					</div>
				</div>
			</div>
			<div class="row" id="header_wrap">
				<div id="header" class="row-border-bottom-top" role="banner">
					<h1><?=bloginfo('name')?></h1>
				</div>
			</div>
			<div id="header-nav-wrap" role="navigation" class="screen-only">
				<?=wp_nav_menu(array(
					'theme_location' => 'header-menu', 
					'container' => 'false', 
					'menu_class' => 'menu '.get_header_styles(), 
					'menu_id' => 'header-menu', 
					'walker' => new Bootstrap_Walker_Nav_Menu()
					));
				?>
			</div>