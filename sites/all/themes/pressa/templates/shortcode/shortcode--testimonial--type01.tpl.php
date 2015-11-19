<div class="testimonial item <?php if ($sequence == 0) {print 'active ';} print $classes;?>">
    <img src="<?php print $image;?>" alt="">
    <p><?php print $content;?></p>
    <div class="testimonial-meta">
        <h4><?php print $name; if($position!=''){print ' - '.$position; }?> <small><?php if($site!=''){print $site; }?></small></h4>
    </div><!-- end testimonial meta -->
</div>