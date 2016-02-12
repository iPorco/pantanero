<?php
/**
 * Template Name: Galeria
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

 


	    <!-- Section: O HOTEL -->
    <section id="galeria" class="home-section text-center">
        
        
                 
                  
                    
                     
           
             
            <?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		// End the loop.
		endwhile;
		?>

             

                    
                    
               
           

    </section>




<?
    get_footer();
?>