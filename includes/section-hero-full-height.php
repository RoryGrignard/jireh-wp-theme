<div class="hero --full-height"<?php if(has_post_thumbnail()):?> style="background-image: url(<?php the_post_thumbnail_url('component-hero-full-height');?>)"<?php endif;?>>

<div class="hero__container container">
    <div class="js-animate-hero-content">
    <h1 class="hero__heading">Welcome to <span class="hero__heading-text"><?php bloginfo('name');?></span></h1>
    <p class="hero__description"><?php bloginfo('description');?></p>
    </div>
</div>

</div>