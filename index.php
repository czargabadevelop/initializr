
    
   
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