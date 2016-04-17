// autocomplet : this function will be executed every time we change the text
function autocomplet() {
	var min_length = 0; // min caracters to display the autocomplete
	var keyword = $('#category_code').val();
	if (keyword.length >= min_length) {
		$.ajax({
			url: 'ajax_refresh.php',
			type: 'POST',
			data: {keyword:keyword},
			success:function(data){
				$('#category_list_id').show();
				$('#category_list_id').html(data);
			}
		});
	} else {
		$('#category_list_id').hide();
	}
}

// set_item : this function will be executed when we select an item
function set_item(item) {
	// change input value
	$('#category_code').val(item);
	// hide proposition list
	$('#category_list_id').hide();
}