<!DOCTYPE html>
<html>
	<head>
		<?php get_header()?>
			
	</head>
	
	<body>
		<div id="wrapper">
			<header>
				<h1><a id="title1" href="./"><?php bloginfo('name')?></a></h1>
				<img  id="logo" src="<?php echo get_template_directory_uri()?>/img/logo3edit2.png"/>
			</header>
			<nav id="primary-nav">
				<?php get_template_part('nav') //includes nav.php ?>
			</nav>
			<div id="main">
				<div class="row">
					<!-- Main Column -->
					<div class="span7">
					<?php 
				/**
				 * check to see if the current request...
				 * is_category()
				 * is_front_page()
				 * is_home()
				 * is_404()
				 * is_archive()
				 * is_page
				 * is_single() --> a single post
				 * is_tag()
				 * is_search() --> a page display search results
				 */
				if(is_front_page()) {
					get_template_part('content','home');
				}elseif (is_page() || is_single()) {
					get_template_part('content','single');
				}elseif (is_search()) {
					get_template_part('content','search');
				}else {
					get_template_part('content','blog');
				}
				?>
				
					</div>
					<!-- Right Sidebar -->
					<div class="span4">
					<a class="pull-right login" href="<?php echo admin_url()?>"><i class="icon-cog"></i></a>
						<?php get_sidebar() ?>
					</div>
			</div>
			</div>
			<footer>
				<?php get_footer()?>
			</footer>
		</div>
	</body>
</html>