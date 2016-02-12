<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Pantanero Pousada</title>
 

 


    <!-- Bootstrap Core CSS -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	   <!-- Fonts -->
    <link href="<?php echo get_template_directory_uri(); ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo get_template_directory_uri(); ?>/css/animate.css" rel="stylesheet" />
    <!-- Squad theme CSS -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet">
  
	<link href="<?php echo get_template_directory_uri(); ?>/color/default.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/lightbox/css/lightbox.css" rel="stylesheet">

     <script src="<?php echo home_url();?>/wp-content/themes/pantanal_eco_hotel/js/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/lightbox/js/lightbox.js"></script>
<script>
    lightbox.option({
      'resizeDuration': 200,
      'maxWidth':600,
      'wrapAround': true
    })
</script>
</head>


<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
<header>
	<!-- Preloader -->
	<div id="preloader">
	  <div id="load"></div>
	</div>

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
 <div class="navconttop">
        <div class="">
            <div class="navbar-header page-scroll  ">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="<?php echo home_url();?>"><div id="bannerNovo"></div></a>
            </div>

            <div id="posiciona_nav"></div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse  ">
                  <ul class="nav navbar-nav">
                  <?php $postid = get_the_ID(); ?> 
                 
                    <li  class="<?php if($postid == 4) echo 'active'; ?>" ><a href="<?php echo home_url();?>">O Hotel</a></li>
                    <li  class="<?php if($postid == 478) echo 'active'; ?>"  ><a href="<?php echo home_url();?>/o-pantanal">O Pantanal</a></li>
                    <li  class="dropdown  <?php if($postid == 631 || $postid == 486 || $postid == 485) echo 'active'; ?>" >
                      <a href="<?php echo home_url();?>/acomodacoes" class="dropdown-toggle" data-toggle="dropdown">Acomodações <b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li><a href="<?php echo home_url();?>/single-duplo/">Quarto Single ou Duplo</a></li>
                        <li><a href="<?php echo home_url();?>/quarto-triplo/">Quarto Triplo</a></li>
                        <li><a href="<?php echo home_url();?>/quarto-quadruplo/">Quarto Quadruplo</a></li>
                      </ul>
                    </li>
                    <li  <?php if($postid == 814) echo 'class="active"'; ?> ><a href="https://secure.pxsol.com/?pos=PousadaPantanero" target="_blank">Reservas</a></li>
            		<li  <?php if($postid == 20) echo 'class="active"'; ?> ><a href="<?php echo home_url();?>/galeria/">Galeria</a></li>
             
            		<li  <?php if($postid == 66) echo 'class="active"'; ?> ><a href="<?php echo home_url();?>/contato/">Contato</a></li>
                    
                  </ul>
            </div>
            </div>
            <!-- /.navbar-collapse -->
            
             <div id="widgetpxsol" 
data-fromurl="http://pantanero.com.br/" 
data-returnurl="https://secure.pxsol.com/lp.html" 
data-currency="BRL" 
></div>
            
            
  </div>
  
  
 
  
  
    </nav>




    </header>

    <section class="home-section text-center  <?php if($postid == 4 ) echo 'homepagesection'; ?>">
        
<div class="heading-about">
            <div class="container">
            
            <div id="slider">
                 
            </div>

            </div>
    

</div>
 
 </section>



