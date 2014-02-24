<?php

  ini_set('display_errors',1);
  ini_set('display_startup_errors',1);
  error_reporting(-1);

  $effect_array = array('black_and_white', 'negative');
  $filter_array = array('IMG_FILTER_GRAYSCALE', 'IMG_FILTER_NEGATE');
  $eachEffect = max(count($effect_array), count($filter_array));

  for($i=0; $i<$eachEffect; $i++){

    $effect = isset($effect_array[$i]) ? $effect_array[$i] : '';
    $filter = isset($filter_array[$i]) ? $filter_array[$i] : '';

    $my_options = get_option($effect);
    if ( $my_options === 'yes_please' ) {
      
      add_image_size( $effect.'-1000', 1000, 1000, false );
      add_image_size( $effect.'-800', 800, 800, false );
      add_image_size( $effect.'-400', 400, 400, false );

    }

  }

?>