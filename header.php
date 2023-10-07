<?php class Menu_Walker extends Walker_Nav_Menu {
    	function start_el(&$output, $item, $depth=0, $args=[], $id=0) {
    		$output .= "<li class='flex flex-row md:flex-col sm:flex-col relative top_nav_li " .  implode(" ", $item->classes) . "'>";
     
    		if ($item->url && $item->url != '#') {
    			$output .= '<a class="top_nav_link" href="' . $item->url . '">';
    		} else {
    			$output .= '<span>';
    		}
     
    		$output .= $item->title;
     
    		if ($item->url && $item->url != '#') {
    			$output .= '</a>';
    		} else {
    			$output .= '</span>';
    		}
    	}
    }?>



<header class="w-screen flex lg:flex-col md:flex-row sm:flex-row items-center justify-center z-10">
    <div class="drop-shadow-lg lg:m-5 lg:p-5 md:m-1 md:p-1 flex lg:flex-row md:flex-col sm:flex-col justify-center md:justify-center items-center rounded w-11/12 h-20 bg-white">
		<img class="h-full" src="<?php bloginfo('template_url'); ?>/images/logo.svg"/>
        <?php wp_nav_menu(array("theme_location"=>"header-menu","depth"=>0, "container_id"=>"dropdown_menu", "items_wrap"=>'%3$s', "walker"=>new Menu_Walker()));?>
        <?php get_search_form()?>
    </div>
</header>