     $(document).ready(function(){
      var i=1;
     $("#add_row").click(function(){
      $('#addr'+i).html("<td>"+ (i+1) +"</td><td><input name='code"+i+"' type='text' placeholder='Item Code' class='form-control input-md'  /> </td><td><input  name='desc"+i+"' type='text' placeholder='Description'  class='form-control input-md'></td><td><input  name='cat"+i+"' type='text' placeholder='Category'  class='form-control input-md'></td>");

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