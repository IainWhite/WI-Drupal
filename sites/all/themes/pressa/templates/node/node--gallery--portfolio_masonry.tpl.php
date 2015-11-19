<!--DRUPAL NO CACHE-->
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
    <?php print render($title_prefix); ?>
    <?php print render($title_suffix); ?>
    <div class="content"<?php print $content_attributes; ?>>
        <?php
// We hide the comments and links now so that we can render them later.
        hide($content['comments']);
        hide($content['links']);
        hide($content['field_gallery_image']);

        $lightboxrel = 'gallery_' . drupal_html_id('image');

        $portfolio_images = field_get_items('node', $node, 'field_gallery_image');
        $image_path = '';
        if ($portfolio_images) {
            $image_path = file_create_url($portfolio_images[0]['uri']);
        }
        ?>
        <div class="portfolio-masonry-image" style="background-image: url('<?php print $image_path; ?>');">
            <div class="portfolio-overlay">
                <div class="portfolio-info">
                    <div class="portfolio-tools">
                        <a href="<?php print $image_path; ?>" rel="prettyPhoto[' <?php print $lightboxrel; ?> ']"><span class="fa fa-search"></span></a>
                    </div>
                    <h3><?php print $title; ?></h3>
                    <?php print render($content); ?>
                </div>
            </div>
        </div>
    </div>
</div>