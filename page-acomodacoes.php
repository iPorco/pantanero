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


<main class="contato">
    <div class="container">
    <?php 
        if ( have_posts() ) :

            while ( have_posts() ) : the_post(); 
                get_template_part( 'content', 'interna' );
            endwhile; 

        else : 
            endif;
    ?>
    </div>
</main>
<?
    get_footer();
?>