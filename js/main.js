
///////////////////////////////////////////
////////// DocumentReady
///////////////////////////////////////////

$(function(){ 

	var objJson = {
			"employees": [
					{ "firstName":"John" , "lastName":"Doe" }, 
					{ "firstName":"Anna" , "lastName":"Smith" }, 
					{ "firstName":"Peter" , "lastName":"Jones" }
					]
		}

function EnviarDatosProducto(){

$.post("models/datos.php",{json:objJson},function(data){
$("#mensaje").html(data);

});

}

EnviarDatosProducto();
	
});



