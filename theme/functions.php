<?php
/**
 * Functions - Child theme custom functions
 */


/************************************************************************************************
***************** CAUTION: do not remove or edit anything within this section ******************/

/**
 * Makes the Divi Children Engine available for the child theme.
 * Do not remove this, your child theme will not work.
 */
require_once('divi-children-engine/divi_children_engine.php');  

/***********************************************************************************************/


/*- You can include any custom code for your child theme below this line -*/


/*

	add_filter( 'woocommerce_get_price_input', 'get_price_input_custom', 10, 2 );
	function get_price_input_custom($html_price_text, $product_id) {
		
	global $product;
	$setting_currency = get_option('woo_multi_currency_params');
	//return print_r($setting_currency);
	foreach($setting_currency['currency'] as $key=>$value){
		if($value == $_COOKIE['wmc_current_currency']){
			$currency_key = $key;
		}		
	}
    $currency_pos = $setting_currency['currency_pos'][$currency_key];
	$currency_rate = $setting_currency['currency_rate'][$currency_key];
	$currency_decimals = $setting_currency['currency_decimals'][$currency_key];
	$currency_custom = $setting_currency['currency_custom'][$currency_key];
    $reg_price = get_post_meta( $product_id, '_min_price', true);	
	
	
	$geoplugin_arg        = json_decode( base64_decode( $_COOKIE['wmc_ip_info'] ), true );
	$detect_currency_code = isset( $geoplugin_arg['currency_code'] ) ? $geoplugin_arg['currency_code'] : '';
	
	$decimal_separator  = wc_get_price_decimal_separator();
	$thousand_separator = wc_get_price_thousand_separator();
	
	$decimals    = $currency_decimals;
	$current_pos =  $currency_pos;
		
	$rate   = $currency_rate;
	$symbol = $_COOKIE['wmc_currency_symbol'];
	switch ( $current_pos ) {
		case 'left' :
			$format = '%1$s%2$s';
			break;
		case 'right' :
			$format = '%2$s%1$s';
			break;
		case 'left_space' :
			$format = '%1$s&nbsp;%2$s';
			break;
		case 'right_space' :
			$format = '%2$s&nbsp;%1$s';
			break;
	}
	$product_data = $product->get_data();
	$reg_price = get_post_meta( $product_id, '_min_price', true);
	$price = number_format( $reg_price * $rate, $decimals, $decimal_separator, $thousand_separator );
    if(isset($setting_currency['enable']) && $setting_currency['enable'] == 1) {
		if ( is_admin() || current_user_can( 'administrator' )  ) {
			$return = $html_price_text;
			return $return;
		} else {		
			$return = '<input id="nyp" name="nyp" type="text" value="'.$price.'" size="6" title="nyp" class="input-text rtest amount nyp-input text" />';
			return $return;
		}
	} else {
		return $html_price_text;
	}
}
	add_filter('woocommerce_nyp_minimum_price_html', 'get_minimum_price_html_custom', 10, 2);
	
	*/
	
	/**
	 * Get the "Minimum Price: $10" minimum string.
	 *
	 * @param   mixed obj|int $product
	 * @return 	$price string
	 * @access 	public
	 * @since 	2.0
	 */

