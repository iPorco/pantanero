<?php
/**
 * Template Name: Pagina Inicial
 *
 * Description: Twenty Twelve loves the no-sidebar look as much as
 * you do. Use this page template to remove the sidebar from any page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
 */
$homepage =  "yes";
get_header();
?>    
<style type="text/css">
	.bx-wrapper .bx-pager {
     display: none;
}

.bx-wrapper {margin: 0 auto;}
</style>

 <section class="home-section text-center" id="sectionBanner">
 		
<div class="heading-about">
	<div class="container">
		<div id="meuslider">
			<!--<img src="<?php echo get_template_directory_uri(); ?>/img/bg2.jpg" alt="" class="img-responsive" /> -->

<?php if( function_exists('cyclone_slider') ) cyclone_slider('banner-home'); ?>

 
<?php //if( function_exists('bxslider') ) bxslider('slide_principal'); ?>

		</div>
	</div>	 	

</div>
 
 </section>

<?php// if( function_exists('bxslider') ) bxslider('713'); ?>



	

	<!-- Section: O HOTEL -->
    <section id="ohotel" class="home-section text-center">
		
		<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-10 col-lg-offset-1">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2></h2>
					<article class="tres-colunas-wrapper">
            <h1><?echo get_the_title(68)?></h1>
            <section class="texto">
            <?
                $post_12 = get_post(68); 
                $trim_me = $post_12->post_content;
                echo $trim_me;
            ?>
            </section>
        </article>

					</div>
					</div>
				</div>
			</div>
			</div>
		</div>

	</section>
	<!-- /Section: O HOTEL -->

 

	

	



	<?php
	get_footer();
	?>