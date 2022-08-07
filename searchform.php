
<form class="search-form" action="<?php echo esc_url(home_url( '/' ) );?>" method="get">
    <div class="search-form__input-group input-group">
       <input type="text" name="s" class="search-form__input form-control" placeholder="Search.." id="search" value="<?php the_search_query();?>" required>
       <button class="search-form__btn btn btn-primary" type="submit">Search!</button>
    </div>
</form>