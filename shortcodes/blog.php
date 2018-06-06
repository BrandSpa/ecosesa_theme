<?php

function ecosesa_blog_sc( $atts ) {
    
    $at = shortcode_atts(
        array(
            "blog_title" => "Blog",
            "blog_url"  => "#000",
            "blog_link_title" => "VER TODAS LAS NOTICIAS"
        ), 
    $atts);

    $args = array(
        'category_name'    => 'blog',
        'orderby'          => 'date',
        'order'            => 'DESC',
        'post_type'        => 'post',
        'post_status'      => 'publish',
        'posts_per_page'   => 3,
    );

    $posts = get_posts( $args );

    ob_start();
  ?>
  
  <!--ecosesa_blog-->
  <div class="main-blog vc_blog" data-props='<?php echo json_encode($props); ?>'>
  <!--/ecosesa_blog-->
  <div class="content container">

  <div class="w-100 row">
      <div class="col-6 text-left d-flex align-items-center">
          <h3><?php echo $at['blog_title'] ?></h3>
      </div>
      <div class="col-6 d-flex align-items-center">
          <a href="<?php echo $at['blog_url'] ?>" class="w-100 text-right "><?php echo $at['blog_link_title'] ?> <i class="pl-2 fas fa-chevron-right"></i></a>
      </div>
  </div>
  <div class="card-deck">
    <?php foreach($posts as $post): ?>
    <?php /*<pre><?php print_r($post); ?></pre>*/ ?> 
            <div class="card post-card">
                <img class="card-img-top img-fluid" src="<?php echo get_the_post_thumbnail_url($post->ID) ?>" alt="<?php the_title() ?>">
                <div class="card-body">
                    <h5 class="date"><?php echo get_the_date('', $post->ID) ?></h5>
                    <p class="card-text"><?php echo get_the_title($post->ID); ?></p>
                    
                </div>
                <div class="card-footer">
                    <a href="<?php echo get_permalink($post->ID) ?>">Ver más</a>
                </div>
            </div>
    <?php endforeach; ?>
    </div>  
    </div>
    </div>
  <?php

  return ob_get_clean();
}

add_shortcode( 'ecosesa_blog', 'ecosesa_blog_sc' );
