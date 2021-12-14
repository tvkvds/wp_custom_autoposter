<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Plugin_Name
 * @subpackage Plugin_Name/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->


<div id="wpbody" class="no-jq">
    <div id="wpbody-content">
        <div class="wrap">
            <h1 class="wp-heading-inline"> TVKVDS autoPoster</h1>
            <hr class=" "> 
        </div>

        <h2>Settings</h2>

        <form method="POST" action="options.php">
        <?php
            settings_fields( 'autoposter_general_settings' );
            do_settings_sections( 'autoposter_general_settings' );
        ?>
            <table class="form-table">
            <tbody>
                <tr>
                    <th>
                    <label for="tvkvds_url">Get post info from: </label>
                    </th>
                    <td>
                    <input type="text" id="tvkvds_url" name="tvkvds_url" value="<?php echo get_option( 'tvkvds_url' );?>" class="regular-text" placeholder="https://example.com" />
                    </td>
                </tr>
            </tbody>
            </table>
            <p class="submit">
                <input id="submit" class="button button-primary" type="submit" name="submit" value="Save Changes">
            </p>
        </form>
            
            
            
       
    </div>
</div>

            