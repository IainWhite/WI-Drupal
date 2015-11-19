<div node="<?php print $node->nid; ?>" class="<?php print $classes; ?>">
	<div class="testimonials">
		<div class="testimonial-image">
		<?php print render($content['field_testimonial_image']); ?>	
		</div>
		<div class="testimonial-content">
			<?php print render($content['body']); ?>
		</div>
		<div class="testimonial-meta">
			 <h4><?php print strip_tags(render($content['field_testimonial_name'])); ?> <small>
			 <a href="#"><?php print strip_tags(render($content['field_testimonial_url'])); ?></a></small></h4>
		</div><!-- end testimonial meta -->
	</div>
</div>