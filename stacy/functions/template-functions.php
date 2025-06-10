<?php
//Start: Center Header Layout
if (!function_exists('stacy_center_header_type')) :

    function stacy_center_header_type() { ?>


<!--<div class="clearfix"></div>-->


<div class="index-logo index5">
	<div class="container">
             <?php the_custom_logo(); ?>
            <div class="site-branding-text align-center">
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
					$stacy_description = get_bloginfo( 'description', 'display' );
					if ( $stacy_description || is_customize_preview() ) : ?>
						<p class="site-description"><?php echo $stacy_description; ?></p>
					<?php endif; ?>
                </div>
	</div>
</div>  



<!--Logo & Menu Section-->	
<nav class="navbar navbar-custom navbar5 hp-hc" role="navigation">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#custom-collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
            </button>
	<div class="container-fluid p-l-r-0">
		<!-- Brand and toggle get grouped for better mobile display -->
	
			
			
	
	

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div id="custom-collapse" class="collapse navbar-collapse">
					<?php wp_nav_menu( array(
								'theme_location' => 'primary',
								'container'  => 'nav-collapse collapse navbar-inverse-collapse',
								'menu_class' => 'nav navbar-nav',
								'fallback_cb' => 'spicepress_fallback_page_menu',
								'walker' => new Spicepress_nav_walker() 
							) ); 
						?>
				
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>	
<!--/Logo & Menu Section-->	

<div class="clearfix"></div>
<?php
}

endif;
//End: Center Header Layout

