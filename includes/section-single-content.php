<?php if(have_posts()): while(have_posts()): the_post();?>

    <div class="wysiwyg">
        <?php the_content();?>
    </div>

    <?php $firstName = get_the_author_meta('first_name'); $lastName = get_the_author_meta('last_name');?>
    <p class="single__author">By <?php echo $firstName;?> <?php echo $lastName;?>, <?php echo get_the_date();?>.</p>

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

    <?php wp_link_pages();?>

    <div class="single__comments">

        <?php comments_template();?>

    </div>

<?php endwhile; endif;?>