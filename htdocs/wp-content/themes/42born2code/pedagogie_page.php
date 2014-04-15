<?php
/*
Template Name: Pedagogie
*/
?>
<?php get_header() ?>
<div id="content">
<?php the_post() //cf. codex the_post() ?>
	<div class="entry">
		<h2 class="page-title"><?php the_title() ?></h2>
		<div class="entry-content">
		<?php the_content() //cf. codex the_content() ?>
		<?php wp_link_pages('before=<div id="page-links">&after=</div>'); ?>
		</div>
	</div><!-- entry -->
<?php if ( get_post_custom_values('comments') ) comments_template() ?>
</div><!-- #content -->

<?php 
if ($post->ID == 14)
{
	?><div id="sidebar">
<ul class="xoxo"><?php
	dynamic_sidebar( 'Team42' );
	?></ul>
	</div><?php
} else {
	get_sidebar( );
}
?>

<?php get_footer() ?>