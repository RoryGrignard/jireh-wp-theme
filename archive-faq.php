<?php get_header();?>

<main class="archive">
    <div class="container">
        <div class="row">
            <div class="archive__header-wrapper col-12 col-md-6 col-lg-8">

                <h1 class="archive__header">FAQs</h1>

            </div>
            <div class="archive__search-wrapper col-12 col-md-6 col-lg-4">

                <?php get_search_form();?>

            </div>
        </div>
        <div class="archive__card-wrapper row">
            
            <?php get_template_part('includes/section', 'archive');?>

        </div>
        <div class="row">
            <div class="col-12">

                <?php get_template_part('includes/section', 'pagination');?>

            </div>
        </div>
    </div>
</main>

<?php get_footer();?>
