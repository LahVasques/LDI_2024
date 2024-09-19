<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link 		href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script 	src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script 	src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

	<style type="text/css">
	   
	   body{
	       align-items: center;
	       text-align: center;
	       background-color: gray;
	   }
	   #areaCadUser{
	       width: 50%;
	       text-align: left;
	       margin-left: 25%;
	   }
	   form{
	       text-align: justify;
	   }
	</style>
</head>
<body>
<div id="areaCadUser">
    <form id="frmCadUser">
        <div class="mb-3 mt-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" class="form-control" id="nome" placeholder="" name="nome">
        </div>
        <div class="mb-3 mt-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>
        <div class="mb-3 mt-3">
            <label for="senha" class="form-label">Senha:</label>
            <input type="text" class="form-control" id="senha" placeholder="" name="senha">
        </div>
        <div class="mb-3 mt-3">
            <label for="cep" class="form-label">CEP:</label>
            <input type="text" class="form-control" id="cep" placeholder="" name="cep">
        </div>
        <div class="mb-3 mt-3">
            <label for="logradouro" class="form-label">logradouro:</label>
            <input type="text" class="form-control" id="logradouro" placeholder="" name="logradouro">
        </div>  
        <div class="mb-3 mt-3">
            <label for="complemento" class="form-label">complemento:</label>
            <input type="text" class="form-control" id="complemento" placeholder="" name="complemento">
        </div>    
        <div class="mb-3 mt-3">
            <label for="bairro" class="form-label">bairro:</label>
            <input type="text" class="form-control" id="bairro" placeholder="" name="bairro">
        </div>   
        <div class="mb-3 mt-3">
            <label for="localidade" class="form-label">localidade:</label>
            <input type="text" class="form-control" id="localidade" placeholder="" name="localidade">
        </div>   
        <div class="mb-3 mt-3">
            <label for="uf" class="form-label">uf:</label>
            <input type="text" class="form-control" id="uf" placeholder="" name="uf">
        </div>     
    	<button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div> 
	<script type="text/javascript">
		$(document).ready(function(){


			$("input").keypress(function( event ){
				if (event.keyCode === 13 ){
					event.preventDefault();
					$(this).blur();
				} 
				
			});

			
			$("#frmCadUser").submit(function( event ){
				event.preventDefault();
			});
			
			$("#cep").blur(function( event ){
				let cepQuery = "https://viacep.com.br/ws/"+ $("#cep").val() +"/json/";
                $.get( cepQuery , function(data, status){

					if(status == "success"){
						// alert("Data: " + JSON.stringify(data)+ "\nStatus: " + status);
						$("#logradouro").val(data.logradouro);
						$("#complemento").val(data.complemento);
						$("#bairro").val(data.bairro);
						$("#localidade").val(data.localidade);
						$("#uf").val(data.uf);						
					}else{
						console.log("Erro ao consultar CEP!");
					}
                	
                });
			});
			
		});
	</script>
</body>
</html>
