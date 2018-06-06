<?php get_header() ?>

  <?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
      <div class="main main-blog">

        <div class="header header-flex">
            <div class="header-title container">
                <h1><?php the_category(", ") ?></h1>
            </div>
        </div>
        <div class="content container single-content">
          
          <div class="w-75 m-auto">
            <div class="w-100"><span class="date"><?php the_date(); ?></span></div>
            <div class="w-75"><h2 class="title"><?php the_title(); ?></h2></div>
              <?php the_content() ?>
          </div>
         
        </div>
      </div>
		<?php  endwhile; ?>
  <?php else : ?>
    <h1>404</h1>
  <?php endif; ?>
</div>

<?php get_footer() ?>