/*
	function get_minimum_price_html_custom( $html_price_text, $product  ) {
        global $product;
	    $product_id = $product->id;
        $setting_currency = get_option('woo_multi_currency_params');
		foreach($setting_currency['currency'] as $key=>$value){
			if($value == $_COOKIE['wmc_current_currency']){
				$currency_key = $key;
			}		
		}
		$currency_pos = $setting_currency['currency_pos'][$currency_key];
		$currency_rate = $setting_currency['currency_rate'][$currency_key];
		$currency_decimals = $setting_currency['currency_decimals'][$currency_key];
		$currency_custom = $setting_currency['currency_custom'][$currency_key];
		$reg_price = get_post_meta( $product_id, '_min_price', true);	
		
		
		$geoplugin_arg        = json_decode( base64_decode( $_COOKIE['wmc_ip_info'] ), true );
		$detect_currency_code = isset( $geoplugin_arg['currency_code'] ) ? $geoplugin_arg['currency_code'] : '';
		
		$decimal_separator  = wc_get_price_decimal_separator();
		$thousand_separator = wc_get_price_thousand_separator();
		
		$decimals    = $currency_decimals;
		$current_pos =  $currency_pos;
			
		$rate   = $currency_rate;
		$symbol = $_COOKIE['wmc_currency_symbol'];
		switch ( $current_pos ) {
			case 'left' :
				$format = '%1$s%2$s';
				break;
			case 'right' :
				$format = '%2$s%1$s';
				break;
			case 'left_space' :
				$format = '%1$s&nbsp;%2$s';
				break;
			case 'right_space' :
				$format = '%2$s&nbsp;%1$s';
				break;
		}
		
		$reg_price = get_post_meta( $product_id, '_min_price', true);
		$_subscription_period = get_post_meta( $product_id, '_subscription_period', true);
		$price = number_format( $reg_price * $rate, $decimals, $decimal_separator, $thousand_separator );
		$minimum_text = stripslashes( get_option( 'woocommerce_nyp_minimum_text', __( 'Minimum Price:', 'wc_name_your_price' ) ) );
		
		if(isset($setting_currency['enable']) && $setting_currency['enable'] == 1) {
			if( $reg_price > 0 ){
				if ( is_admin() || current_user_can( 'administrator' )  ) {
					$return = $html_price_text;
					return $return;
				} else {		
					$return = '<span class="minimum-text">'.$minimum_text.'</span> <span class="amount"><span class="woocommerce-Price-amount amount">'.$price.' '.$_COOKIE["wmc_current_currency"].'</span> <span class="subscription-details"> / '.$_subscription_period.'</span></span>';
					return $return;
				}
			}
		} else {
			return $html_price_text;
		}
	}

*/

	
	function eg_my_custom_retry_rules( $default_retry_rules_array ) {

    return array(
           array(
                'retry_after_interval'            => 86400, //24 hours, 
                'email_template_customer'         => 'WCS_Email_Customer_Payment_Retry',
                'email_template_admin'            => 'WCS_Email_Payment_Retry',
                'status_to_apply_to_order'        => 'pending',
                'status_to_apply_to_subscription' => 'on-hold',
            ),
            array(
                'retry_after_interval'            => 259200, // 3 days 
                'email_template_customer'         => 'WCS_Email_Customer_Payment_Retry', // custom email
                'email_template_admin'            => 'WCS_Email_Payment_Retry',
                'status_to_apply_to_order'        => 'pending',
                'status_to_apply_to_subscription' => 'on-hold',
            ),
            array(
                'retry_after_interval'            => 604800, // 7 days 
                'email_template_customer'         => 'WCS_Email_Customer_Payment_Retry', // avoid spamming the customer by not sending them an email this time either
                'email_template_admin'            => 'WCS_Email_Payment_Retry',
                'status_to_apply_to_order'        => 'pending',
                'status_to_apply_to_subscription' => 'on-hold',
            ),
            array(
                'retry_after_interval'            => 1209600, // 14 days 
                'email_template_customer'         => 'WCS_Email_Customer_Payment_Retry', // custom email
                'email_template_admin'            => 'WCS_Email_Payment_Retry',
                'status_to_apply_to_order'        => 'pending',
                'status_to_apply_to_subscription' => 'on-hold',
            ),
            array(
                'retry_after_interval'            => 1814400, // 21 days 
                'email_template_customer'         => 'WCS_Email_Customer_Payment_Retry', // custom email
                'email_template_admin'            => 'WCS_Email_Payment_Retry',
                'status_to_apply_to_order'        => 'pending',
                'status_to_apply_to_subscription' => 'on-hold',
            ),
        );
}
add_filter( 'wcs_default_retry_rules', 'eg_my_custom_retry_rules' );


//REMOVE ACTIONS FROM SUBSCRITPIONS PAGE UNDER MY ACCOUNT
function eg_remove_my_subscriptions_button( $actions, $subscription ) {

	foreach ( $actions as $action_key => $action ) {
		switch ( $action_key ) {
//			case 'change_payment_method':	// Hide "Change Payment Method" button?
//			case 'change_address':		// Hide "Change Address" button?
			case 'switch':			// Hide "Switch Subscription" button?
			case 'resubscribe':		// Hide "Resubscribe" button from an expired or cancelled subscription?
//			case 'pay':			// Hide "Pay" button on subscriptions that are "on-hold" as they require payment?
//			case 'reactivate':		// Hide "Reactive" button on subscriptions that are "on-hold"?
			case 'cancel':			// Hide "Cancel" button on subscriptions that are "active" or "on-hold"?
				unset( $actions[ $action_key ] );
				break;
			default: 
				error_log( '-- $action = ' . print_r( $action, true ) );
				break;
		}
	}

	return $actions;
}
add_filter( 'wcs_view_subscription_actions', 'eg_remove_my_subscriptions_button', 100, 2 );


// Change WooCommerce "Related products" text
add_filter('gettext', 'change_rp_text', 10, 3);
add_filter('ngettext', 'change_rp_text', 10, 3);

function change_rp_text($translated, $text, $domain)
{
     if ($text === 'Related products' && $domain === 'woocommerce') {
         $translated = esc_html__('Related Items', $domain);
     }
     return $translated;
}



