
<div class="dexp_tab_wrapper horizontal clearfix" id="dexp_tab_wrapper_blog_tabbed">
  
  <ul class="nav nav-tabs">
      <li class="first active"><a data-toggle="tab" href="#dexp_tab_item_new">
          <i class="tab-icon fa "></i>Recent </a></li>
      <li class=""><a data-toggle="tab" href="#dexp_tab_item_popular">
          <i class="tab-icon fa "></i>Popular </a></li>    
  </ul>

  <div class="tab-content">
    <div class="tab-pane" id="dexp_tab_item_new">
      <?php print views_embed_view('blog','block_recent_post');?>
    </div>
    <div class="active tab-pane" id="dexp_tab_item_popular">
      <?php print views_embed_view('blog','block_popular_posts');?>
    </div>
  </div>
</div>
