<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html lang="en">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<style>
</style>
<script type="text/javascript">




	$(document).ready(function() {
		$("#areaRecuperarSenha").hide();
		$("#areaCadUser").hide();
		
		$("#lnkCadUser").click(function( event ) {
			event.preventDefault();
			$("#areaLogin").hide();
			$("#areaRecuperarSenha").hide();
			$("#areaCadUser").show();
		});
		
		$("#lnkRecuperarSenha").click(function( event ) {
			event.preventDefault();
			$("#areaLogin").hide();
			$("#areaRecuperarSenha").show();
			$("#areaCadUser").hide();
		});

		$("#btnCancelarRecuperarSenha").click(function( event ) {
			event.preventDefault();
			$("#areaLogin").show();
			$("#areaRecuperarSenha").hide();
			$("#areaCadUser").hide();
		});
		
		$("#btnCancelarCadUser").click(function( event ) {
			event.preventDefault();
			$("#areaLogin").show();
			$("#areaRecuperarSenha").hide();
			$("#areaCadUser").hide();
		});
		$("#btnLogin").click(function( event ) {
			event.preventDefault();
			
		});
		
		
		$("#cep").blur(function( event ) {
			event.preventDefault();
			let url = "https://viacep.com.br/ws/"+ $(this).val() +"/json/";
			$.get( url, function(data, status){
				$("#logradouro").val(data.logradouro );
				$("#complemento").val(data.complemento );
				$("#bairro").val(data.bairro );
				$("#municipio").val(data.localidade );
				$("#uf").val(data.uf );
			});
		});
	});

</script>
<head>
  <title>Cadastro do Usuário</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>
<body>

<div class="container mt-3" id="areaLogin">
  <h2>Autentiação do Usuário</h2>
  <form id="frmLogin">
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="mb-3">
      <label for="pwd">Senha:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="senha">
    </div>
    <button  id="btnLogin" type="submit" class="btn btn-primary">Entrar</button>
    <br>
    	<a href="" id="lnkRecuperarSenha" > Recuperar Senha </a>
    <br>
    <button  id="lnkCadUser"  type="button" class="btn btn-primary">Cadastrar-Se</button>
    
  </form>
</div>
<div class="container mt-3" id="areaCadUser">
  <h2>Cadastro do Usuário</h2>
  <form id="frmCadUser">
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>
  	<div class="mb-3 mt-3">
      <label for="cpf">cpf:</label>
      <input type="text" class="form-control" id="cpf" placeholder="Enter cpf" name="cpf">
    </div>
  	<div class="mb-3 mt-3">
      <label for="telefone">telefone:</label>
      <input type="text" class="form-control" id="telefone" placeholder="Enter telefone" name="telefone">
    </div>
    <div class="mb-3 mt-3">
      <label for="cep">cep:</label>
      <input type="text" class="form-control" id="cep" placeholder="Enter cep" name="cep">
    </div>
    <div class="mb-3 mt-3">
      <label for="logradouro">logradouro:</label>
      <input type="text" class="form-control" id="logradouro" placeholder="Enter logradouro" name="logradouro">
    </div>
    <div class="mb-3 mt-3">
      <label for="numero">numero:</label>
      <input type="text" class="form-control" id="numero" placeholder="Enter numero" name="numero">
    </div>
    <div class="mb-3 mt-3">
      <label for="complemento">complemento:</label>
      <input type="text" class="form-control" id="complemento" placeholder="Enter complemento" name="complemento">
    </div>
    <div class="mb-3 mt-3">
      <label for="bairro">bairro:</label>
      <input type="text" class="form-control" id="bairro" placeholder="Enter bairro" name="bairro">
    </div>
    <div class="mb-3 mt-3">
      <label for="municipio">municipio:</label>
      <input type="text" class="form-control" id="municipio" placeholder="Enter municipio" name="municipio">
    </div>
    <div class="mb-3 mt-3">
      <label for="uf">uf:</label>
      <input type="text" class="form-control" id="uf" placeholder="Enter uf" name="uf">
    </div>
    <button id="btnSalvarCadUser" type="submit" class="btn btn-primary">Salvar</button>
    <button id="btnCancelarCadUser" type="submit" class="btn btn-danger">Cancelar</button>
  </form>
</div>
<div class="container mt-3" id="areaRecuperarSenha">
  <h2>Lembrar Senha</h2>
  <form id="frmRecuperarSenha">
    <div class="mb-3 mt-3">
      <label for="email">Digite seu Email para enviar Nova Senha:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <button id="btnRecuperarSenha" type="submit" class="btn btn-primary">Recuperar Senha</button>
    <button id="btnCancelarRecuperarSenha" type="submit" class="btn btn-danger">Cancelar</button>
  </form>
</div>

</body>
</html>
