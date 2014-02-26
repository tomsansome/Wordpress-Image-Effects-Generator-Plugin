<?php /* Template Name: Homepage */ ?>

<?php get_header(); ?>

  <a class="download" href="http://wordpress.org/plugins/image-effects-generator/">
    <img src="<?php echo get_template_directory_uri(); ?>/_/img/wp-logo.png">
    <br>
    <small>Download</small>
  </a>

  <section id="section" class="install">
    <h2>Installation</h2>
    <ul>
      <li>Upload the directory <strong>image-effect-generator</strong> to your <strong>/wp-content/plugins/</strong> directory, or use the Wordpress <strong>Install Plugin</strong> button and upload the zip.</li>
      <li>Activate the plugin through the <strong>Plugins</strong> menu in WordPress</li>
    </ul>
  </section>

  <section id="section" class="usage">

    <h2>Usage</h2>

      <p>These new effects and sizes become available inside the <strong>Add Media</strong> area for posts and pages:</p>

      <img class="add-media-img" src="<?php echo get_template_directory_uri(); ?>/_/img/add-media.jpg">

    <h2>Usage in template</h2>

      <ul>
        <li>All examples are using <a href="http://www.advancedcustomfields.com/" target="_blank">Advanced Custom Fields</a> to grab the image object</li>
        <li>All effects generated at 1000x1000, 800x800 and 400x400 (no crop) by default</li>
      </ul>

    <div class="output">

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div class="effect">
          <h2 class="effect-title">- Black and White</h2>
<pre>
&lt;?php $image = wp_get_attachment_image_src(get_field('image'), 'image-effects-1000-bw'); ?&gt;
&lt;img src="&lt;?php echo $image[0]; ?&gt;"&gt;
</pre>
          <ul class="effect-bw">
            <?php $image = wp_get_attachment_image_src(get_field('image'), 'image-effects-1000-bw'); ?>
            <li><img src="<?php echo $image[0]; ?>"/></li>
            <?php $image = wp_get_attachment_image_src(get_field('image'), 'image-effects-800-bw'); ?>
            <li><img src="<?php echo $image[0]; ?>"/></li>
            <?php $image = wp_get_attachment_image_src(get_field('image'), 'image-effects-400-bw'); ?>
            <li><img src="<?php echo $image[0]; ?>"/></li>
          </ul>
        </div>

        
        <div class="effect">
          <h2 class="effect-title">- Blurred</h2>
<pre>
&lt;?php $image = wp_get_attachment_image_src(get_field('image'), 'image-effects-1000-blurred'); ?&gt;
&lt;img src="&lt;?php echo $image[0]; ?&gt;"&gt;
</pre>
          <ul class="effect-blurred">
            <?php $image = wp_get_attachment_image_src(get_field('image'), 'image-effects-1000-blurred'); ?>
            <li><img src="<?php echo $image[0]; ?>"/></li>
            <?php $image = wp_get_attachment_image_src(get_field('image'), 'image-effects-800-blurred'); ?>
            <li><img src="<?php echo $image[0]; ?>"/></li>
            <?php $image = wp_get_attachment_image_src(get_field('image'), 'image-effects-400-blurred'); ?>
            <li><img src="<?php echo $image[0]; ?>"/></li>
          </ul>
        </div>

        
        <div class="effect">
          <h2 class="effect-title">- Sharpened</h2>
<pre>
&lt;?php $image = wp_get_attachment_image_src(get_field('image'), 'image-effects-1000-sharpened'); ?&gt;
&lt;img src="&lt;?php echo $image[0]; ?&gt;"&gt;
</pre>
          <ul class="effect-sharpened">
            <?php $image = wp_get_attachment_image_src(get_field('image'), 'image-effects-1000-sharpened'); ?>
            <li><img src="<?php echo $image[0]; ?>"/></li>
            <?php $image = wp_get_attachment_image_src(get_field('image'), 'image-effects-800-sharpened'); ?>
            <li><img src="<?php echo $image[0]; ?>"/></li>
            <?php $image = wp_get_attachment_image_src(get_field('image'), 'image-effects-400-sharpened'); ?>
            <li><img src="<?php echo $image[0]; ?>"/></li>
          </ul>
        </div>

        
        <div class="effect">
          <h2 class="effect-title">- Sepia</h2>
<pre>
&lt;?php $image = wp_get_attachment_image_src(get_field('image'), 'image-effects-1000-sepia'); ?&gt;
&lt;img src="&lt;?php echo $image[0]; ?&gt;"&gt;
</pre>
          <ul class="effect-sepia">
            <?php $image = wp_get_attachment_image_src(get_field('image'), 'image-effects-1000-sepia'); ?>
            <li><img src="<?php echo $image[0]; ?>"/></li>
            <?php $image = wp_get_attachment_image_src(get_field('image'), 'image-effects-800-sepia'); ?>
            <li><img src="<?php echo $image[0]; ?>"/></li>
            <?php $image = wp_get_attachment_image_src(get_field('image'), 'image-effects-400-sepia'); ?>
            <li><img src="<?php echo $image[0]; ?>"/></li>
          </ul>
        </div>

        
        <div class="effect">
          <h2 class="effect-title">- Pixelate</h2>
          <p class="effect-info">Default: 13px squares</p>
<pre>
&lt;?php $image = wp_get_attachment_image_src(get_field('image'), 'image-effects-1000-pixelate'); ?&gt;
&lt;img src="&lt;?php echo $image[0]; ?&gt;"&gt;
</pre>
          
          <ul class="effect-pixelate">
            <?php $image = wp_get_attachment_image_src(get_field('image'), 'image-effects-1000-pixelate'); ?>
            <li><img src="<?php echo $image[0]; ?>"/></li>
            <?php $image = wp_get_attachment_image_src(get_field('image'), 'image-effects-800-pixelate'); ?>
            <li><img src="<?php echo $image[0]; ?>"/></li>
            <?php $image = wp_get_attachment_image_src(get_field('image'), 'image-effects-400-pixelate'); ?>
            <li><img src="<?php echo $image[0]; ?>"/></li>
          </ul>
        </div>

        
        <div class="effect">
          <h2 class="effect-title">- Negative</h2>
<pre>
&lt;?php $image = wp_get_attachment_image_src(get_field('image'), 'image-effects-1000-negative'); ?&gt;
&lt;img src="&lt;?php echo $image[0]; ?&gt;"&gt;
</pre>
          <ul class="effect-negative">
            <?php $image = wp_get_attachment_image_src(get_field('image'), 'image-effects-1000-negative'); ?>
            <li><img src="<?php echo $image[0]; ?>"/></li>
            <?php $image = wp_get_attachment_image_src(get_field('image'), 'image-effects-800-negative'); ?>
            <li><img src="<?php echo $image[0]; ?>"/></li>
            <?php $image = wp_get_attachment_image_src(get_field('image'), 'image-effects-400-negative'); ?>
            <li><img src="<?php echo $image[0]; ?>"/></li>
          </ul>
        </div>

      <?php endwhile; endif; ?>

    </div>

  </section>

  <section id="section" class="settings">
      <h2>Options</h2>
      <p>All of these image effects are optional:</p>
      <img src="<?php echo get_template_directory_uri(); ?>/_/img/settings-page.jpg">
  </section>

  <section id="section" class="">

  </section>

<?php get_footer(); ?>