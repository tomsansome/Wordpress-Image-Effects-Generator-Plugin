<div class="wrap">
<h2>Image Effects Generator</h2>
<h3>Choose which effects you would like to generate upon every image upload:</h3>

<form method="post" action="options.php">
    <?php settings_fields( 'image-effects-settings-group' ); ?>
    <?php do_settings_sections( 'image-effects-settings-group' ); ?>
    <table class="form-table">
        <tr valign="top">
        <th scope="row">Black and White</th>
        <?php $my_options = get_option('black_and_white'); ?>
        <td><input type="checkbox" name="black_and_white" <?php if ($my_options == 'yes_please') echo "checked='checked'"; ?> value="yes_please"></td>
        </tr>
         
        <tr valign="top">
        <th scope="row">Some Other Option</th>
        <td><input type="text" name="some_other_option" value="<?php echo get_option('some_other_option'); ?>" /></td>
        </tr>
        
        <tr valign="top">
        <th scope="row">Options, Etc.</th>
        <td><input type="text" name="option_etc" value="<?php echo get_option('option_etc'); ?>" /></td>
        </tr>
    </table>
    
    <?php submit_button(); ?>

</form>
</div>