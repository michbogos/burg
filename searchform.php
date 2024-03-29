<form role="search" method="get" id="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="input-group relative -z-10">
  <div class="input-group flex flex-row justify-center align-baseline gap-2">
    <input type="search" class="form-control w-full h-10 rounded border-blue-200 border-2" placeholder="Search" aria-label="search nico" name="s" id="search-input" value="<?php echo esc_attr( get_search_query() ); ?>">
    <button class="m-0 p-0 blue-200"><img class="text-blue-200 w-8 h-8" src="<?php bloginfo('template_url'); ?>/images/magnifying-glass-solid.svg"/></button>
  </div>
</form>