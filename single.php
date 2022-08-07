<?php get_header();?>

<main class="single">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8">

                <?php if(has_post_thumbnail()):?>
                    <div class="single__hero-img-wrapper">
                        <img src="<?php the_post_thumbnail_url('single-hero');?>" alt="<?php the_title();?>" class="single__hero-img img-fluid">
                    </div>
                <?php endif;?>
                    
                <h1 class="single__hero-title"><?php the_title();?></h1>

                <?php get_template_part('includes/section', 'single-content');?>

            </div>
            <div class="col-12 col-md-4">
                <div class="single__side-bar">

                    <?php if(is_active_sidebar('sidebar')):?>
                        <?php dynamic_sidebar('sidebar');?>
                    <?php endif;?>

                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer();?>
