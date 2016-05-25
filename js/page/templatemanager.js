jQuery(document).ready(function($) {
	
	$('.active-template').click(function(event) {

			
			var token = $(this).data('token');
			var resumeid = $(this).data('resumeid');
			var model = "resume";
			var fieldName = "template";
			var fieldData = $(this).data('templatename');
			var url = $(this).data('url');			
			updateData (token, resumeid,  model, fieldName, fieldData,url );


			$('.card > .content > .footer .status ').removeClass('active');
			$(this).parent().parent().parent().children().find('.status').addClass('active');
			
		
			var __image = $(this).parent().parent() .parent('.card').find('.image') ;

			$('.card .image').children('.filter.lv1').removeClass('active').addClass('unactive');
			$('.card .image').children('.filter.lv2').removeClass('unactive').addClass('active');			
			__image.children('.filter.lv1').removeClass('unactive').addClass('active')  ;
			__image.children('.filter.lv2').removeClass('active').addClass('unactive')  ;

	});
});




function updateData (token, resumeid,  model, fieldName, fieldData,url ) {	
	$.ajax({
		url: url,
		type: 'POST',
		async:false,
		data: {
			token: token,
			resumeid: resumeid,
			modelName: model,
			fieldName: fieldName,
			fieldData: fieldData,
		},
	})
	.done(function(data) {
		console.log(data);
		
		 switch (data) {		 	
		 	case "Save":
		 		swal({   title: "Thành công!",   
					text: " Đã đổi giao diện thành công", 
					type: "success",  
					timer: 2000,   showConfirmButton: false 
				});

		 		break;
		 	default:
		 		sweetAlert("Oops...", "Đã xảy ra lỗi, vui lòng kiểm tra lại thông tin", "error");
		 		break;
		 }
	})


}


