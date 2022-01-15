jQuery(document).ready(function()
{
	jQuery(".change-text").click(function()
	{
		var email = jQuery(this).data('value');
		jQuery(this).text(email);
	})
})





jQuery(document).ready(function() {
	var ajaxurl = "http://stage.awakeningprayerhubs.com/wp-admin/admin-ajax.php";	
	jQuery("#country-name").on("change", function() {
		var countrycode = jQuery(this).val();
		jQuery('#loading-img-user-location').show();
		jQuery.ajax({
            url : ajaxurl,
            type : 'post',
            data : {
                action : 'get_user_city',
                countrycode : countrycode
            },
            success : function( response ) {
				jQuery('#loading-img-user-location').hide();	
				jQuery('.filter_by_location').show();	
                jQuery('.selectedCity').html(response);
            }
        });
	});
	jQuery('#location-banner').parallax('50%', 0.1);
});
