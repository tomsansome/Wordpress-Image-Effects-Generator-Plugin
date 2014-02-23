<?php /* Template Name: Homepage */ ?>

<?php get_header(); ?>

  <div id="home">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <section>

      <?php if(get_field('images')): ?>
        <?php while(the_repeater_field('images')): ?>
          <?php $image = wp_get_attachment_image_src(get_sub_field('image'), 'image-effects-1000-bw'); ?>
            <img src="<?php echo $image[0]; ?>" alt="<?php the_sub_field('link_title');?>"/>
          <?php endwhile; ?>
      <?php endif; ?>

    </section>

    <?php endwhile; endif; ?>

  </div>

<?php get_footer(); ?>