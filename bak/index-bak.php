<?php 

//include_once('gravatar.php');
get_header();
?>
<div id="main">

<div id="content">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="post">
	 <h3 class="storytitle" id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
<?php if (function_exists("travelog_summary_info"))  echo travelog_summary_info(); ?><br />
	<div class="meta"><?php _e("Filed under:"); ?> <?php the_category(',') ?> &#8212; <?php the_author() ?> at <?php the_time('g:i a') ?> on <?php the_time('l, F j, Y') ?>  <?php edit_post_link(__('Edit This')); ?></div>
	
	<div class="storycontent">
		<?php the_content(__('(Read on ...)')); ?>
	</div>
	
	<div class="feedback">
            <?php wp_link_pages(); ?>
            <?php comments_popup_link(__('Comments (0)'), __('Comments (1)'), __('Comments (%)')); ?>
	</div>
	
	<!--
	<?php trackback_rdf(); ?>
	-->

</div>

<?php comments_template(); ?>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php posts_nav_link(' &#8212; ', __('&laquo; Previous Page'), __('Next Page &raquo;')); ?>

</div>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
