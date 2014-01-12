$(function(){ 

$('#form_inscription').submit(function(){
	var fields = new Array('email','password');
	
	for(var i = 0 ; i <fields.length ; i++)
		{
			var string = "#"+fields[i];
			var val = document.getElementById(fields[i]).value;
			
			if(val == '' || val.length < 5)
				{
					$(string).css({'background-color' : '#FFEDEF', 'border' : 'solid 1px red'});
					return false;
				}
			
			
		}

	
return true;
});

});