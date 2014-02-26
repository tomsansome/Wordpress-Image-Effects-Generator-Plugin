<?php /* Template Name: Homepage */ ?>

<?php get_header(); ?>

  <a class="download" href="http://wordpress.org/plugins/image-effects-generator/" target="_blank">
    <img src="<?php echo get_template_directory_uri(); ?>/_/img/wp-logo.png">
    <br>
    <small>Download</small>
  </a>

  <section id="section" class="install">
    <h2>Installation</h2>
    <ul>
      <li>Upload the directory <strong>image-effect-generator</strong> to your <strong>/wp-content/plugins/</strong> directory, or use the Wordpress <strong>Install Plugin</strong> button and upload the zip.</li>
      <li>Activate the plugin through the <strong>Plugins</strong> menu in WordPress</li>
      <li>Go to <strong>Settings</strong> > <strong>Image Effects Settings</strong> and select which effects you would like ~ <a href="http://cl.ly/U8U9" target="_blank">Image Reference</a></li>
      <li>Upload a new image :)</li>
    </ul>
  </section>

  <section id="section" class="usage">
    <h2>Usage</h2>
      <p>These new effects and sizes become available inside the <strong>Add Media</strong> area for posts and pages ~ <a href="http://cl.ly/U7uk" target="_blank">Image Reference</a></p>
    <h2>Usage in template</h2>
      <ul>
        <li>All effects generated at 1000x1000, 800x800 and 400x400 (no crop) by default</li>
        <li>All examples are using <a href="http://www.advancedcustomfields.com/" target="_blank">Advanced Custom Fields</a> to grab the image object</li>
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
    
  </section>

  <section id="section" class="notes">
    <h2>Notes</h2>
    <p>We are not PHP developers. This is something we wanted to use, and decided to put out there with the idea that we would learn-as-we-go. Please ask questions on our <a href="http://wordpress.org/plugins/image-effects-generator/">Wordpress plugins page.</a></p>
  </section>

  <section id="section" class="plug">
    <h2>Goes well with...</h2>
    <p>This Wordpress plugin would go perfectly with our jQuery plugin (which just so happens to be in a very similar style) - <a href="http://dev.twoblok.es/data-img/" target="_blank">Data Img</a>.</p>
  </section>

  <section id="section" class="open">
    <h2>Open</h2>
    <a href="http://wordpress.org/about/gpl/">GPL v2 or later</a>
  </section>

  <section id="section" class="us">
    <a href="http://twoblok.es" target="_blank">
      <img src="<?php echo get_template_directory_uri(); ?>/_/img/twoblokes-logo-100h.png">
    </a>
  </section>


<?php get_footer(); ?>