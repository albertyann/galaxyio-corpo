<?php get_header(); ?>

    <?php if ( of_get_option('corpo_blogheader_radio') ): ?>
        <?php of_get_option( 'corpo_blogheader' ) == '' ? $header = __('Blog','corpo') : $header  = of_get_option( 'corpo_blogheader' ); ?>
        <section class="section-title"><?php echo $header; ?></section>            
    <?php endif; ?>
	<div id="content">
        <section id="main-content" role="main">
	
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
	
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
            <header>
                <h2><?php the_title(); ?></h2>
                <div class="entry-meta"></div>
            </header>
			<div class="entry-content">
                <?php the_content(); ?>

                <div class="wp-pagenavi">
                    <?php previous_post_link( '<div class="alignleft">%link</div>', '&laquo; %title' ); ?>
                    <?php next_post_link( '<div class="alignright">%link</div>', '%title &raquo; ' ); ?>
                </div>

                <?php edit_post_link(); ?>
                <?php corpo_setPostViews(get_the_ID()); ?>
			</div>
			<?php //comments_template(); ?>
			
		</article>
		
	<?php endwhile; ?>
	
	<?php else: ?>
	
		<article>
			
			<h1><?php _e( 'Sorry, nothing to display.', 'corpo' ); ?></h1>
			
		</article>
	
	<?php endif; ?>
	
	</section>
    </div>
<?php get_sidebar(); ?>

<?php get_footer(); ?>
