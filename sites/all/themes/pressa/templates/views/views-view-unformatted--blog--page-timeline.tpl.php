<ol id="timeline">
  <?php foreach ($rows as $id => $row):?>
    <?php if ($id % 2 == 0) {
      $effect = "fadeInLeft";
    } else {
      $effect = "fadeInRight";
    }?>
    <li class="timeline-item col-xs-12 col-sm-6 col-md-6 col-lg-6">
      <div class="dexp-animate" data-animate="<?php print $effect;?>">
        <?php print $row;?>
      </div>  
    </li>
  <?php endforeach;?>
</ol>