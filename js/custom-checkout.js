jQuery(document).ready(function($) {
    // Hide the custom field by default
    $('#uk_field_field').closest('.form-row').hide();

    // Show the custom field if the user's country is UK
    $('#billing_country').on('change', function() {
        if ( $(this).val() === 'GB' ) {
            $('#uk_field_field').closest('.form-row').show();
            $('#uk_field').prop('required', true);
        } else {
            $('#uk_field_field').closest('.form-row').hide();
            $('#uk_field_field').prop('required', false);
        }
    });
});