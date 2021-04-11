jQuery(document).ready(function(){

	jQuery(".context-about-us .main .pt-xl>div:first-child").removeClass( "col-md-9" ).addClass( "col-md-7" );
	jQuery(".context-contact-us .main .pt-xl>div:first-child").removeClass( "col-md-9" ).addClass( "col-md-7" );

	jQuery(".context-about-us .main .pt-xl>div:last-child").removeClass( "col-md-3" ).addClass( "col-md-4 col-md-offset-1" );
	jQuery(".context-contact-us .main .pt-xl>div:last-child").removeClass( "col-md-3" ).addClass( "col-md-4 col-md-offset-1" );

	jQuery(".context-about-us .main img").addClass("img-responsive pull-left mr-xl mb-xl mt-xs");

	jQuery("#search-block-form #edit-actions").append('<i class="icon-magnifier icons cz-color-16777215"></i>');

	jQuery("#search-block-form #edit-keys").attr('placeholder', "SEARCH...");
	jQuery("#search-block-form #edit-submit").attr('value', "");

	jQuery(".page-node-type-practice-areas #mainNav li:nth-child(4)>a").addClass('is-active');
	jQuery(".page-node-type-attorneys #mainNav li:nth-child(3)>a").addClass('is-active');
	jQuery(".page-node-type-news #mainNav li:nth-child(5)>a").addClass('is-active');

	jQuery("#contact-message-request-a-free-consultation-form").validate();

});