<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
    <div class="team-wrapper"<?php print $content_attributes; ?>>
        <div class="valign">
        <div class="teamimg">
            <?php print render($content['field_team_image']); ?>
        </div>
        <div class="desc">
            <h4><?php print $title; ?></h4>
            <small><?php print render($content['field_team_position']); ?></small>
            <p><?php print render($content['body']); ?></p>
        </div>
    </div><!-- valign -->
    <?php if($content['field_team_skill']!=NULL):?>
    <hr>
    <div class="about_skills">
        <?php print render($content['field_team_skill']); ?>
    </div><!-- about_skills -->
    <?php endif;?>
    <?php if($content['field_team_social']!=NULL):?>
    <hr>
    <div class="social clearfix">
        <?php print render($content['field_team_social']); ?>
    </div><!-- end social -->
    <?php endif;?>
    </div>
</div>