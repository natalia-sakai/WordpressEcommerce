<?php get_header(); ?>
<main class="wrap">
<div id="principal">
<section id = "conteudo">
<?php
$s=get_search_query();
$args = array('s' =>$s);
    // The Query
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) {
    while ( $the_query->have_posts() ) {
        ?>
        <header>
            <h1>O Resultado para <?php the_title(); ?> obteve o(s) seguinte(s) resultado(s):</h1>
        </header>
        <?php
        the_post_thumbnail('thumbnail');
        $the_query->the_post();
        the_content();
    }
}else{
?>
    <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
<?php } ?>
</section> <!-- conteudo -->
<?php get_sidebar(); ?>
</div> <!-- principal -->
</main>
<?php get_footer(); ?>