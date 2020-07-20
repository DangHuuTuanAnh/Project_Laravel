$(document).ready(function() {
	$("a#del_img_demo").on('click', function(event) {
		event.preventDefault();
		var url = "http://127.0.0.1:8000/admin/products/delete_image/";
		var _token = $("form[name='frmEditProduct']").find("input[name='_token']").val();

		var idHinh = $(this).parent().find("img").attr("idHinh");

		var img = $(this).parent().find("img").attr("src");
		
		var rid = $(this).parent().find("img").attr("id");

		$.ajax({
			url: url + idHinh,
			type: 'GET',
			cache:false,
			data: {"_token": _token,"idHinh":idHinh,"urlHinh":img},
			success:function(data){
				if(data == "OK"){
					$("#"+ rid).remove();
				}else{
					alert('error');
				}
			}
		});
	});	
});

$(document).ready(function(){
	$(".delete_item_cart").on('click',function(event){
		event.preventDefault();
		var url = "http://127.0.0.1:8000/delete_item/";

		var idItem = $(this).attr('value');

		// alert(idItem);
		$.ajax({
			url: url + idItem,
			type: 'GET',
			dataType: 'html',
			data: {idItem: idItem},

			success:function(data){
				if(data == "OK"){
					$("#item_cart").remove();
					
				}else{
					alert('error');
				}
				$('#viewss_cart').load(' #viewss');
			},

			error:function(){
				console.log('error');
			}
		})
		// .done(function(data) {
		// 	console.log("success");
		// 	if(data == "OK"){
		// 		$("#item_cart").remove();
		// 		// $('#viewss_cart').load(' #viewss');
		// 		}else{
		// 			alert('error');
		// 		}
		// 	})
		// .fail(function() {
		// 	console.log("error");
		// })
		
		


		// alert(idItem);

	})
});

$(document).ready(function(){
	$("a#add_to_cart").on('click', function(event) {
		// event.preventDefault();
		var url = "http://127.0.0.1:8000/add_to_cart/";

		var idProduct = $(this).attr("value");

		
		$.ajax({
			url: url + idProduct,
			type: 'GET',
			dataType: 'html',
			data: {"idProduct": idProduct},
		})
		.done(function(data) {
			console.log("success");
			
			$('#viewss_cart').load(' #viewss');

		})
		.fail(function() {
			console.log("error");
		})

	});
});


