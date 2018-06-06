<?php
/* 
Template Name: Archives
*/
get_header(); ?>


<div class="main main-blog">

    <div class="header header-flex ">
        <div class="header-title container">
            <h1><?php single_cat_title(); ?></h1>
        </div>
    </div>


    <div class="content container">
         
        <?php while ( have_posts() ) : the_post(); ?>

            <div class="col-12 col-sm-6 col-md-4 col-lg-4 d-flex">
                <div class="card post-card">
                    <img class="card-img-top img-fluid" src="<?php the_post_thumbnail_url() ?>" alt="<?php the_title() ?>">
                    <div class="card-body">
                        <h5 class="date"><?php the_date('d/m/Y') ?></h5>
                        <p class="card-text"><?php the_title(); ?></p>
                        
                    </div>
                    <div class="card-footer">
                        <a href="<?php echo get_permalink() ?>">Ver más</a>
                    </div>
                </div>
            </div>

        <?php endwhile; // end of the loop. ?>
        
        <div class="w-100 pagination-container">
             <?php
                if ( function_exists('wp_bootstrap_pagination') ){
                    wp_bootstrap_pagination();
                }
                    
            ?>
        </div>

    </div>

</div>

<?php 
    get_footer();
?>
