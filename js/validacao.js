
	function validaCadastro(event){
		var senha = document.formeLog.senhaCad.value.length;
	
	if(document.formeLog.senhaCad.value.length<6){
			console.log(senha);
			document.querySelector('#aviso').innerHTML ="<div class='alert alert-danger' role='alert'>"+
			"<span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span><span class='sr-only'>"+
			"Error:</span>  Senha Deve Contér 6 Caracteres ou mais</div>";
			setTimeout(function(){document.querySelector('#aviso').innerHTML =""; }, 6000);
			return false;
		}
		
		
		
	if(senha>=6){
		event.preventDefault();
		return true;
	}
		}
		
		
		
		
	
  
	
	