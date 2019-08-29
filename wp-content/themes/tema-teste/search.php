<?php get_header(); ?>
<div id="principal">
<header>
    <?php
    $s=get_search_query();
    $args = array('s' =>$s);
        // The Query
    $the_query = new WP_Query( $args );
    ?>
    <h2 class="header_minus">O Resultado para <?php echo $s; ?> obteve o(s) seguinte(s) resultado(s):</h2>
</header>
<section id = "conteudo">
    <?php
    if ( $the_query->have_posts() ) 
    {
        while ( $the_query->have_posts() ) {
        $the_query->the_post();
        ?>
        <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
        <?php
        the_post_thumbnail('thumbnail');
        the_excerpt(); 
        }
    }else{
    ?>
    <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
    <?php } ?>
</section> <!-- conteudo -->
<?php get_sidebar(); ?>
</div> <!-- principal -->
<?php get_footer(); ?>