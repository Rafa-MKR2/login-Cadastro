
// Esconde formlario de Login, oculta botão de cadastro e Mostra formulario de recupera conta
	$('.message a').click(function(){
	   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
		$(".botaoCadastro").hide("fast");


	});

	// Retorna Botão de Cadastro ao exibir formulario de Login 
$(document).ready(function(){
    $(".logar").click(function(){
	$(".botaoCadastro").show("fast");
	 });
});
	
	
	
	
	// Chama Formulario de De Cadastro
$(document).ready(function(){
    $(".botaoCadastro").click(function(){	
	$(".botaoCadastro").hide("fast");
	$(".login").hide("fast");
	$(".cadastro").show(1000);
	$(".login").show();
	$(".botaoLogin").show();
		

	 });
});
	
	
	// Retorna Formulario de login
$(document).ready(function(){

   $(".botaoLogin").click(function(){
   
	event.preventDefault();
	$(".botaoLogin").hide("fast");
	$(".botaoCadastro").show("fast");
	$(".login").show("fast");
	$(".cadastro").hide(1000);
		

	 });
	 });
	
	
