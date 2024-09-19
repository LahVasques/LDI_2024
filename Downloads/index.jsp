<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
<head>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
	<style type="text/css">
		#main{
			height: 98vh;
			margin-top: 1vh;
			width:  98vw;
			float: left;
			margin-left: 1vw;
			background-color: gray;
		}
		#topDiv{
			height: 22%;
			margin-top: 1%;
			width:  98%;
			float: left;
			margin-left: 1%;
			background-color: yellow; 
		}
		#middleDiv{
			height: 49%;
			margin-top: 1%;
			width:  98%;
			float: left;
			margin-left: 1%;
			background-color: green;	
			overflow: auto;	
		}
		#leftDiv{
			height: 96%;
			margin-top: 1%;
			width:  48%;
			min-width: 400px;
			float: left;
			margin-left: 1%;
			background-color: fuchsia;		
		}
		#rightDiv{
			height: 96%;
			margin-top: 1%;
			width:  48%;
			min-width: 400px;
			float: left;
			margin-left: 1%;
			background-color: orange;	
			
		}
		#bottonDiv{
			height: 20%;
			margin-top: 1%;
			width:  98%;
			float: left;
			margin-left: 1%;
			background-color: blue;
			z-index: 99;
		}		
		
	</style>
	<script type="text/javascript">
		$(document).ready( function () {
			$("#btnInicio").click(function() {
				$("#leftDiv").load("leftArea.jsp");
				$("#rightDiv").load("rightArea.jsp");
				$("#bottonDiv").load("bottonArea.jsp");
			});
		});
	</script>
</head>
<body>

	<div id="main">
		<div id="topDiv">
			topDiv
			<button id="btnInicio" class="btn btn-primary"> Apresentar Conteúdo </button>
		</div>
		<div id="middleDiv">
			<div id="leftDiv">leftDiv</div>
			<div id="rightDiv">rightDiv</div>
		</div>
		<div id="bottonDiv">bottonDiv</div>
	</div>

</body>
</html>