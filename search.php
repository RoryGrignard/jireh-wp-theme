<?php get_header();?>

<main class="search-results">
    <div class="container">
        <div class="row">

            <?php get_template_part('includes/section', 'search-results');?>

        </div>
        <div class="row">
            <div class="col-12">
                
                <?php get_template_part('includes/section', 'pagination');?>

            </div>
        </div>
    </div>
</main>

<?php get_footer();?>
