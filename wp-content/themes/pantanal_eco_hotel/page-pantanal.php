<?php
/**
 * Template Name: Pagina Pantanal
 *
 * Description: Twenty Twelve loves the no-sidebar look as much as
 * you do. Use this page template to remove the sidebar from any page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
 */

get_header();
?>    
<style type="text/css">
	.bx-wrapper .bx-pager {
     display: none;
}

.bx-wrapper {margin: 0 auto;}
</style>

 

 
 

		<!-- Section: o pantanal -->
    <section id="opantanal" class="home-section text-center  bg-gray">
		<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-10 col-lg-offset-1">
					<div class="wow bounceInDown" data-wow-delay="0.8s">
					<div class="section-heading">

					


					 
		 
		<article class="tres-colunas-wrapper">
            <h1><?echo get_the_title(478)?></h1>
            <section class="texto">
            <?
                $post_12 = get_post(478); 
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
		<div class="container">

		<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
		</div>
        <div class="row">
             
			<div class="col-xs-6 col-sm-3 col-md-3">
				<div class="wow bounceInUp" data-wow-delay="0.5s">
                <div class="team boxed">
                    <div class="inner">
						 <img src="<?php echo get_template_directory_uri(); ?>/img/home/4.jpg" alt="" class="img-responsive img-circle" />

                    </div>
                </div>
				</div>
            </div>
            	<div class="col-xs-6 col-sm-3 col-md-3">
				<div class="wow bounceInUp" data-wow-delay="0.5s">
                <div class="team boxed">
                    <div class="inner">
						 <img src="<?php echo get_template_directory_uri(); ?>/img/home/2.jpg" alt="" class="img-responsive img-circle" />

                    </div>
                </div>
				</div>
            </div>
            	<div class="col-xs-6 col-sm-3 col-md-3">
				<div class="wow bounceInUp" data-wow-delay="0.5s">
                <div class="team boxed">
                    <div class="inner">
						 <img src="<?php echo get_template_directory_uri(); ?>/img/home/3.jpg" alt="" class="img-responsive img-circle" />

                    </div>
                </div>
				</div>
            </div>
            	<div class="col-xs-6 col-sm-3 col-md-3">
				<div class="wow bounceInUp" data-wow-delay="0.5s">
                <div class="team boxed">
                    <div class="inner">
						 <img src="<?php echo get_template_directory_uri(); ?>/img/home/1.jpg" alt=""  style="max-height: 175px;" class="img-responsive img-circle" />

                    </div>
                </div>
				</div>
            </div>
 		
 
        </div>		
		</div>
	</section>
	<br />
 		<br />
	<!-- /Section: o pantanal -->

	

	



	<?php
	get_footer();
	?>