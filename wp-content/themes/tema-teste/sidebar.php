<section class="sidebar">
<div class="sidebar_div">
    <h2 class="sidebar">Categorias:</h2>
<?php
    $args = array( 'taxonomy' => 'product_cat',);
    $categoria = get_categories($args);
    reset($categoria);
    foreach($categoria as $product_cat) //vai percorrer o array inteiro
    {
        $nome = $product_cat -> name;
        $slug = $product_cat -> slug;
        $link = get_category_link($product_cat->term_id);
        $id = $product_cat -> term_id;
        $count = $product_cat -> count;
        ?>
            <h4><a href="<?php echo esc_url('http://localhost/wordpress/categoria-produto/'.$slug); ?>" class="par"> <?php echo $nome; ?> (<?php echo esc_attr($count);?>) </a></h4>
        <?php
    }
?>
</div>
</section>