jQuery(document).ready(function($) {
	jQuery('div.tt-options-admin-content').hide();
	jQuery('div#tt-options-admin-li-1').show();
	jQuery('#tt-options-admin-nav li').removeClass('active');
	jQuery('#tt-options-admin-nav li#tt-options-admin-li1').addClass('active');
	jQuery('#tt-options-admin-nav li').click(function() {
		var id = jQuery(this).attr('id').substr(19);
			jQuery('div.tt-options-admin-content').hide();
			jQuery('#tt-options-admin-nav li').removeClass('active');
			jQuery('#tt-options-admin-nav li#tt-options-admin-li'+id).addClass('active');
			jQuery('div.tt-options-admin-content#tt-options-admin-li'+id).show();
	});
	
});