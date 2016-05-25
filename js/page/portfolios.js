jQuery(document).ready(function($) {


	
});
// ENd :: ready fucntion

var __getListPortCat;


$('.edit-list-port').click(function(event) {
	var resumeid =  $('.page-header').data('resumeid');
	var url =  $('.page-header').data('urlPortfolio');

	// $('.section-portfolio').css('z-index', '1052');
	// getListPortCat(resumeid,url);	
});

$('body').on('focus', '#editPortList > .modal-body > .port-items.duplicateable input', function(event) {

	event.preventDefault();
	/* Act on the event */

	console.log('sdsdsd')
	$(this).clone();

});




function getListPortCat(resumeid,url) {

		$.ajax({
			url: url,
			type: 'POST',
			async:false,
			data: {
				resumeid: resumeid,	
				action : "get"			
			},
		})
		.done(function(data) {
			console.log(data)
			 // data = JSON.parse(data);	
			 // __getListPortCat =data;
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});

}


function renderListPortCat() {

}
