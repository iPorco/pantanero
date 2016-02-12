<?php
/**
 * Template Name: Acomodações
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
    
 




    <!-- Section:  ACOMODAÇÕES -->
    <section id="acomodacoes" class="home-section text-center">
        
        <div class="heading-about">
            <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    <div class="wow bounceInDown" data-wow-delay="0.4s">
                    <div class="section-heading">
                    <h2></h2>
                    <article class="tres-colunas-wrapper">
           
            <section class="texto">
            <?php 
        if ( have_posts() ) :

            while ( have_posts() ) : the_post(); 
                get_template_part( 'content', 'interna' );
            endwhile; 

        else : 
            endif;
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
    <!-- /Section: ACOMODAçÔES -->



 
<?
    get_footer();
?>







    


 

    

    



    <?php
    get_footer();
    ?>