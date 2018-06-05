<?php

function getMenuArr($locationName) {
  $loc = get_nav_menu_locations();
  if(is_array($loc)){
    if(isset($loc[$locationName]) ){
      $menuId = $loc[$locationName];
      return wp_get_nav_menu_items($menuId);
    } else {
      return json_encode(array());
    }
  }
  
}
