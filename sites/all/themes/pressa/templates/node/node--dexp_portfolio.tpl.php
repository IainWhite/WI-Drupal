<div id="node-<?php print $node->nid; ?>" class="node-portfolio-details <?php print $classes; ?> clearfix"<?php print $attributes; ?>>
    <?php print render($title_prefix); ?>
    <?php print render($title_suffix); ?>
    <?php
    // We hide the comments and links now so that we can render them later.
    hide($content['comments']);
    hide($content['links']);
    hide($content['field_portfolio_images']);
    ?>
    <div class="content row"<?php print $content_attributes; ?>>
        <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12 item-media">
            <?php
            if (isset($content['field_portfolio_media'])):
                print render($content['field_portfolio_media']);
            else:
                print render($content['field_portfolio_images']);
            endif;
            ?>
        </div>
        <div class="col-lg-5 col-md-5 -col-sm-6 col-xs-12 item-details">
            <div class="title-wrapper title-left" style="padding-top:0;"><h3 class="nosubtitle" style="font-size:18px;"><?php print t('Item Details'); ?></h3></div>
            <?php
            print render($content['body']);
            print "<hr>";
            if(isset($content['field_portfolio_categories'])):
            print '<div class="item"><label>Categories: </label>'.render($content['field_portfolio_categories']).'</div>';
            endif;
            if(isset($content['field_portfolio_client'])):
            print '<div class="item"><label>Client: </label>'.render($content['field_portfolio_client']).'</div>';
            endif;
            if(isset($content['field_portfolio_skills'])):
            print '<div class="item"><label>Skills: </label>'.render($content['field_portfolio_skills']).'</div>';
            endif;
            if(isset($content['field_portfolio_website'])):
            print '<div class="item"><label>Website: </label>'.render($content['field_portfolio_website']).'</div>';    
            endif;
            print "<hr>";  
            print render($content['field_portfolio_url']);
            ?>
        </div>
    </div>
    <?php print render($content['links']); ?>
    <?php print render($content['comments']); ?>
    <hr class="dm">
</div>