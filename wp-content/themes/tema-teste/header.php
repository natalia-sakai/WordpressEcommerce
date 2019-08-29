<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
 <head>
    <title><?php bloginfo('name'); ?></title>
   <meta charset="<?php bloginfo( 'charset' ); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>?<?php echo rand(1,999);?>">
   <!-- CSS do Bootstrap obrigatório -->
   <link href="css/bootstrap.min.css" rel="stylesheet">
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
   <?php wp_head(); ?>
 </head>
 <body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
   <!--Nome do site-->
   <div class="logo">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand"><h1 class="nome"><?php bloginfo('name'); ?></h1></a>
   </div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent"> 
    <ul class="navbar-nav mr-auto">
      <li class="nav-link" ><a class="cabecalho" href="https://codewisebr.com/natalia/">Inicio</a></li>
      <li class="nav-link" ><a class="cabecalho" href="https://codewisebr.com/natalia/loja/">Loja</a></li>
      <li class="nav-link" ><a class="cabecalho" href="https://codewisebr.com/natalia/carrinho-2/">Carrinho</a></li>
      <li class="nav-link" ><a class="cabecalho" href="https://codewisebr.com/natalia/minha-conta/">Minha conta</a></li>
    </ul>
    <form class="form-inline my-2 my-lg-0" id="searchform2" method="get" action="<?php echo home_url('/'); ?>">
    <input class="form-control mr-sm-2"type="text" name="s" placeholder="Pesquisar">
    <input type="image" src="https://codewisebr.com/natalia/wp-content/uploads/2019/08/find.png" width="30" id="lupa" onclick="form.submit();">
  </form>
  </div>
  <!--Carrinho de compras-->
  <div class="carrinho">
    <a href="https://codewisebr.com/natalia/carrinho-2/"><img src="https://codewisebr.com/natalia/wp-content/uploads/2019/08/shopping-cart.png" width="50" class="carrinho"></a>
  </div>
  <form class="form-inline my-2 my-lg-0" id="searchform" method="get" action="<?php echo home_url('/'); ?>">
    <input class="form-control mr-sm-2"type="text" name="s" placeholder="Pesquisar">
    <input type="image" src="https://codewisebr.com/natalia/wp-content/uploads/2019/08/find.png" width="30" id="lupa" onclick="form.submit();">
  </form>
</nav>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>