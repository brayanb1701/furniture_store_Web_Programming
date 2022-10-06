function validarSiNumero(numero){
	expresion = /^([0-9])*$/;
    if (!expresion.test(numero.value)){
      alert("El valor " + numero.value + " no es un número");
      numero.value="";
			numero.focus();
	}
}
  
function soloLetras(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toString();
    letras = " áéíóúabcdefghijklmnñopqrstuvwxyzÁÉÍÓÚABCDEFGHIJKLMNÑOPQRSTUVWXYZ";//Se define todo el abecedario que se quiere que se muestre.
    especiales = [8, 37, 39, 46, 6]; //Es la validación del KeyCodes, que teclas recibe el campo de texto.

    tecla_especial = false
    for(var i in especiales) {
        if(key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }
	if(letras.indexOf(tecla) == -1 && !tecla_especial){
		alert('Tecla no aceptada');
        return false;
      }
}


function aMayusculas(obj){
    obj.value=obj.value.toUpperCase();
}

function verificaemail(obj){
var txtCorreo = obj.value;
if(!(/\S+@\S+\.\S+/.test(txtCorreo))){
			alert('ERROR: Debe escribir un correo válido');
			obj.value="";
			obj.focus();
			return false;
		}
}

function validarfecha(obj){ 
 
var datePat = /^(0[1-9]|1\d|2\d|3[1-2])\/(0[1-9]|1[0-2])\/\d{4}$/;
var matchArray =  obj.value.match(datePat); 

    if (matchArray == null) {
    	alert("fecha invalida formato dd/mm/aaaa");  
    	obj.value="";
			obj.focus();   
    }
} 


function vaciotexto(obj){
	var miCampoTexto = obj.value;
 //la condición
 if (miCampoTexto.length == 0 || /^\s+$/.test(miCampoTexto) || miCampoTexto=="" || miCampoTexto==null) {
     alert('No ha llenado todos los campos!');
	 
     return false;
	 
 }
 else return true;
	
}

function verificacodigo(obj){
		validarSiNumero(obj);
		if(obj.value.length > 10){
		   alert("El codigo debe ser 10 digitos maximo");
		   	obj.value="";
			
			obj.focus();
		}
}
function verificavalor(obj){
		validarSiNumero(obj);
		if(obj.value.length > 10){
		   alert("El valor es muy grande");
		  	 obj.value="";
			
			obj.focus();
		}
}
function verificaimpuesto(obj){
		validarSiNumero(obj);
		if(obj.value.length > 25){
		   alert("El valor es muy grande");
		   obj.value="";
			
			obj.focus();
		}
}
function verificatotal(obj){
		validarSiNumero(obj);
		if(obj.value.length > 25){
		   alert("El valor es muy grande");
		   obj.value="";
			
			obj.focus();
		}
}

function verificacantidad(obj){
		validarSiNumero(obj);
}

function verificatel(obj){
		validarSiNumero(obj);
		if(obj.value.length!=7){
		   alert("El telefono debe tener 7 digitos");
		   obj.value="";
			
			obj.focus();
		}
}

function verificacel(obj){
		validarSiNumero(obj);
		if(obj.value.length!=10){
		   alert("El celular debe tener 10 digitos");
		   obj.value="";
			obj.focus();
		}
}


function verificar_enviar(obj){
	var inputs = document.getElementsByTagName('input');
	
	for(var i=0; i<inputs.length; i++){
		first = vaciotexto(inputs[i]);
		if(!first){
			return false;
			break;
		}
	}	
	genero=document.getElementById('genero').selectedIndex;
	municipio=document.getElementById('municipio').selectedIndex;

	
	if(genero==0||genero==null){
		alert("Falta seleccionar una opcion");
	
		return false;
	}
	if(municipio==0 ||municipio==null){
		alert("Falta seleccionar una opcion");
		return false;
	}
	

	
		return true;
		
	
}


function verificar_enviar_s(obj){
	var inputs = document.getElementsByTagName('input');
	
	for(var i=0; i<inputs.length; i++){
		first = vaciotexto(inputs[i]);
		if(!first){
			return false;
			break;
		}
	}	
	
		return true;
		
	
}


function verificar_enviar1(obj){
	var inputs = document.getElementsByTagName('input');
	
	for(var i=0; i<inputs.length; i++){
		first = vaciotexto(inputs[i]);
		if(!first){
		   
			return false;
			break;
		}
	}	

		tipo_derivado=document.getElementById('tipo_derivado').selectedIndex;
	

	
		if(tipo_derivado==0 ||tipo_derivado==null ){
		alert("Falta seleccionar una opcion");
		return false;
	}		

		return true;
	
}

function verificar_enviar2(obj){
	var inputs = document.getElementsByTagName('input');
	
	for(var i=0; i<inputs.length; i++){
		first = vaciotexto(inputs[i]);
		if(!first){
		   
			return false;
			break;
		}
	}	

		tipo_producto=document.getElementById('tipo_producto').selectedIndex;
		tipo_derivado=document.getElementById('tipo_derivado').selectedIndex;
		color_madera=document.getElementById('color_madera').selectedIndex;
	

	
		if(tipo_producto==0 ||tipo_producto==null ){
		alert("Falta seleccionar una opcion");
		return false;
	}
		if(tipo_derivado==0 ||tipo_derivado==null ){
		alert("Falta seleccionar una opcion");
		return false;
	}
		if(color_madera==0 ||color_madera==null ){
		alert("Falta seleccionar una opcion");
		return false;
	}	

		return true;
	
}




function verificar_enviar4(obj){
	var inputs = document.getElementsByTagName('input');
	
	for(var i=0; i<inputs.length; i++){
		first = vaciotexto(inputs[i]);
		if(!first){
		   
			return false;
			break;
		}
	}	

		factura=document.getElementById('factura').selectedIndex;
	

	
		if(factura==0 ||factura==null ){
		alert("Falta seleccionar una opcion");
		return false;
	}		

		return true;
	
}




function verificar_enviar5(obj){
	var inputs = document.getElementsByTagName('input');
	
	for(var i=0; i<inputs.length; i++){
		first = vaciotexto(inputs[i]);
		if(!first){
		   
			return false;
			break;
		}
	}	
		codigotiposerv=document.getElementById('codigotiposerv').selectedIndex;
		factura=document.getElementById('factura').selectedIndex;
		codigoespecialidad=document.getElementById('codigoespecialidad').selectedIndex;

		if(codigotiposerv==0 ||codigotiposerv==null ){
		alert("Falta seleccionar una opcion");
		return false;
	}
		if(factura==0 ||factura==null ){
		alert("Falta seleccionar una opcion");
		return false;
	}		
		if(codigoespecialidad==0 ||codigoespecialidad==null ){
		alert("Falta seleccionar una opcion");
		return false;
	}	
		return true;
	
}


