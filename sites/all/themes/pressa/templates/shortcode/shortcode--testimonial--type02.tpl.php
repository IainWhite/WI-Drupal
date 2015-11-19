<div class="testimonial testimonial-primary item <?php if ($sequence == 0) {print 'active ';} print $classes;?>">
    <blockquote>
        <em class="icon-quote-left"></em><?php print $content;?>
    </blockquote>
    <p class="testimonial-footer">
        <img alt="" src="<?php print $image;?>">
        <span class="testimonial-name">
        <b><?php print $name;?></b> <?php if($position!=''){print ' - '.$position; }?>
        </span>
        <?php if($site!=''):?>        
        <br><span class="testimonial-site"><?php print $site;?></span>
        <?php endif;?>
    </p>
</div>