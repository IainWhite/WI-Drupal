<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
   
	<div class="portfolio-media">
      <?php print render($content['field_portfolio_images']); ?>
		<div class="portfolio-overlay">
			<a href="<?php print $node_url;?>"><i class="fa fa-plus"></i></a>
		</div>
    </div>
    <div class="portfolio-content">
      <h3 class="portfolio-title"><a href="<?php print $node_url;?>"><?php print $title;?></a></h3>
      <div class="portfolio-category">
			<i class="fa fa-folder-open"></i>
			<?php print strip_tags(render($content['field_portfolio_categories']));?>
		</div>
	 </div>
	 
</div>