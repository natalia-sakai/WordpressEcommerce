<?php get_header(); ?>
<main class="wrap">
<div id="principal">
<header>
<h2 class="header"><?php the_title(); ?></h2>
</header>
<section id = "conteudo">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>   
       <?php the_content(); ?>
<?php endwhile; else : ?>
        <p>Sorry, no post was found!</p>
<?php endif; ?>
</section> <!-- conteudo -->
<?php get_sidebar(); ?>
</div> <!-- principal -->
</main>
<?php get_footer(); ?>