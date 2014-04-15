<?php
/**
 * @package z_plugin
 */
/* 
/*
Plugin Name: Z_PLUGIN
Description: It is a wonderful plugin
License: GPL
Author: EVLASOVA 
Version: 1.0
*/

function fb_add_custom_user_profile_fields( $user ) { // On ajoute les données ici 
?>
	<h3><?php _e('MORE INFOS', 'your_textdomain'); ?></h3> 
	<table class="form-table">
		<tr>
		<th>
		<label for="address"><?php _e('Address', 'your_textdomain'); ?></label>
		</th>
		<td>
		<input type="text" name="address" id="address" value="<?php echo esc_attr( get_the_author_meta(
'address', $user->ID ) ); ?>" class="regular-text" /><br />
		<span class="description">
		<?php _e('DESCRIPTION DU CHAMP', 'your_textdomain'); ?> 
		</span>
		</td>
		</tr>
</table>
<?php }

function fb_save_custom_user_profile_fields( $user_id ) { // On sauvegarde les données ici

if ( !current_user_can( 'edit_user', $user_id ) ) 
		return FALSE;

update_usermeta( $user_id, 'address', $_POST['address'] );
}

// On dit que fb_add_custom... va « agir » avec show_user_profile et edit_user_profile /on exécute add_action( 'show_user_profile', 'fb_add_custom_user_profile_fields' );
add_action( 'show_user_profile', 'fb_add_custom_user_profile_fields' );
add_action( 'edit_user_profile', 'fb_add_custom_user_profile_fields' );

// On dit que fb_save_custom... va « agir » avec personl_option_update et edit_user_profile_update /on exécute add_action( 'personal_options_update', 'fb_save_custom_user_profile_fields' );
add_action( 'personal_options_update', 'fb_save_custom_user_profile_fields' );
add_action( 'edit_user_profile_update', 'fb_save_custom_user_profile_fields' );
?>