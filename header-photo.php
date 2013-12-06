<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- <html xmlns="http://www.w3.org/1999/xhtml"> -->
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml">

<head profile="http://gmpg.org/xfn/11">
<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>" />
  <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->
  <meta name="keywords" content="WordPress, themes, templates, Gemini, web, blog, web log, photo, travel, voyage, voyages"/>
  <meta name="description" content="The personal weblog and photo album of Etienne Tourigny"/>
  <meta name="author" content="Root"/>
  <meta name="ROBOTS" content="ALL"/>

  <style type="text/css" media="screen">
		@import url( <?php bloginfo('stylesheet_url'); ?> );
		@import url( <?php print( get_stylesheet_directory_uri() . '/style-photo.css' ); ?> );
	</style>

	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    
  <?php wp_get_archives('type=monthly&format=link'); ?>
	<?php //comments_popup_script(); // off by default ?>
	<?php wp_head(); ?>

</head>

<body>
<!-- <body <?php /* GeoMashup::body_attribute();*/ ?>>  -->
<div id="farouter">
<div id="outer">
<div id="rap">

<?php 
//echo "bla1"; echo $_SERVER["SCRIPT_URL"]; echo "bla2";
 ?>

<!--
<div id="masthead">
<h1 id="header"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
</div>
-->

<div id="hmenu">

<table width="100%" border=0 cellspacing=0 cellpadding=0 align="center" valign="bottom">
<tr>

<!--
<td width="15%" valign="bottom" align="right">
-->
<td width="20%" align="center" style="padding-top:5px;"><div id="hnav">
<!--
<td width="15%" valign="bottom" align="right">
   <td width="15%" align="right" style="padding-top:5px;"><div id="hnav"><a href="/lang-pref/fr/"><img src="http://etienne.tourigny.ca/wordpress/wp-content/plugins/polyglot_flags/flag-qc-fr-scale2.png" alt="Français" title="Français" /></a>&nbsp;&nbsp;<a href="/lang-pref/en/"><img src="http://etienne.tourigny.ca/wordpress/wp-content/plugins/polyglot_flags/flag-us-uk-scale2.png" alt="English" title="English" /></a></div></td>
-->
 
<?php	
  if(function_exists('polyglot_list_langs')) {
    //       echo "&nbsp;&nbsp;"; 
    polyglot_list_langs(true); 
  }
?>

</div></td>

<?php $tmp_home=get_bloginfo('home'); ?>

<td width="60%">
<div id="hnav">
<ul id="navlist">

<li>&nbsp;</li>
<li><a href="<?php echo $tmp_home; ?>/" style="border-left: 1px solid #FFFFFF;"><?php _e("Journal");?></a></li>
<li><a href="<?php echo $tmp_home; ?>/photo"><?php _e("Photo");?></a></li>
<!-- travel was before photo
<li><a href="<?php echo $tmp_home; ?>/travel"><?php _e("Travel");?></a></li>
<li><a href="/photo/map"><?php _e("Photo Map");?></a></li> 
-->
<li><a href="<?php echo $tmp_home; ?>/contact"><?php _e("Contact");?></a></li>
<li><a href="<?php echo $tmp_home; ?>/about"><?php _e("About");?></a></li>
<!-- 
<li><a href="<?php echo $tmp_home; ?>/links"><?php _e("Links");?></a></li>
-->
<li><a href="<?php echo $tmp_home; ?>/subscribe"><?php _e("Subscribe");?></a></li>
<!-- 
<li><a href="/chat"><?php _e("Chat");?></a></li>
-->

</ul>
</div>
</td>

<td width="20%" valign="center" align="center">
<a href="<?php bloginfo('url'); ?>"><b><?php bloginfo('name'); ?></b></a>
</td>

</tr>
</table>

</div>
</div>
</div>
<!-- end header -->
