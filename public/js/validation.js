$(document).ready(function() { 
	$("#cedula").keyup(function() 
	{
		$("#cedula").parent('div').children('.message').remove();
		temp = true;
		if (temp == true && trimDato($('#cedula'),"cedula") == false){
			temp = false;
		}

		if (temp == true && onlyNumbers($('#cedula'), "cedula") == false)
		{
			temp = false;
		}

		if (temp == true && lengthCedula($('#cedula'), "cedula") == false)
		{
			temp = false;
		}
	});

	$("#cedula").keypress(function(tecla) 
	{
		if(tecla.charCode < 48 || tecla.charCode > 57) return false;

	});
	 
	$("#name").keyup(function() 
	{
		$("#name").parent('div').children('.message').remove();
		temp = true;
		if (temp == true && trimDato($('#name'),"Name") == false){
			temp = false;
		}

		if (temp == true && onlyLetters($('#name'), "Name") == false)
		{
			temp = false;
		}
	}); 
	
	$("#last_name").keyup(function() 
	{
		$("#last_name").parent('div').children('.message').remove();
		temp = true;
		if (temp == true && trimDato($('#last_name'),"last_Name") == false){
			temp = false;
		}

		if (temp == true && onlyLetters($('#last_name'), "last_Name") == false)
		{
			temp = false;
		}
	});

	$("#phone_number").keyup(function() 
	{
		$("#phone_number").parent('div').children('.message').remove();
		temp = true;
		if (temp == true && trimDato($('#phone_number'),"phone_number") == false){
			temp = false;
		}

		if (temp == true && onlyNumbers($('#phone_number'), "phone_number") == false)
		{
			temp = false;
		}

		if (temp == true && lengthPhoneNumbers($('#phone_number'), "phone_number") == false)
		{
			temp = false;
		}
	});

	$("#phone_number").keypress(function(tecla) 
	{
		if(tecla.charCode < 48 || tecla.charCode > 57) return false;

	});

	$("#authorized_by").keyup(function() 
	{
		$("#authorized_by").parent('div').children('.message').remove();
		temp = true;
		if (temp == true && trimDato($('#authorized_by'),"authorized_by") == false){
			temp = false;
		}

		if (temp == true && onlyLetters($('#authorized_by'), "authorized_by") == false)
		{
			temp = false;
		}
	});

	$("#floor_description").keyup(function() 
	{
		$("#floor_description").parent('div').children('.message').remove();
		temp = true;
		if (temp == true && trimDato($('#floor_description'),"floor_description") == false){
			temp = false;
		}

		if (temp == true && onlyNumbers($('#floor_description'), "floor_description") == false)
		{
			temp = false;
		}
	});

	$("#person_visit").keyup(function() 
	{
		$("#person_visit").parent('div').children('.message').remove();
		temp = true;
		if (temp == true && trimDato($('#person_visit'),"person_visit") == false){
			temp = false;
		}

		if (temp == true && onlyLetters($('#person_visit'), "person_visit") == false)
		{
			temp = false;
		}
	});

	$("#received_by").keyup(function() 
	{
		$("#received_by").parent('div').children('.message').remove();
		temp = true;
		if (temp == true && trimDato($('#received_by'),"received_by") == false){
			temp = false;
		}

		if (temp == true && onlyLetters($('#received_by'), "received_by") == false)
		{
			temp = false;
		}
	});

});

function trimDato(obj,nombre)
{
	if(obj.val().trim() ==  '')
	{
		CreateMsj("El campo esta vacio.", obj);
		edgeError (obj,true);
		obj.focus();
		return false;
	}else{
		edgeError (obj,false);
	}
}	

function lengthCedula(obj,nombre) 
{
	//"La longitud de la cédula debe ser de 10 digitos"
	if (((obj.val().length) < 6) || ((obj.val().length) > 8)) 
	{
		CreateMsj("La longitud debe ser de 6 a 8 digitos.", obj);  
		edgeError (obj,true);
		obj.focus();
		return false;       		    
	}else {
		edgeError (obj,false);
	}
}

function lengthPhoneNumbers(obj,nombre) 
{
	//"La longitud de la cédula debe ser de 10 digitos"
	if (((obj.val().length) < 7) || ((obj.val().length) > 7)) 
	{
		CreateMsj("La longitud debe ser de 7 digitos.", obj);  
		edgeError (obj,true);
		obj.focus();
		return false;       		    
	}else {
		edgeError (obj,false);
	}
}

function onlyNumbers(obj,nombre) 
{
	var intRegex =/^[0-9]+$/;
	if (!obj.val().trim().match(intRegex))
	{
		CreateMsj("Solo acepta numeros.", obj);  
		edgeError (obj,true);
		obj.focus();
		return false;       		    
	}else {
		edgeError (obj,false);
	}
}

function onlyLetters(obj,nombre) 
{
	var intRegex =/^[a-z A-Z ñ Ñ á é í ó ú Á É Í Ó Ú ]+$/;
	if (!obj.val().trim().match(intRegex)) 
	{
	CreateMsj("Solo acepta letras.", obj);  
	edgeError (obj,true);
	obj.focus();
	return false;       		    
	}else {
		edgeError (obj,false);
	}
}

function edgeError(obj,condicion)
{
	if (condicion)
	{
		obj.css({
		'border' : '1px dashed #D41F1F',
		});
	}else{	
		obj.css({
		'border' : '1px solid #A9A7A7',
		});
	}
}

function CreateMsj(message, obj)
{
	if (obj.parent('div').children('.ui-datepicker-trigger').html() != undefined)
	{
		obj.parent('div').children('.ui-datepicker-trigger').after("<div class='message'>"+message+"</div>");
	}else{
		obj.after("<div class='message'>"+message+"</div>");
	}
}	

function onlyText(string){//solo letras y numeros
	var out = '';
	//Se añaden las letras validas
	var filtro = 'abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ áéíóúÁÉÍÓÚ';//Caracteres validos

	for (var i=0; i<string.length; i++)
	   if (filtro.indexOf(string.charAt(i)) != -1) 
	     out += string.charAt(i);
	return out;
}

function onlyNumber(string){//solo letras y numeros
	var out = '';
	//Se añaden las letras validas
	var filtro = '0123456789';//Caracteres validos

	for (var i=0; i<string.length; i++)
	   if (filtro.indexOf(string.charAt(i)) != -1) 
	     out += string.charAt(i);
	return out;
}