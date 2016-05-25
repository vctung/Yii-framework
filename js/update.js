$('.changeIsUpdate').change(function(event) {

	// var userid = $(this).data('userid');
	var token = $(this).data('token');
	var resumeid = $(this).data('resumeid');
	var model = $(this).data('model');
	var fieldName = $(this).data('field');
	var fieldData = $(this).val();
	var url = $(this).data('url');
	updateData (token, resumeid,  model, fieldName, fieldData, url );

}); /* Event Change normal element */


$('body').on('change', '.changeIsUpdateONN', function(event) {
	event.preventDefault();
	// console.log( $(this).parent().parent().parent().parent().parent().parent().parent().html());
	// var userid = $(this).data('userid');
	
	var token = $(this).data('token');
	var resumeid = $('.page-header').data('resumeid');
	var model = $(this).data('model');
	var fieldName = $(this).data('field');
	var fieldData = $(this).val();
	var url = $('.page-header').data('urlupdateresume');
	updateData (token, resumeid,  model, fieldName, fieldData, url );

});  /* Event Change normal element generate by js*/



$('body').on('change', '#countries', function(event) {

	var token = $('#countries').data('token');
	var resumeid = $('#countries').data('resumeid');
	var model = $('#countries').data('model');
	var fieldName = $('#countries').data('field');
	var fieldData = $('.es-list > li.selected').text();
	var url = $('#countries').data('url');
	updateData (token, resumeid,  model, fieldName, fieldData, url );

}); /* Event Change in countries box */


// Sunny

// END SUnny

$(document).ready(function() {

  $('.changeSummernote').summernote({
      height: 300,
  	  enterHtml: '<p><br></p>',
	  callbacks: {
	    onBlur: function(contents, $editable) {
	      var token = $(this).data('token');
	      var resumeid = $('.page-header').data('resumeid');
	      var model = $(this).data('model');
	      var fieldName = $(this).data('field');
	      var fieldData =  encodeURIComponent(contents.target.innerHTML);
	      var url = $('.page-header').data('urlupdateresume');
	      updateData (token, resumeid,  model, fieldName, fieldData, url );
	      console.log(fieldData);
	    }
	  }
	});  

/* END :: Change Summer note*/

}); /* END ready fuction */


/*Update tag name*/
$('body').on('keypress', '.block-tags .bootstrap-tagsinput input', function(event) {

	var keycode = (event.keyCode ? event.keyCode : event.which);
    if(keycode == '13' || keycode == '44'){
       string = '';
       $('.bootstrap-tagsinput .label-info').each(function(index, el) {
       		string = string + $(this).data('value')+",";       		
       });
        string = string.substring(0, string.length - 1);

		var token = $(this).parent().parent().data('token');
		var resumeid = $(this).parent().parent().data('resumeid');
		var model = $(this).parent().parent().data('model');
		var fieldName = $(this).parent().parent().data('field');
		var fieldData = string;
		var url = $(this).parent().parent().data('url');
		updateData (token, resumeid,  model, fieldName, fieldData, url );

    }

});

$('body').on('focus', '.block-tags .bootstrap-tagsinput input', function(event) {

	string2 = "";
	$('.bootstrap-tagsinput .label-info').each(function(index, el) {
       		string2 = string2 + $(this).data('value')+",";       		
    });
    string2 = string2.substring(0, string2.length - 1);

	var token = $(this).parent().parent().data('token');
	var resumeid = $(this).parent().parent().data('resumeid');
	var model = $(this).parent().parent().data('model');
	var fieldName = $(this).parent().parent().data('field');
	var fieldData = string2;
	var url = $(this).parent().parent().data('url');
	updateData (token, resumeid,  model, fieldName, fieldData, url );

});
/* END :: Update tag name*/



$('body').on('click', '.item-block .item-form .btn-remove', function(event) {
	event.preventDefault();
	
	var token = $(this).parent().parent().parent().data('token');
	var type = $(this).parent().parent().parent().data('type');
	var url = $('.page-header').attr('data-urlRemove');
	var resumeid = $('.page-header').attr('data-resumeid');
	var  __this = $(this);
	removeItems(token, type , url, resumeid, __this );
	
});



$('body' ).on('change',".duplicateable .dropify", function(e){ 

	// console.log('111');
	var __this = $(this);
    readFile(this.files[0], function(e) {          
            var a = e.target.result; /* a is image base64 */
            var __preview =  __this.siblings('.dropify-preview');
            var img = "<img src=\""+ a +"\">";
         	__preview.children('.dropify-render').html( img ) ;

         	url = __this.parent().parent().attr('data-url');
         	token = __this.parent().parent().attr('data-token');
         	resumeid = $('.page-header').attr('data-resumeid');
         	model = __this.parent().parent().parent().parent().parent().parent().parent().attr('data-type');
         	fieldName = "logo";
         	type = __this.parent().parent().parent().parent().parent().parent().parent().attr('data-type');
         	fieldData  = a;
         	// console.log(url + token  + resumeid +  model +  fieldName  +  type);
         	updateImg(url , token , resumeid , model, fieldName , fieldData, type );
     });
 		
        

});

function readFile(file, onLoadCallback){
    var reader = new FileReader();
    reader.onload = onLoadCallback;
    reader.readAsDataURL(file);
}



function updateImg(url , token , resumeid , model, fieldName , fieldData, type ) {
       
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
            type: type,
        },
    })
    .done(function(data) {
        console.log(data);
    })
    .fail(function() {
        console.log("error");
    })
    .always(function() {
        console.log("complete");
    });
}



function removeItems(token, type , url , resumeid, __this ) {

	swal({   title: "Bạn có chắc là muốn xóa ?",    type: "warning",   
		showCancelButton: true,   confirmButtonColor: "#DD6B55",   confirmButtonText: "Tôi đồng ý xóa nó !",   closeOnConfirm: false 
	},
	function(){

		$.ajax({
		url: url,
		type: 'POST',
		data: {
			token: token,
			type: type,
			resumeid: resumeid,			
			},
		})
		.done(function(data) {
			if ( data == false) {
				sweetAlert("Oops...", "Đã xảy ra lỗi, vui lòng kiểm tra lại thông tin", "error");
				return;
			}	
			
		}) /* End done ajax*/
		__this.parent().parent().parent().fadeOut(300).delay(300).remove();
		swal("Đã xóa thông tin !", "Bạn sẽ không thể khôi phục thông tin này.", "success"); 
		/* Show alert deleted */
	}); /* End function Appcept*/

	
}

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
		 	case "login_error":
		 		 sweetAlert("Oops...", "Hình như bạn chưa đăng nhập", "error");
		 		break;
		 	case "false":
		 		 sweetAlert("Oops...", "Đã xảy ra lỗi, vui lòng kiểm tra lại thông tin", "error");
		 		break;
		 	default:
		 		// statements_def
		 		break;
		 }
	})
	.fail(function() {
		console.log("error");
	})
	.always(function() {
		console.log("complete");
	});



}

