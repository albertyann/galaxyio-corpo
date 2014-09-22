<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	
	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class('post-excerpt'); ?>>
	
    	<!-- post thumbnail -->
		<?php if ( has_post_thumbnail()) : ?>
        <div class="img-wrapper">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail('medium');  ?>
			</a>
        </div>
		<?php endif; ?>
		<!-- /post thumbnail -->
        <div class="entry-excerpt">
            <h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
            <div class="entry-meta"></div>
            <p><?php corpo_excerpt('corpo_excerptlength_teaser');  ?></p>
        </div>
		
		<?php edit_post_link(); ?>
		
	</article>
	<!-- /article -->
	
<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
        <p><?php _e( 'It seems we can\'t find what you\'re looking for. Perhaps searching can help.', 'corpo' ); ?></p>
		<?php get_search_form(); ?>
	</article>
	<!-- /article -->

<?php endif; ?>
