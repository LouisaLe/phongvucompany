$(document).ready(function() {

	$('.update_transaction').click(function() {
		var id = $(this).attr('id');
		$.ajax({
				url:url_base+'/admin/transactions/confirmTransaction',
				type:'get',
				async:true,
		 		dataType:'text',
				data :{'id': id },
				success: function(data)
				{
					if(data == 'error') {
						alert('Số lượng sản phẩm không đủ cần kiểm tra lại');
					} 
					window.location.href = url_base +'/admin/transactions/list';
				}
		});
	});

});