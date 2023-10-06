<?php class Menu_Walker extends Walker_Nav_Menu {
    	function start_el(&$output, $item, $depth=0, $args=[], $id=0) {
    		$output .= "<li class='relative z-10 top_nav_li " .  implode(" ", $item->classes) . "'>";
     
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



<header class="w-screen flex flex-col items-center justify-center relative z-10">
    <div class="drop-shadow-lg lg:m-5 lg:p-5 sm:m-1 sm:p-1 flex flex-row justify-center items-center rounded-3xl w-11/12 h-20 bg-white">
        <?php wp_nav_menu(array("theme_location"=>"header-menu","depth"=>3, "container_id"=>"dropdown_menu", "items_wrap"=>'%3$s', "walker"=>new Menu_Walker()));?>
        <?php get_search_form()?>
    </div>
</header>