// Add Custom UK Country Field
add_action('woocommerce_after_checkout_billing_form', 'add_custom_checkout_field');

function add_custom_checkout_field() {
    // Check if the selected country is the UK
    if (WC()->customer->get_billing_country() === 'GB') {
        echo '<div id="uk_region_field">
            <p class="form-row form-row-wide validate-required">
                <label for="uk_region">Please select your region in the UK <abbr class="required" title="required">*</abbr></label>
                <select name="uk_region" id="uk_region" class="input-text" required>
                    <option value="">Select Region</option>
                    <option value="England">England</option>
                    <option value="Northern Ireland">Northern Ireland</option>
                    <option value="Wales">Wales</option>
                    <option value="Scotland">Scotland</option>
                </select>
            </p>
        </div>';
    } else {
        // If the selected country is not GB, hide the field
        echo '<style>#uk_region_field { display: none; }</style>';
    }

    // Add JavaScript to show/hide the field based on the selected country
    echo '<script>
        jQuery(document).ready(function($) {
            var ukRegionField = $("#uk_region_field");
            var billingCountrySelect = $("#billing_country");

            // Function to toggle the field visibility
            function toggleUkRegionField() {
                if (billingCountrySelect.val() === "GB") {
                    ukRegionField.show();
                    $("#uk_region").prop("required", true);
                } else {
                    ukRegionField.hide();
                    $("#uk_region").prop("required", false);
                }
            }

            // Initial toggle on page load
            toggleUkRegionField();

            // Toggle the field when the country selection changes
            billingCountrySelect.change(function() {
                toggleUkRegionField();
            });
        });
    </script>';
}

//Save UK Field to Profile
add_action('woocommerce_checkout_update_user_meta', 'save_uk_region_to_user_profile');

function save_uk_region_to_user_profile($user_id) {
    if (isset($_POST['uk_region'])) {
        $uk_region = sanitize_text_field($_POST['uk_region']);
        update_user_meta($user_id, 'uk_region', $uk_region);
    }
}

//Show and Allow Edit of UK Field on Profile
add_action('show_user_profile', 'display_uk_region_in_user_profile');
add_action('edit_user_profile', 'display_uk_region_in_user_profile');

function display_uk_region_in_user_profile($user) {
    $uk_region = get_user_meta($user->ID, 'uk_region', true);

    if (current_user_can('edit_user', $user->ID)) {
        ?>
        <h3>UK Region</h3>
        <table class="form-table">
            <tr>
                <th><label for="uk_region">Select your region in the UK</label></th>
                <td>
                    <select name="uk_region" id="uk_region" class="regular-text">
                        <option value="">Select Region</option>
                        <option value="england" <?php selected($uk_region, 'england'); ?>>England</option>
                        <option value="northern_ireland" <?php selected($uk_region, 'northern_ireland'); ?>>Northern Ireland</option>
                        <option value="wales" <?php selected($uk_region, 'wales'); ?>>Wales</option>
                        <option value="scotland" <?php selected($uk_region, 'scotland'); ?>>Scotland</option>
                    </select>
                </td>
            </tr>
        </table>
        <?php
    }
}

//Allow editing of UK Field from Profile
add_action('personal_options_update', 'save_uk_region_from_user_profile');
add_action('edit_user_profile_update', 'save_uk_region_from_user_profile');

function save_uk_region_from_user_profile($user_id) {
    if (current_user_can('edit_user', $user_id)) {
        if (isset($_POST['uk_region'])) {
            $uk_region = sanitize_text_field($_POST['uk_region']);
            update_user_meta($user_id, 'uk_region', $uk_region);
        }
    }
}

// Save custom checkout field value as user meta data Rc code live 15-03
add_action('woocommerce_checkout_subscription_created', 'do_it', 10, 1);

function do_it($subscription) {
  $order = $subscription ->order;
	global $wpdb;
  $table=$wpdb->prefix."register_user"; 
	$items = $order->get_items();
	$product_subscribe_id=array('742','186','114686','152472','152543');
	$var = 0;
	foreach ( $items as $item ){
		
			$item_id = $item->get_product_id();
			
			if(!in_array($item_id,$product_subscribe_id) && $var == 0){
						$data = array(
			 		 'billing_first_name' => $order->get_billing_first_name(),
			 		 'billing_last_name'    => $order->get_billing_last_name(),
			 		 'billing_country'    => $order->get_billing_country(), // Customer billing country
			 		 'billing_state' => $order->get_billing_state(),
			 		 'billing_city'    => $order->get_billing_city(),
			 		 'billing_postcode'    => $order->get_billing_postcode(),
			 		 'billing_email'    => $order->get_billing_email(),
			 		 'user_id'    => $order->get_user_id(),
			 		 'order_id'    => $order->get_id(),
			 		 'subscription_status'	=> 'pending',
					 'uk_field' => sanitize_text_field( $_POST['uk_region'] )
					 );

			$format = array('%s','%s');
			$success=$wpdb->insert( $table, $data, $format );
			$var = 1;
			
		}
	}
}


