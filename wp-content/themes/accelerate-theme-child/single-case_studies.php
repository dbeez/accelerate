<?php
get_header(); ?>

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
    <?php while ( have_posts() ) : the_post(); 

    $services = get_field('services');
    $client = get_field('client');
    $link = get_field('site_link');
    $image_1 = get_field('image_1');
    $image_2 = get_field('image_2');
    $image_3 = get_field('image_3'); ?>

    <article class="case-study">
      <aside class="case-study-sidebar">
         <h2><?php the_title(); ?></h2>
         <h4><?php echo $services; ?></h4>
         <h4>Client: <?php echo $client; ?></h4>
          This is a project i made for this company. Here is the early stage startup that i helped design and do front-end and back-end dev for.

         <?php the_content(); ?>
         <p><a href="<?php echo $link; ?>">Visit Live Site›</a></p>

      </aside>

      <div class="case-study-images">
      	 <img src="<?php echo $image_1; ?>" />
      	 <img src="<?php echo $image_2; ?>" />
      	 <img src="<?php echo $image_3; ?>" /> 
      </div>

	</article>
	<?php endwhile; // end of the loop. ?>
	</div><!-- .main-content -->

	</div><!-- #primary -->

<?php get_footer(); ?>
