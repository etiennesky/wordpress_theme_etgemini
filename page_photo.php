<?php //get_header();
 ?>
<?php 
include_once('gravatar.php');
get_header();
?>

<div id="main">

<div id="content">

	<div id="static">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post">
<!--
		<h3 id="post-<?php the_ID(); ?>"><?php the_title(); ?></h3>
-->
			<div class="entrytext">
				<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
	
				<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
	
			</div>
		</div>
	  <?php endwhile; endif; ?>
	
	</div>

</div>
</div>

<?php /* get_sidebar(); */ ?>

<?php get_footer(); ?>
