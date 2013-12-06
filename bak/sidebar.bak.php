<!-- begin sidebar -->
<div id="menu">

<div id="nav">
<h4><?php _e("Random Picture");?></h4>
</div>
<div align="center"><?php print g2_sidebarimageblock(); ?></div>

<div id="nav">
<h4><?php _e("Photo Albums");?></h4>
</div>
<div align="center">

<?php 
// if (ini_get("allow_url_fopen")) {
// @readfile('/photo/index.php?g2_view=albumselect.Navigation');
// }
// else {
// $ch = @curl_init();
// $timeout = 5; // set to zero for no timeout
// @curl_setopt ($ch, CURLOPT_URL, 'http://www.tourigny.ca/photo/index.php?g2_view=albumselect.Navigation');
// @curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
// @curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
// $file_contents = @curl_exec($ch);
// @curl_close($ch);
// if (is_string($file_contents) && strlen($file_contents)>0) echo $file_contents;
// }
?>



</div>

<div id="nav">

<ul>
<?php if (function_exists('wp_theme_switcher')) { ?>
  <li><h4>Themes</h4>
        <?php wp_theme_switcher('dropdown'); ?>
  </li>
<?php } ?>



 <li id="categories"><h4><?php _e('Travel'); ?></h4>
	<ul>
	<?php travelog_list_trips(); ?>
	</ul>
 </li>

<!--
 <li id="categories"><h4><?php _e('Categories'); ?></h4>
	<ul>
	<?php wp_list_cats(); ?>
	</ul>
 </li>
--> 

<?php wp_list_pages('sort_column=menu_order&exclude=8,29&title_li=<h4>' . __('Pages') . '</h4>' ); ?>

 <li id="clustrmaps"><h4><?php _e('Counter'); ?></h4>

<img src='http://counter.dreamhost.com/cgi-bin/Count.cgi?df=openphotoblog-tourigny.dat&pad=F&ft=0&dd=C&istrip=T'>
&nbsp;&nbsp;
<a class="nopic" href="http://www.digitalpoint.com/tools/geovisitors/"><img src="http://geo.digitalpoint.com/a.png" alt="Geo Visitors Map" style="border:0"></a>
<!-- <img src='http://counter.dreamhost.com/cgi-bin/Count.cgi?df=openphotoblog-tourigny.dat&pad=F&ft=0&dd=C&istrip=T&display=date&timezone=GMT-0400'> -->

<a href="http://clustrmaps.com/counter/maps.php?url=http://www.tourigny.ca" id="clustrMapsLink"><img src="http://clustrmaps.com/counter/index2.php?url=http://www.tourigny.ca" style="border:0px;" alt="Locations of visitors to this page" title="Locations of visitors to this page" id="clustrMapsImg" />
</a>
<script type="text/javascript">
function cantload() {
img = document.getElementById("clustrMapsImg");
img.onerror = null;
img.src = "http://www2.clustrmaps.com/images/clustrmaps-back-soon.jpg";
document.getElementById("clustrMapsLink").href = "http://www2.clustrmaps.com";
}
img = document.getElementById("clustrMapsImg");
img.onerror = cantload;
</script>

<?php } ?>

 </li>

 <li id="meta"><h4><?php _e('Meta'); ?></h4>
 	<ul>
		<?php wp_register(); ?>
		<li><?php wp_loginout(); ?></li>
		<li><a href="feed:<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS'); ?>"><?php _e('<abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
		<li><a href="feed:<?php bloginfo('comments_rss2_url'); ?>" title="<?php _e('The latest comments to all posts in RSS'); ?>"><?php _e('Comments <abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
		<li><a href="http://validator.w3.org/check/referer" title="<?php _e('This page validates as XHTML 1.0 Transitional'); ?>"><?php _e('Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr>'); ?></a></li>
		<li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>
		<li><a href="http://wordpress.org/" title="<?php _e('Powered by WordPress, state-of-the-art semantic personal publishing platform.'); ?>"><abbr title="WordPress">WP</abbr></a></li>
		<?php wp_meta(); ?>
	</ul>
 </li>
  <li id="search">
   <h4><label for="s"><?php _e('Search'); ?></label>	</h4>
   <form id="searchform" method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<div>
		<input type="text" name="s" id="s" size="15" /><br />
		<input type="submit" value="<?php _e('Search'); ?>" />
	</div>
	</form>
 </li>


 
 
 <li id="archives"><h4><?php _e('Archives'); ?></h4>
 	<ul>
	 <?php wp_get_archives('type=monthly'); ?>

<!--
	<p>Please select a month:</p>
	<noscript><p class="alert">Please enable JavaScript for full functionality</p></noscript>
	<select name="archivemenu" onchange="document.location.href=this.options[this.selectedIndex].value;">
		<?php get_archives('monthly', '', 'option', '', '', 'TRUE'); ?>
	</select>
-->

 	</ul>
 </li>




</ul>

<br />
</div>



</div>
<!-- end sidebar -->