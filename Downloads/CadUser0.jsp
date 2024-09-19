<%@ page language="java" contentType="text/html; charset=UTF-8" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link 		href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script 	src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script 	src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready( function(){
			
			$("input").keypress(function( event ){
				if(event.keyCode == 13 ){ // ( 13 = "\n" = ENTER
					event.preventDefault();
					$(this).blur();
					//alert( $(this).attr("name") );
				}	
			});
				
			$("#cep").blur(function( event ){
				
				let cepStr = $(this).val();
				let url = "https://viacep.com.br/ws/"+cepStr+"/json/";
				
				if( cepStr.trim().replace("-","").match(/^[\d]{8}$/g) ){
					$.get( url, function( data, status ) {
						
						if ( data.erro == true ){
							$("#msgCep").html(" CEP não Existe! ");
							$("#msgCep").css("color", "red");	
							clearAddress();
						}else{
							$("#logradouro").val(data.logradouro);
							$("#complemento").val(data.complemento);
							$("#bairro").val(data.bairro);
							$("#localidade").val(data.localidade);
							$("#uf").val(data.uf);
						}
						
						console.log( data );	
					} );
					$("#msgCep").html("");
					$("#msgCep").css("color", "black");
				}else{
					clearAddress();
					$("#msgCep").html(" CEP Inválido! ");
					$("#msgCep").css("color", "red");
				}	
			});
			
			$("#frmCadUser").submit(function( event ){
				event.preventDefault();
				let url  = "cadUserPost.jsp";
				let dataForm  = $(this).serialize();
				$.post(url, dataForm, function( data, status ) {
					
				})
			});
			
		});
	
		function clearAddress() {
			$("#logradouro").val("");
			$("#complemento").val("");
			$("#bairro").val("");
			$("#localidade").val("");
			$("#uf").val("");
		}
	</script>
	<style type="text/css">
	
	body{
		background-color: rgb(200,200,200);
	}
	.areaCadUser{
		width: 50%;
		margin-left: 25%;
	}
	</style>
</head>
<body>
<div class="container mt-3 areaCadUser">
  <h3>Cadastro de Usuário</h3>
  <form id="frmCadUser">

    <div class="mb-3 mt-3">
      <label for="nome">Nome:</label>
      <input type="text" class="form-control" id="nome" placeholder="Enter nome" name="nome">
    </div>

    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="mb-3">
      <label for="senha">Senha:</label>
      <input type="password" class="form-control" id="senha" placeholder="Enter password" name="senha">
    </div>
    <div class="mb-3 mt-3">
      <label for="telefone">Telefone:</label>
      <input type="text" class="form-control" id="telefone" placeholder="Enter telefone" name="telefone">
    </div> 
	<div class="mb-3 mt-3">
	  <label for="cep">CEP:</label>
      <input type="text" class="form-control" id="cep" placeholder="Enter cep" name="cep">
      <div id="msgCep"></div>
    </div> 
    <div class="mb-3 mt-3">
      <label for="logradouro">Logradouro:</label>
      <input type="text" class="form-control" id="logradouro" placeholder="Enter logradouro" name="logradouro">
    </div> 
    <div class="mb-3 mt-3">
      <label for="complemento">Complemento:</label>
      <input type="text" class="form-control" id="complemento" placeholder="Enter complemento" name="complemento">
    </div> 
    <div class="mb-3 mt-3">
      <label for="bairro">Bairro:</label>
      <input type="text" class="form-control" id="bairro" placeholder="Enter bairro" name="bairro">
    </div> 
    <div class="mb-3 mt-3">
      <label for="localidade">Cidade:</label>
      <input type="text" class="form-control" id="localidade" placeholder="Enter localidade" name="localidade">
    </div> 
    <div class="mb-3 mt-3">
      <label for="uf">UF:</label>
      <input type="text" class="form-control" id="uf" placeholder="Enter UF" name="uf">
    </div>    

    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
</div>

<script>

</script>
</body>
</html>