//Start: Default Header Layout
if (!function_exists('stacy_default_header_type')) :

    function stacy_default_header_type() {
    $stacy_header_logo_placing = get_theme_mod('header_logo_placing', 'left');
if($stacy_header_logo_placing == 'center'){ ?>
<header class="desktop-header-center">
<?php } ?>
<!--Logo & Menu Section-->	
<nav class="<?php if($stacy_header_logo_placing == 'center'){ echo 'navbar-center-fullwidth'; }?> navbar navbar-custom <?php echo esc_attr($stacy_header_logo_placing);?>">
	<div class="container-fluid p-l-r-0">
		<!-- Brand and toggle get grouped for better mobile display -->
	<?php 	
	if($stacy_header_logo_placing == 'left'){$spicepress_menu_class = 'navbar-right';}
	if($stacy_header_logo_placing == 'right'){$spicepress_menu_class = 'navbar-left';}
	if($stacy_header_logo_placing == 'center'){$spicepress_menu_class = '';}
	if($stacy_header_logo_placing == 'left'){  
	?>
		<div class="navbar-header">
			<?php the_custom_logo(); ?>
			<div class="site-branding-text">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
				$stacy_description = get_bloginfo( 'description', 'display' );
				if ( $stacy_description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo $stacy_description; ?></p>
				<?php endif; ?>
			</div>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#custom-collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
            </button>
		</div>
	<?php } if($stacy_header_logo_placing == 'right'){  ?>


        <div class="navbar-header align-right">
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#custom-collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
            </button>
			<?php the_custom_logo(); ?>
                    <div class="site-branding-text align-right">
                            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                            <?php
                            $stacy_description = get_bloginfo( 'description', 'display' );
                            if ( $stacy_description || is_customize_preview() ) : ?>
                                    <p class="site-description"><?php echo $stacy_description; ?></p>
                            <?php endif; ?>
                    </div>
        </div>
		
	<?php }  if($stacy_header_logo_placing == 'center'){ ?>
	
		    <div class="logo-area">
                        <?php the_custom_logo(); ?>
                        <div class="site-branding-text align-center">
                                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                                <?php
                                $stacy_description = get_bloginfo( 'description', 'display' );
                                if ( $stacy_description || is_customize_preview() ) : ?>
                                        <p class="site-description"><?php echo $stacy_description; ?></p>
                                <?php endif; ?>
                        </div>
                    </div>
			
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#custom-collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
            </button>
	
	<?php } ?>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div <?php if($stacy_header_logo_placing != 'center'){ echo 'id="custom-collapse"'; } ?> class="collapse navbar-collapse">
                    <?php wp_nav_menu( array(
                                            'theme_location' => 'primary',
                                            'container'  => 'nav-collapse collapse navbar-inverse-collapse',
                                            'menu_class' => 'nav navbar-nav '.$spicepress_menu_class.'',
                                            'fallback_cb' => 'spicepress_fallback_page_menu',
                                            'walker' => new Spicepress_nav_walker() 
                                    ) ); 
                    ?>
				
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>	
<!--/Logo & Menu Section-->	

<?php if($stacy_header_logo_placing == 'center'){ ?>
</header>
<?php } ?>


<?php if($stacy_header_logo_placing == 'center'){ ?>
<header class="mobile-header-center">

<!--Logo & Menu Section-->	
<nav class="navbar navbar-custom <?php echo esc_attr($stacy_header_logo_placing);?>">
	<div class="container-fluid p-l-r-0">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<?php the_custom_logo(); ?>
			<div class="site-branding-text">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
				$stacy_description = get_bloginfo( 'description', 'display' );
				if ( $stacy_description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo $stacy_description; ?></p>
				<?php endif; ?>
			</div>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#custom-collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
            </button>
		</div>
		

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div id="custom-collapse" class="collapse navbar-collapse">
					<?php wp_nav_menu( array(
								'theme_location' => 'primary',
								'container'  => 'nav-collapse collapse navbar-inverse-collapse',
								'menu_class' => 'nav navbar-nav navbar-right',
								'fallback_cb' => 'spicepress_fallback_page_menu',
								'walker' => new Spicepress_nav_walker() 
							) ); 
						?>
				
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>	
<!--/Logo & Menu Section-->

</header>
<?php } ?>
<div class="clearfix"></div>
<?php
        
}
    
endif;
//End: Default Header Layout


//Start: Default Blog Layout
if(!function_exists('stacy_default_blog_type')):
function stacy_default_blog_type() { ?>
    <section class="home-news" id="blog">
	<div class="container">
		<?php
		$stacy_home_news_section_title = get_theme_mod('home_news_section_title',__('Turpis mollis','stacy'));
		$stacy_home_news_section_discription = get_theme_mod('home_news_section_discription',__('Sea summo mazim ex, ea errem eleifend definitionem vim. Ut nec hinc dolor possim mei ludus efficiendi ei sea summo mazim ex.','stacy'));
		
		if(($stacy_home_news_section_title) || ($stacy_home_news_section_discription)!='' ) { 
		?>
	    <!-- Section Title -->
		<div class="row">
			<div class="col-md-12">
				<div class="section-header">
					<?php if($stacy_home_news_section_title) {?>
					<h1 class="widget-title wow fadeInUp animated animated" data-wow-duration="500ms" data-wow-delay="0ms">
					<?php echo esc_html($stacy_home_news_section_title); ?>
					</h1>
					<?php } ?>
					<div class="widget-separator"><span></span></div>
					<?php if($stacy_home_news_section_discription) {?>
					<p class="wow fadeInDown animated">
					<?php echo esc_html($stacy_home_news_section_discription); ?>
					</p>
					<?php } ?>
				</div>
			</div>
		</div>
		<!-- /Section Title -->
		<?php } ?>
	
		<div class="row">
		<?php 
		$stacy_args = array( 'post_type' => 'post','posts_per_page' => 3,'post__not_in'=>get_option("sticky_posts")) ; 	
						query_posts( $stacy_args );
						if(query_posts( $stacy_args ))
					{	
						while(have_posts()):the_post();
					{ ?>
			
			<div class="col-md-4 col-sm-6 col-xs-12">
				<article class="post wow fadeInDown animated" data-wow-delay="0.4s">
				    <?php spicepress_blog_meta_content(); ?>
					<header class="entry-header">
						<h4 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h4>
				    <?php spicepress_blog_category_content(); ?>
					</header>		
					<?php if(has_post_thumbnail()){ ?>
					<figure class="post-thumbnail"><?php $defalt_arg =array('class' => "img-responsive");?>
						<?php if(has_post_thumbnail()){?>
						<a  class="post-thumbnail" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('',$defalt_arg);?></a>
						<?php } ?>
					</figure>
					<?php } ?>
					<div class="entry-content">
						<?php the_content(__('Read More','stacy')); ?>
					</div>						
				</article>
			</div>
			<?php }  endwhile; } ?>
		</div>
	</div>	
</section>
<div class="clearfix"></div>
 <?php
}
endif;
//End: Default Blog Layout

//Start: List Blog Layout
if(!function_exists('stacy_list_blog_type')):
function stacy_list_blog_type() { ?>

<section class="blog-section home-news" id="blog2">
	<div class="container">
		<?php
		$stacy_home_news_section_title = get_theme_mod('home_news_section_title',__('Turpis mollis','stacy'));
		$stacy_home_news_section_discription = get_theme_mod('home_news_section_discription',__('Sea summo mazim ex, ea errem eleifend definitionem vim. Ut nec hinc dolor possim mei ludus efficiendi ei sea summo mazim ex.','stacy'));
		
		if(($stacy_home_news_section_title) || ($stacy_home_news_section_discription)!='' ) { 
		?>
	    <!-- Section Title -->
		<div class="row">
			<div class="col-md-12">
				<div class="section-header">
					<?php if($stacy_home_news_section_title) {?>
					<h1 class="widget-title wow fadeInUp animated animated" data-wow-duration="500ms" data-wow-delay="0ms">
					<?php echo esc_html($stacy_home_news_section_title); ?>
					</h1>
					<?php } ?>
					<div class="widget-separator"><span></span></div>
					<?php if($stacy_home_news_section_discription) {?>
					<p class="wow fadeInDown animated">
					<?php echo esc_html($stacy_home_news_section_discription); ?>
					</p>
					<?php } ?>
				</div>
			</div>
		</div>
		<!-- /Section Title -->
		<?php } ?>

    <div class="row blog-list-layout">
		<?php 
		$stacy_args = array( 'post_type' => 'post','posts_per_page' => 3,'post__not_in'=>get_option("sticky_posts")) ; 	
						query_posts( $stacy_args );
						if(query_posts( $stacy_args ))
					{	
						while(have_posts()):the_post();
					{ ?>
			
			<div class="col-md-12 col-sm-12 col-xs-12">
				<article class="post wow fadeInDown animated" data-wow-delay="0.4s">
                                    <div class="media">	
                                    <?php if(has_post_thumbnail()){ ?>
					<figure class="post-thumbnail thumb-width thumb-align-left"><?php $defalt_arg =array('class' => "img-responsive");?>
						<?php if(has_post_thumbnail()){?>
						<a  class="post-thumbnail" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('',$defalt_arg);?></a>
						<?php } ?>
					</figure>
					<?php } ?>
                                        
                                        <div class="media-body">
                                            <?php spicepress_blog_meta_content(); ?>
                                            <header class="entry-header">
                                                <h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
                                                <?php spicepress_blog_category_content(); ?>
                                        </header>
                                            <div class="entry-content">
						<?php the_content(__('Read More','stacy')); ?>
					</div>	
                                        </div>
                                        
                                        					
                                    </div>
                                    
				    
						
					
				</article>
			</div>
			<?php }  endwhile; } ?>
		</div>
                	</div>	
</section>
<div class="clearfix"></div>
 <?php
    
}
endif;
//End: List Blog Layout


/*----Function for the menu breakpoint----*/ 

add_action('wp_head','stacy_custom_menu_breakpoint');
function stacy_custom_menu_breakpoint() {
	
if(get_theme_mod('custom_color_enable') == false)
{ $link_color = '#395ca3';
    
}else{
    $link_color = esc_html(get_theme_mod('link_color', '#ce1b28'));
}
    
$spicepress_menu_breakpoint = esc_html(get_theme_mod('menu_breakpoint', 1100));
 

?>
<style type="text/css">


/*stacy child*/
@media (max-width: <?php echo $spicepress_menu_breakpoint; ?>px){
.navbar5.hp-hc .navbar-toggler {
        display: block;
        margin: 15px auto;
        padding: 6px 10px;
        float: none;
}
.navbar5.navbar-custom .navbar-nav li > a { padding: 15px 17px; }
.navbar-custom.hp-hc .navbar-nav > li {
    float: none;
    display: block !important;
}
.navbar-custom.hp-hc .navbar-nav {
    display: block;
    text-align: left;
}
.navbar.navbar5 .navbar-nav > li > a:hover, .navbar.navbar5 .navbar-nav > li > a:focus, .navbar-custom.hp-hc .navbar-nav .dropdown.open > a, .navbar-custom.hp-hc .navbar-nav .dropdown.open > a:focus, .navbar-custom.hp-hc .navbar-nav .dropdown.open > a:hover{background-color: transparent !important;color: #FFFFFF !important;}
.navbar-custom.hp-hc.navbar5.navbar-custom .navbar-nav > .active > a:after {content: none;}
.index5 .site-branding-text {
        float: none;
}
.index5 .navbar-custom .dropdown-menu { 
        border-top: 2px solid <?php echo $link_color; ?> !important;
        border-bottom: 2px solid <?php echo $link_color; ?> !important;
}
@media (min-width: 100px) and (max-width: <?php echo $spicepress_menu_breakpoint; ?>px) { 
	nav.navbar .navbar-nav > .active > a, 
	nav.navbar .navbar-nav > .active > a:hover, 
	nav.navbar .navbar-nav > .active > a:focus {
		
            color: <?php echo $link_color; ?> !important;
            background-color: transparent;
	}
}

}





</style>
<?php } ?>