<?php if(have_posts()): while(have_posts()): the_post();?>

    <div class="wysiwyg">
        <?php the_content();?>
    </div>

    <div class="single__tag-cat-wrapper">

        <?php $tags = get_the_tags(); if($tags): foreach($tags as $tag):?>
            <a href="<?php echo get_tag_link($tag->term_id); ?>" class="btn btn-secondary">
                <?php echo $tag->name;?>
            </a>
        <?php endforeach; endif;?>


        <?php $categories = get_the_category(); if($categories): foreach($categories as $cat):?>
            <a href="<?php echo get_category_link($cat->term_id);?>" class="btn btn-secondary">
                <?php echo $cat->name;?>
            </a>
        <?php endforeach; endif;?>

    </div>

<?php endwhile; endif;?>