<?php

  $my_options = get_option('negate');

  if ( $my_options === yes_please ) {

    // 1000px - black & white - add size
    function image_effects_1000_negate() {
      add_image_size('image-effects-1000-bw', 1000, 1000, false);
    }
    add_action('after_setup_theme', 'image_effects_1000_negate');
 
    // 1000px - black & white - show size in Media Upload
    function image_effects_show_sizes($sizes) {
      $sizes['image-effects-1000-bw'] = __( '1000 Black White', 'test' );
      return $sizes;
    }
    add_filter('image_size_names_choose', 'image_effects_show_sizes');

    // 1000px - black & white - black and white filter
    function image_effects_1000_bw_effect($meta) {
      $file = wp_upload_dir();
      $file = trailingslashit($file['path']).$meta['sizes']['image-effects-1000-bw']['file'];
      list($orig_w, $orig_h, $orig_type) = @getimagesize($file);
      $image = wp_load_image($file);
      imagefilter($image, IMG_FILTER_GRAYSCALE);
      switch ($orig_type) {
        case IMAGETYPE_GIF:
          imagegif( $image, $file );
          break;
        case IMAGETYPE_PNG:
          imagepng( $image, $file );
          break;
        case IMAGETYPE_JPEG:
          imagejpeg( $image, $file );
          break;
      }
      return $meta;
    }
    add_filter('wp_generate_attachment_metadata', 'image_effects_1000_bw_effect');
  }

?>