function my_delete_user( $user_id ) {
	    global $wpdb;
	    $table_name=$wpdb->prefix."register_user"; 
	    $user_obj = get_userdata( $user_id );

	    $id_user = $user_obj->ID;   

	   	$query_friend= $wpdb->query("DELETE FROM $table_name where `user_id` = ".$id_user."");

}
add_action( 'delete_user', 'my_delete_user' );



add_action('woocommerce_subscription_status_updated', 'extends_update_status', 100, 3);
 
function extends_update_status($subscription, $new_status, $old_status) {
//print_r($subscription);

	$userid= $subscription->customer_id;
		$porderid = $subscription->parent_id;
		
  	global $wpdb;
   // $table_name  = st_register_user;
  	$table_name=$wpdb->prefix."register_user"; 
 	$sql = "UPDATE $table_name SET subscription_status = '".$new_status."'where  user_id='".$userid."' AND order_id='".$porderid."'"; 

 	
    $wpdb->query($sql);


}



function update_extra_profile_fields($user_id) {
	
	global $wpdb;
	$user_edit = get_userdata($user_id);
	$first_name = $user_edit->billing_first_name;
	$last_name = $user_edit->billing_last_name;
	$email = $user_edit->billing_email;
	$country = $user_edit->billing_country;
	$city = $user_edit->billing_city;
	$state = $user_edit->billing_state;
	$postcode = $user_edit->billing_postcode;
	$uk_region = $user_edit->uk_region;
  
	$get_user = $wpdb->get_results('SELECT user_id FROM '.$wpdb->prefix.'register_user WHERE user_id = "'.$user_id. '" LIMIT 1');
	
	if(count($get_user) > 0){
		
	$wpdb->query('UPDATE '.$wpdb->prefix.'register_user SET billing_first_name = "'.$first_name.'", billing_last_name = "'.$last_name.'", billing_country = "'.$country.'", billing_city = "'.$city.'", billing_state = "'.$state.'", billing_postcode = "'.$postcode.'", billing_email = "'.$email.'", uk_field = "'.$uk_region.'" WHERE user_id = "'.$user_id. '"');
		
	}
}
add_action('profile_update', 'update_extra_profile_fields');

/**
* @snippet       Disable Postcode/ZIP Validation @ WooCommerce Checkout
* @how-to        Get CustomizeWoo.com FREE
* @sourcecode    https://businessbloomer.com/?p=20203
* @author        Rodolfo Melogli
* @testedwith    WooCommerce 3.5.3
* @donate $9     https://businessbloomer.com/bloomer-armada/
*/
 
add_filter( 'woocommerce_default_address_fields' , 'bbloomer_override_postcode_validation' );
 
function bbloomer_override_postcode_validation( $address_fields ) {
  $address_fields['postcode']['required'] = false;
  return $address_fields;
}

//Shortcode for Login Form
function custom_login_form_shortcode() {
    if (is_user_logged_in()) {
        return wp_login_form(array('echo' => false));
    }
}
//add_shortcode('custom_login_form', 'custom_login_form_shortcode');
// add_action('woocommerce_single_product_summary', 'prepend_regular_price', 10); // Adjusted priority

function prepend_regular_price() {
    $p_price = get_post_meta(get_the_ID(), '_regular_price', true);
    $min_price = get_post_meta(get_the_ID(), '_min_price', true);
    if(empty($p_price)){
        $price = !empty($min_price) ? "$" . $min_price : "$0"; // Escaping output
    } else {
        $price = !empty($p_price) ? "$" . $p_price : "$0"; // Escaping output
    }  

    add_action('wp_footer', function() use ($price) {
        ?>
        <script>
            $(document).ready(function() { 
				setTimeout(function() {	
					console.log('window ready');
			     var price = <?php echo json_encode($price); ?>; // Output PHP variable safely
					console.log('price= ',price);
					$(".subscription-details").show(); 
					$(".subscription-details").prepend(price); 
				 }, 3000); 
			 });	

			// $(document).ready(function() {
			// 	$(document).on('DOMNodeInserted', '.subscription-details', function() {
			// 		var $element = $(this);
			// 		var price = <?php echo json_encode($price); ?>; // Output PHP variable safely
			// 		console.log('Price:', price); // Debugging statement
			// 		$element.prepend(price);  // Set text content
			// 	});
			// });


        </script>
        <?php
    });
}

?>