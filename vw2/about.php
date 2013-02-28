<?php
/* 
Template Name: About
*/
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/doctype-blog', 'parts/header-else', 'parts/nav' ) ); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<article class="blog-post">

  <h1><?php the_title(); ?></h1>
  <?php the_content(); ?>     

  <?php if ( get_the_author_meta( 'description' ) ) : ?>
  <?php echo get_avatar( get_the_author_meta( 'user_email' ) ); ?>
  <h3>About <?php echo get_the_author() ; ?></h3>
  <?php the_author_meta( 'description' ); ?>
  <?php endif; ?>

  <!-- ?php comments_template( '', true ); ? -->

</article>

<?php endwhile; ?>
  
<?php include("parts/footer-blogpost.php"); ?>