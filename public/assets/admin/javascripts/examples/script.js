$(document).ready(function(){
	/* Form Validation Script */
	$.validate({
		lang: 'en'
	});

	/* Brand Active Inactive Script */
	$('body').on('change', '#brandStatus', function(){
		var id = $(this).attr('data-id');
		if(this.checked){
			var status = 1;
		}else{
			var status = 0;
		}

		$.ajax({
			url: 'brandStatus/'+id+'/'+status,
			method:'get',
			success: function(result){
				console.log(result);
			}

		});
	});

	/* Category Active Inactive Script */
	$('body').on('change', '#categoryStatus', function(){
		var id = $(this).attr('data-id');
		if(this.checked){
			var status = 1;
		}else{
			var status = 0;
		}

		$.ajax({
			url: 'categoryStatus/'+id+'/'+status,
			method:'get',
			success: function(result){
				console.log(result);
			}

		});
	});
	
	// $('#brandAdd').on('submit', function(e){
	// 	e.preventDefault();

	// 	$.ajaxSetup({
	// 		headers: {
	// 			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	// 		}
	// 	});

	// 	$.ajax({
	// 		type: "POST",
	// 		url: "{{ route('store_brand') }}",
	// 		data: $('#brandAdd').serialize(),
	// 		success: function(response){
	// 			console.log(response);
	// 		}
	// 	});
	// });


});

