<?php /* Template Name: Homepage */ ?>

<?php get_header(); ?>

  <div id="home">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <section>

      <?php $image = wp_get_attachment_image_src(get_field('image'), 'image-effects-1000-sepia'); ?>
      <img src="<?php echo $image[0]; ?>"/>
      <?php $image = wp_get_attachment_image_src(get_field('image'), 'image-effects-800-sepia'); ?>
      <img src="<?php echo $image[0]; ?>"/>
      <?php $image = wp_get_attachment_image_src(get_field('image'), 'image-effects-400-sepia'); ?>
      <img src="<?php echo $image[0]; ?>"/>

      <?php $image = wp_get_attachment_image_src(get_field('image'), 'image-effects-1000-sharpened'); ?>
      <img src="<?php echo $image[0]; ?>"/>
      <?php $image = wp_get_attachment_image_src(get_field('image'), 'image-effects-800-sharpened'); ?>
      <img src="<?php echo $image[0]; ?>"/>
      <?php $image = wp_get_attachment_image_src(get_field('image'), 'image-effects-400-sharpened'); ?>
      <img src="<?php echo $image[0]; ?>"/>

      <?php $image = wp_get_attachment_image_src(get_field('image'), 'image-effects-1000-bw'); ?>
      <img src="<?php echo $image[0]; ?>"/>
      <?php $image = wp_get_attachment_image_src(get_field('image'), 'image-effects-800-bw'); ?>
      <img src="<?php echo $image[0]; ?>"/>
      <?php $image = wp_get_attachment_image_src(get_field('image'), 'image-effects-400-bw'); ?>
      <img src="<?php echo $image[0]; ?>"/>

      <?php $image = wp_get_attachment_image_src(get_field('image'), 'image-effects-1000-blurred'); ?>
      <img src="<?php echo $image[0]; ?>"/>
      <?php $image = wp_get_attachment_image_src(get_field('image'), 'image-effects-800-blurred'); ?>
      <img src="<?php echo $image[0]; ?>"/>
      <?php $image = wp_get_attachment_image_src(get_field('image'), 'image-effects-400-blurred'); ?>
      <img src="<?php echo $image[0]; ?>"/>

      <?php $image = wp_get_attachment_image_src(get_field('image'), 'image-effects-1000-negative'); ?>
      <img src="<?php echo $image[0]; ?>"/>
      <?php $image = wp_get_attachment_image_src(get_field('image'), 'image-effects-800-negative'); ?>
      <img src="<?php echo $image[0]; ?>"/>
      <?php $image = wp_get_attachment_image_src(get_field('image'), 'image-effects-400-negative'); ?>
      <img src="<?php echo $image[0]; ?>"/>




    </section>

    <?php endwhile; endif; ?>

  </div>

<?php get_footer(); ?>