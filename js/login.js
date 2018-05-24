
	let logado = '../php/profile.php';
	
	

function logarPagina(){
		
	var consultar = new XMLHttpRequest();
		
		consultar.open('POST',logado,true);
		consultar.onreadystatechange = confirme;
		consultar.send(null);
	}
	
	logarPagina();


		 function confirme(e){
		
		if(e.target.readyState == 4){
			
			if(e.target.status == 200){
				
				document.getElementById('body').innerHTML = e.target.responseText;
				
			}else
				
			if(e.target.status == 404){
				
			document.getElementById('body').innerHTML = '<h2>Error! tivermos problema ao consultar servidor</h2>';

			}
			
		}
		
		}
	
	