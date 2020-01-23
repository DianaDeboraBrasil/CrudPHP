function formatanome(){

   var nome = document.getElementById("nome").value;
  

   nome = nome.toLowerCase().replace(/(?:^|\s)\S/g, function(capitalize) { return capitalize.toUpperCase(); });
  
	var PreposM = ["Da", "De", "Do","Das","Dos","A", "E"];
   	var prepos = ["da", "de", "do","das","dos","a", "e"];

   for (var i = PreposM.length - 1; i >= 0; i--) {
     nome = nome.replace(RegExp("\\b" + PreposM[i].replace(/[-\/\\^$*+?.()|[\]{}]/g, '\\$&') + "\\b", "g"), prepos[i]);
   }
  

document.getElementById("nome").value = nome;

}

function formataend(){

   var nome = document.getElementById("endereco").value;
  

   nome = nome.toLowerCase().replace(/(?:^|\s)\S/g, function(capitalize) { return capitalize.toUpperCase(); });
  
	var PreposM = ["Da", "De", "Do","Das","Dos","A", "E"];
   	var prepos = ["da", "de", "do","das","dos","a", "e"];

   for (var i = PreposM.length - 1; i >= 0; i--) {
     nome = nome.replace(RegExp("\\b" + PreposM[i].replace(/[-\/\\^$*+?.()|[\]{}]/g, '\\$&') + "\\b", "g"), prepos[i]);
   }
  

document.getElementById("endereco").value = nome;

}

function formatabairro(){

   var nome = document.getElementById("bairro").value;
  
   nome = nome.toLowerCase().replace(/(?:^|\s)\S/g, function(capitalize) { return capitalize.toUpperCase(); });
  
	var PreposM = ["Da", "De", "Do","Das","Dos","A", "E"];
   	var prepos = ["da", "de", "do","das","dos","a", "e"];

   for (var i = PreposM.length - 1; i >= 0; i--) {
     nome = nome.replace(RegExp("\\b" + PreposM[i].replace(/[-\/\\^$*+?.()|[\]{}]/g, '\\$&') + "\\b", "g"), prepos[i]);
   }
  

document.getElementById("bairro").value = nome;

}


function formatacomplemento(){

   var nome = document.getElementById("complemento").value;
  
   nome = nome.toLowerCase().replace(/(?:^|\s)\S/g, function(capitalize) { return capitalize.toUpperCase(); });
  
	var PreposM = ["Da", "De", "Do","Das","Dos","A", "E"];
   	var prepos = ["da", "de", "do","das","dos","a", "e"];

   for (var i = PreposM.length - 1; i >= 0; i--) {
     nome = nome.replace(RegExp("\\b" + PreposM[i].replace(/[-\/\\^$*+?.()|[\]{}]/g, '\\$&') + "\\b", "g"), prepos[i]);
   }
  

document.getElementById("complemento").value = nome;

}


function mensagem(value){
	if(value == "NÃO"){
	var body = document.getElementsByClassName('body');
	body[0].style.display = 'none';
	var msg = document.getElementsByClassName('msg');
	msg[0].style.display = 'block';
	
  }
}

function valida(){
	var email = document.getElementById("email").value;
	email = email.toLowerCase();
		
	if(email.search(/@/) != -1 && email.search(/./) != -1){
		document.getElementById("email").value = email;
		}
	else{
		alert('Digite um e-mail válido');
	}
}

















