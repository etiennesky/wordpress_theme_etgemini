<?php
/*
Template Name: Travel
*/
?>

<?php


$tmp_arr=(array('map_type'=>"hybrid", 'controls'=>"large", 'width'=>"600", 'height'=>"600",'show_types'=>1,'scale'=>1)); 
//$tmp_arr=(array('map_type'=>"hybrid", 'controls'=>"small", 'width'=>"600", 'height'=>"600",'show_types'=>1,'scale'=>1)); 

if ($_GET['trip']!="") {
	$query_trip=true;
	$tmp_trip_id = $_GET['trip'];
	$tmp_trip = Travelog::get_trip($tmp_trip_id);
}
else {
	$query_trip=false;
	$tmp_bla = Travelog::get_trips(1,'newest');
//	foreach ($tmp_bla as $tmp_trip_id => $tmp_trip) {  }
	if ($tmp_bla!=false) foreach ($tmp_bla as $tmp_trip_id => $tmp_trip) {  }
}
if ($tmp_trip) {
	$tmp_title=$tmp_trip->name;
	$tmp_arr['trips']=$tmp_trip_id;
}
else {
	$tmp_title = the_title('','',false);
	$tmp_arr['ids']="last(5)";
}

?>


<?php get_header(); ?>

<div id="main">
<div id="content">
	<div id="static">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<h4 id="post-<?php the_ID(); ?>"><?php echo $tmp_title; ?></h4>
			<div class="entrytext">

<?php 

	if($tmp_trip->name!='') echo '<h3>Trip ' . $tmp_trip->name . '</h3>';
//print desc and dates
//if ($tmp_trip->description!='') $tmp_desc = $tmp_trip->description; else $tmp_desc="";
if ($tmp_trip->description!='') $tmp_desc = polyglot_filter_with_message($tmp_trip->description); else $tmp_desc="";
if ($tmp_trip->start_date!='') $tmp_sd = $tmp_trip->start_date; else $tmp_sd="";
if ($tmp_trip->end_date!='') $tmp_ed = $tmp_trip->end_date; else $tmp_ed="";
if ($tmp_desc.$tmp_sd.$tmp_ed!="") {
	echo "<p>$tmp_desc";
	if ($tmp_desc!='') echo "<br>";
	echo "($tmp_sd - $tmp_ed)</p>";
}

//if($query_trip==false) echo"<p>".__('You can find the other trips in the "Trips" section in the sidebar.')."</p>";  
?>

<?php 
//echo Travelog::embed_map2($tmp_arr);
//echo Travelog::embed_map4($tmp_arr);
echo Travelog::embed_map($tmp_arr);
//echo Travelog::embed_map(array('ids'=>"last(5)",'map_type'=>"satellite", 'controls'=>"large", 'width'=>"600", 'height'=>"400")); 
?>
			</div>
	  <?php endwhile; endif; ?>

<br>Other trips:<br><br>


<?php travelog_list_trips(); ?>

<!--
<br>This page does not work with Internet Explorer.  Use <a href='http://get-firefox.com'>Firefox</a> instead!
<br>Cette page ne fonctionne pas avec Internet Explorer.  Utilisez <a href='http://get-firefox.com'>Firefox</a> &agrave; la place!
-->

	</div>

</div>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
