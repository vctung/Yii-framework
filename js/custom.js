jQuery(document).ready(function($) {

	/* Tab setting*/
	$('.tabs.munual-setting>nav>ul>li a').click(function(event) {
		var section = $(this).attr('href');
		$('.tabs.munual-setting .content section').removeClass('content-current');
		$('.tabs.munual-setting .content '+section).addClass('content-current');
		$(this).parent().siblings().removeClass('tab-current');
		$(this).parent().addClass('tab-current');
	});

	/* END ::  Tab setting*/



});//end ready function


function actionRun(Controller_name, action_name)
{

	$('#'+Controller_name).attr('class', 'active open');//get active menu
	$('#'+Controller_name).find('.sub-menu').attr('style', 'display: block;');
	$('#'+Controller_name).find('#'+action_name).attr('class', 'active open');

	$('.controller_name').text(Controller_name);
	$('.action_name').text(action_name);
	$('.controller_name').css('textTransform', 'capitalize');
	$('.action_name').css('textTransform', 'capitalize');
}

/* END  action run */

