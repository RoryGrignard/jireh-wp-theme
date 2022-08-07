<?php if(has_post_thumbnail()):?>
    <div class="hero --default" style="background-image: url(<?php the_post_thumbnail_url  ('component-hero');?>)">
        
        <div class="hero__container container">
            <div class="js-animate-hero-content">
                <h1 class="hero__heading"><?php the_title();?></h1>
            </div>
        </div>
        
    </div>
<?php endif;?>