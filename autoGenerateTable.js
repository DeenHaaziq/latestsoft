     $(document).ready(function(){
      var i=1;
     $("#add_row").click(function(){
      $('#addr'+i).html("<td>"+ (i+1) +"</td><td><input name='code"+i+"' id='code"+i+"' onkeyup='autocomplet_"+i+"()' type='text' placeholder='Item Code' class='form-control input-md'  /> <ul id='itemcode_list_id_"+i+"'></ul></td><td><input  name='desc"+i+"' id='desc"+i+"' onkeyup='autocomplet2_"+i+"()' type='text' placeholder='Description'  class='form-control input-md'><ul id='itemdesc_list_id_"+i+"'></ul></td><td><input  name='cat"+i+"' id='cat"+i+"' type='text' placeholder='Category'  class='form-control input-md'></td><td><input  name='qty"+i+"' id='qty"+i+"' type='text' placeholder='Qty'  class='form-control input-md'></td><td><input  name='up"+i+"' id='up"+i+"' type='text' placeholder='Unit Price'  class='form-control input-md'></td><td><input  name='ld"+i+"' id='ld"+i+"' type='text' placeholder='Line Discount'  class='form-control input-md'></td><td><input  name='total"+i+"' id='total"+i+"' type='text' placeholder='Total'  class='form-control input-md' onclick='getInputValue"+i+"();''></td>");

      $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
      i++; 
  });
     $("#delete_row").click(function(){
    	 if(i>1){
		 $("#addr"+(i-1)).html('');
		 i--;
		 }
	 });

});