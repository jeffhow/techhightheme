<nav aria-label="pagination" class="nav-pagination container-fluid">
  
  <?php 
    global $wp_query;
    // Max number of pages
    $max_pages = $wp_query->max_num_pages; 
    // Current Page
    $page_number = (get_query_var('paged')) ? get_query_var('paged') : 1;
  ?>
  <div class="row"><div class="col-xs-auto ">
  <ul class="pagination">
    <li class="page-item <?php echo (1 == $page_number) ? 'disabled' : ''; ?>">
      <a class="page-link" href="<?php previous_posts(); ?>"><i class="fas fa-angle-left"></i> Newer</a>
    </li>
    <li class="page-item active">
      <a class="page-link" href="#">
        <?php echo 'Page '.$page_number.' of '.$max_pages; ?><span class="sr-only">(current)</span>
      </a>
    </li>
    <li class="page-item <?php echo ($max_pages == $page_number) ? 'disabled' : ''; ?>">
      <a class="page-link" href="<?php next_posts(); ?>">Older <i class="fas fa-angle-right"></i> </a>
    </li>
  </ul>
  </div></div>
</nav>