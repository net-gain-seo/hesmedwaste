jQuery(function(){
	jQuery( document ).on('submit_success', function(e){
		$form = jQuery(e.target);
		if ($form.attr('id') == 'pop-up-form'){
				gtag('event', 'Submit', {
			  'event_category': 'Form',
			  'event_label': 'Get a Quote'
			});
		}
		else if ($form.attr('id') == 'contact-box'){
				gtag('event', 'Submit', {
			  'event_category': 'Form',
			  'event_label': 'Contact Page Form'
			});
		}
	});
});