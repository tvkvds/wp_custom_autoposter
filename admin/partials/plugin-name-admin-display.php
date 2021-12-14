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
                        <label for="tvkvds_url_custom">URL </label>
                    </th>
                    <td>
                        <input type="text" id="tvkvds_url_custom" name="tvkvds_url_custom" value="<?php echo get_option( 'tvkvds_url_custom'); ?>" class="regular-text" placeholder="<?php echo get_option( 'tvkvds_url_default'); ?>" />
                    </td>
                </tr>
                <tr>
                    <th>
                        <label for="tvkvds_url_option">Option</label>
                    </th>
                    <td>
                        <input type="text" id="tvkvds_url_option_custom" name="tvkvds_url_option_custom" value="<?php echo get_option( 'tvkvds_url_option_custom'); ?>" class="regular-text" placeholder="<?php echo get_option( 'tvkvds_url_option_default'); ?>" />
                    </td>
                </tr>
                <tr>
                    <th>
                        <label for="tvkvds_url_name">Name</label>
                    </th>
                    <td>
                        <input type="text" id="tvkvds_url_name_custom" name="tvkvds_url_name_custom" value="<?php echo get_option( 'tvkvds_url_name_custom'); ?>" class="regular-text" placeholder="<?php echo get_option( 'tvkvds_url_name_default'); ?>" />
                    </td>
                </tr>
            </tbody>
            </table>
            <p class="submit">
                <input id="submit" class="button button-primary" type="submit" name="submit" value="Save Changes">
            </p>
        </form>
            
        <hr class=" "> 

        <?php 

        // TODO create filter hook with this

        $url = get_option( 'tvkvds_url_default') . '/' . get_option( 'tvkvds_url_option_default' ) . '/' . get_option( 'tvkvds_url_name_default' );
        echo $url . ' responds with: ';

        $options = array(
            'http' => array(
                'header' => 'Accept: application/json'
            )
        );

        $context = stream_context_create($options);
        $data = json_decode( file_get_contents( $url, false, $context ) );

        ?>

        <h1><?php echo $data->message; ?></h1>
        <span><?php echo $data->subtitle; ?> </span>
        
        
            
       
    </div>
</div>

            