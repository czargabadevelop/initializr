
    
   
<?php get_header(); ?>
<?php include get_template_directory() . '/nav.php';?>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    

    <?php if ( is_active_sidebar( 'home-1' ) ) : #id on register sidebar functions must be here ?>
     <div class="jumbotron">
      <div class="container">

        <?php dynamic_sidebar( 'home-1' ); ?>
      </div>
    </div>
    <?php endif; ?>

<div class="section content">
      <div class="container">
              <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <!-- 
                https://codex.wordpress.org/Function_Reference/has_post_thumbnail
                for thumbnail images
                -->
              <div class="row">
              <article class="post">
              <div class="col-md-4">
                <?php 
                if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                the_post_thumbnail('full', array( 'class'  => 'img-responsive' ));// show featured image
                //in this case we used bootstrap image responsive class
                }
                ?>
                </div>
                
              <div class="col-md-8">
                <h1><?php the_title(); ?></h1>
                <h4>Posted on <?php the_time('F jS, Y') ?></h4>
                <p><?php the_excerpt(__('(more...)')); ?></p>
                <a href="<?php the_permalink(); ?>" class="btn btn-primary" title="<?php the_title_attribute(); ?>">READ MORE</a>
              </div>
              
              </article>
              </div>
              <hr>
              <?php endwhile; else: ?>
              <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
              <?php endif; ?>
              <?php posts_nav_link( ' &#183; ', 'previous page', 'next page' ); ?>
      <!--end container-->
      </div>

</div>



    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <?php if ( is_active_sidebar( 'section-1' ) ) : #id on register sidebar functions must be here ?>
        <div class="col-md-4">
        <?php dynamic_sidebar( 'section-1' ); ?>
        </div>
        <?php endif; ?>

        <?php if ( is_active_sidebar( 'section-2' ) ) : #id on register sidebar functions must be here ?>
        <div class="col-md-4">
        <?php dynamic_sidebar( 'section-1' ); ?>
        </div>
        <?php endif; ?>

        <?php if ( is_active_sidebar( 'section-3' ) ) : #id on register sidebar functions must be here ?>
        <div class="col-md-4">
        <?php dynamic_sidebar( 'section-1' ); ?>
        </div>
        <?php endif; ?>

        

      </div>

      <hr>
    </div>

<?php get_footer(); ?>