<?php get_header();?>

<main class="page --front">
    
    <?php get_template_part('includes/section', 'hero-full-height');?>

    <div class="page__content container">

        <?php get_template_part('includes/section', 'content');?>

    </div>

    <div class="container">
        
        <div class="row">
            <div class="page__search-wrapper col-12 col-md-6 col-lg-4">
                
                <?php get_search_form();?>

            </div>
        </div>

    </div>
</main>

<?php get_footer();?>
