<!DOCTYPE html>
<html <?php language_attributes(); ?>
 <head>
    <title><?php bloginfo('name'); ?></title>
   <meta charset="<?php bloginfo( 'charset' ); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>?<?php echo rand(1,999);?>">
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
    <div class="busca">
      <form id="searchform" method="get" action="<?php echo home_url('/'); ?>">
        <input type="text" name="s" placeholder="Digite aqui o que deseja buscar" class="busca" >
      <input type="image" src="https://codewisebr.com/natalia/wp-content/uploads/2019/08/find.png" width="30" id="lupa" onclick="form.submit();">
      </form>
    </div>
    <!--Carrinho de compras-->
    <div class="carrinho">
      <a href="https://codewisebr.com/natalia/carrinho-2/"><img src="https://codewisebr.com/natalia/wp-content/uploads/2019/08/shopping-cart.png" width="50" class="carrinho"></a>
      <a href="https://codewisebr.com/natalia/carrinho-2/"><p class="pequeno">Carrinho de compras</p></a>
      
    </div>
    <!--menu-->
    <div class="div_menu">
    <nav class="menu">
      <ul class="cabecalho" >
        <li class="cabecalho" ><a class="cabecalho" href="https://codewisebr.com/natalia/">Inicio</a></li>
        <li class="cabecalho" ><a class="cabecalho" href="https://codewisebr.com/natalia/loja/">Loja</a></li>
        <li class="cabecalho" ><a class="cabecalho" href="https://codewisebr.com/natalia/carrinho-2/">Carrinho</a></li>
        <li class="cabecalho" ><a class="cabecalho" href="https://codewisebr.com/natalia/minha-conta/">Minha conta</a></li>
      </ul>
    </nav>
    </div>
    
  </div>
