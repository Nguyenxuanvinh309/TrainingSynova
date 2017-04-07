<?php
	/*Template Name: Contact*/
?>

<?php get_header(); ?>
<div class="content" style="background: orange;">
	<div class="main-content">
		<div class="contact-info">
			<h4>This is address</h4>
			<p>Kungsgatan 13 LGH 1202, 64130 Katrineholm. Sweden</p>
			<p>132.132.1324</p>
		</div>
		<div class="contact-form">
			<?php echo do_shortcode('[contact-form-7 id="1320" title="Contact form 1"]'); ?>
		</div>
	</div>
	<div class="side-bar">
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>