<?php
// custom menu example @ https://digwp.com/2011/11/html-formatting-custom-menus/
function clean_custom_menus() {
    $menu_name = 'main-menu'; // specify custom menu slug
    if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
        $menu = wp_get_nav_menu_object($locations[$menu_name]);
        $menu_items = wp_get_nav_menu_items($menu->term_id);
        foreach ((array) $menu_items as $key => $menu_item) {
            $title = $menu_item->title;
            $url = $menu_item->url;
            $menu_list .='<a href="'. $url .'">'. $title .'</a>';
        }
    } else {
        // $menu_list = '<!-- no list defined -->';
    }
    echo $menu_list;
}
?>

<?php if (function_exists(clean_custom_menus())) clean_custom_menus(); ?>
