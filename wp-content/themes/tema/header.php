<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <title><?php bloginfo('name'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <?php wp_head(); ?>
</head>
<body>
  <div id="cabecalho">
    <!--Nome do site-->
    <div class="logo">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><h1 class="nome"><?php bloginfo('name'); ?></h1></a>
      <h3 class="nome"><?php bloginfo('description')?></h3>
    </div>
    <!--Busca para produtos-->
    <div id="busca">
      <form id="searchform" method="get" action="<?php echo home_url('/'); ?>">
        <input type="text" name="s" placeholder="Digite aqui o que deseja buscar" class="busca" >
      <input type="image" src="https://codewisebr.com/natalia/wp-content/uploads/2019/08/lupa-1.jpg" id="lupa" onclick="form.submit();">
      </form>
    </div>

    <!--Carrinho de compras-->
    <div id="carrinho">
      <img src="https://codewisebr.com/natalia/wp-content/uploads/2019/08/carrinho-1.png" width="35" class="carrinho">
      <p class="pequeno">Carrinho de compras</p>
    </div>
  </div>
  <div id="menu">
    <a class="cabecalho" href="https://codewisebr.com/natalia/">Inicio</a>
    <a class="cabecalho" href="https://codewisebr.com/natalia//loja/">Loja</a>
    <a class="cabecalho" href="https://codewisebr.com/natalia/carrinho/">Carrinho</a>
    <a class="cabecalho" href="https://codewisebr.com/natalia/minha-conta/">Minha conta</a>
  </div>
 