<?php if(have_posts()): while(have_posts()): the_post();?>

    <div class="col-12 col-md-6 col-lg-4">

        <div class="archive__card js-animate-archive-card">
            <?php if(has_post_thumbnail()):?> 
                <a class="archive__card-img-link" href="<?php the_permalink();?>">
                    <img src="<?php the_post_thumbnail_url('archive-card');?>" alt="<?php     the_title();?>"class="archive__card-img img-fluid">
                </a>
            <?php endif;?>

            <div class="archive__card-content">

                <a class="archive__card-heading-link" href="<?php the_permalink();?>">
                    <h3 class="archive__card-heading"><?php the_title();?></h1>
                </a>

                <?php the_excerpt();?>

                <a class="archive__card-text-link" href="<?php the_permalink();?>">Read more...</a>

            </div>
        </div>
    </div>

<?php endwhile; else: endif;?>