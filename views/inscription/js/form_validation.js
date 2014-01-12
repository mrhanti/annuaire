$(function(){ 

$('#form_inscription').submit(function(){
	//var fields = new Array('nom','prenom','date_naissance','profession','adresse','ville','telephone','password','passwordc');
	/*var fields = new Array('date_naissance');
	for(var i = 0 ; i <fields.length ; i++)
		{
			var string = "#"+fields[i];
			var val = document.getElementById(fields[i]).value;
			//alert(string + val);
			if(fields[i] == 'date_naissance')
				{



						if(/((19|20)[0-9]{2})\-([0-9][1-2])\-([0-2][0-9]|[3][0-1])/.test(val)){
						    var tokens = val.split('-');  //  text.split('\/');
						    
						    var year   = parseInt(tokens[0], 10);
						    var month  = parseInt(tokens[1], 10);
						    var day    = parseInt(tokens[2], 10);
						    alert("valid");
						}
						else{
						    alert("not valid");
						}





					/*var dateReg = "/^\d{2}([./-])\d{2}\1\d{4}$/";
				  if(val.match(dateReg))
				  	{
				  		alert("valid");
				  	}
				  else {alert("not valid ");} 

				  return false;
				}
			if(val == '' || val.length < 5)
				{
					$(string).css({'background-color' : '#FFEDEF', 'border' : 'solid 1px red'});
					return false;
				}
			
		}
*/
	
return true;
});

});