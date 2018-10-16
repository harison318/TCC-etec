<?php
	include_once("includes/conexao.php");
	include_once("includes/texto.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
		<meta charset="utf-8">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <link rel="shortcut icon" href="imagens/icone_etec.png" >
		<link rel="stylesheet" href="css/bootstrap.min.css" >
		<link rel="stylesheet" href="css/fontawesome-all.css">
<title>Página dos Coordenadores</title>

</head>

<style>

@media (min-width: 576px){
	.botao{
		width: 70%;
	}
}

.botao{
		width: 24%;
	}

	        #chocolate{
	          position:absolute;
	          z-index:-1;
	          top:0;
	        }
	        .container{
	          width:40%;
	        }
	        .jumbotron{
	          margin-top: 200px;
	          margin-bottom: 1rem;
	          border-radius:1rem;
	          background-color: #007BFF;
	          color: #FFF;
	          width:50%;
	          height:auto;
	        }
	        @media (max-width: 576px) {
	          .jumbotron {
	            width: 100%;
	          }
	        }

	        .button {
	          margin-right: 10px;
	          margin-top: 10px;
	        }

	        .jumbotron{
	    			margin-top: 200px;
	    			margin-bottom: 1rem;
	    			border-radius:1rem;
	    			background-color: #007BFF;
	    			color: #FFF;
	    			width:50%;
	    			height:auto;
	    		}

	    		html {
	    		position: relative;
	    		min-height: 100%;
	    		}
	    		body {
	    		/* Margin do footer */
	    		margin-bottom: 270px;
	    		background-color: #c3c3c3;
	    		}
	    		footer{
	    		padding:0;
	    		}
	    		.footer {
	    		position: absolute;
	    		bottom: 0;
	    		width: 100%;
	    		/* Set the fixed height of the footer here */
	    		height: 270px;
	    		background-color: #3C3D3F;
	    		padding:0;
	    		}
	    		.nav-header{
	    		position:relative;
	    		width: 90%;
	    		height:40px;
	    		margin: 0 auto;
	    		}
	    		.nav-header::after{
	    		content:'';
	    		width: 100%;
	    		height:2px;
	    		background-color: #ccc;
	    		opacity:0.95;
	    		bottom:0;
	    		position:absolute;
	    		}
	    		.nav-body{
	    		position:relative;
	    		width: 90%;
	    		height:120px;
	    		margin: 0 auto;
	    		}
	    		.nav-body::after{
	    		content:'';
	    		width: 100%;
	    		height:2px;
	    		background-color: #ccc;
	    		opacity:0.95;
	    		bottom:0;
	    		position:absolute;
	    		}
	    		.nav-footer{
	    		width: 100%;
	    		height:40px;
	    		text-align:center;
	    		line-height: 40px;
	    		}
	    		#video{
	    		width:100%;
	    		height:300px;
	    		background-color:#343a40;
	    		}
	    		#noticia{
	    		width:100%;
	    		height:400px;
	    		background-color:#E0E0E0;
	    		}
	    		#colaborador{
	    		width:100%;
	    		height:200px;
	    		background-color: #1EAE98;
	    		}
	    		#curso{
	    		width:85%;
	    		height:auto;
	    		padding:0;
	    		margin-top: 5%;
	    		}
	    		.image-curso{
	    		width:100%;
	    		height:auto;
	    		}
	    		#fundo::after{
	    		content:'';
	    		position:absolute;
	    		width:50%;
	    		min-height: 70px;
	    		background-color:#fff;
	    		bottom:-35px;
	    		left:0;
	    		-ms-transform: skew(0deg, 15deg); /* IE 9 */
	    		-webkit-transform: skew(0deg, 15deg); /* Safari */
	    		transform: skew(0deg, 5deg);
	    		}
	    		#fundo::before{
	    		content:'';
	    		position:absolute;
	    		width:50%;
	    		min-height: 70px;
	    		background-color:#fff;
	    		bottom:-35px;
	    		right:0;
	    		-ms-transform: skew(0deg, -15deg); /* IE 9 */
	    		-webkit-transform: skew(0deg, -15deg); /* Safari */
	    		transform: skew(0deg, -5deg);
	    		}
	    		#fundo{
	    		margin-top: 89px;
	    		position:relative;
	    		min-height: 74vh;
	    		background-image: url("imagens/lab.jpg");
	    		background-size:cover;
	    		background-attachment: fixed;
	    		background-position: center center;
	    		}
	    		#fundo2::after{
	    		content:'';
	    		position:absolute;
	    		width:50%;
	    		min-height: 50px;
	    		background-color:#fff;
	    		top:-29px;
	    		left:0;
	    		-ms-transform: skew(0deg, 15deg); /* IE 9 */
	    		-webkit-transform: skew(0deg, 15deg); /* Safari */
	    		transform: skew(0deg, -3deg);
	    		}
	    		#fundo2::before{
	    		content:'';
	    		position:absolute;
	    		width:50%;
	    		min-height: 50px;
	    		background-color:#fff;
	    		top:-29px;
	    		right:0;
	    		-ms-transform: skew(0deg, -15deg); /* IE 9 */
	    		-webkit-transform: skew(0deg, -15deg); /* Safari */
	    		transform: skew(0deg, 3deg);
	    		}
	    		#fundo2{
	    		position:relative;
	    		min-height: 200px;
	    		background-color: #000;
	    		background-size:cover;
	    		background-attachment: fixed;
	    		background-position: center center;
	    		}
	    		.navbar-header{
	    		width: 96%;
	    		margin-left: 2%;
	    		margin-right: 2%;
	    		}
	    		.navbar-body{
	    		width: 96%;
	    		display: inline-block;
	    		padding: 0;
	    		margin-left: 2%;
	    		margin-right: 2%;
	    		}
	    		.menu{
	    		margin-bottom: 0;
	    		padding: 0px;
	    		margin-left: auto;
	    		margin-right: auto;
	    		}
	    		.menu-item{
	    		display: inline-block;
	    		margin: 0;
	    		margin-right: 1%;
	    		padding: 10px;
	    		}
	    		.menu-item:hover{
	    		border-bottom: green 1px solid;
	    		}
	    		.menu-link{
	    		padding: 0;
	    		color: #fff;
	    		text-decoration: none;
	    		}
	    		.active{
	    		font-weight: bold;
	    		border-bottom: green 1px solid;
	    		}
	    		.menu-link:hover{
	    		text-decoration: none;
	    		color: #fff;
	    		}
	    		.bg-black{
	    		background-color: #005200;
	    		}
	    		.form-right{
	    		float: right;
	    		}
	    		.corverdinha{
	    		background-color: #006634;
	    		color: #f5f5f5;
	        .custom-select {
	      position: relative;
	      font-family: Arial;
	    }
	    .custom-select select {
	    display: none;
	    }

</style>
<body>
<nav class="navbar fixed-top navbar-dark corverdinha p-0 pt-1">
	<div class="navbar-header">
		<a class="navbar-brand" href="#">Etec de Itanhaém</a>
		<form class="form-right form-inline my-2 my-lg-0">
			<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		</form>
	</div>
	<div class="navbar-body">
		<ul class="menu">
			<li class="menu-item active">
				<a class="menu-link" href="#">Home</a>
			</li>
			<li class="menu-item">
				<a class="menu-link" href="#">A escola</a>
			</li>
			<li class="menu-item">
				<a class="menu-link" href="#">Eventos</a>
			</li>
			<li class="menu-item">
				<a class="menu-link" href="#">Cursos</a>
			</li>
			<li class="menu-item">
				<a class="menu-link" href="#">Vestibulinho</a>
			</li>
			<li class="menu-item">
				<a class="menu-link" href="#">Corpo docente</a>
			</li>
			<li class="menu-item">
				<a class="menu-link" href="#">Coordenação</a>
			</li>
			<li class="menu-item">
				<a class="menu-link" href="#">Direção</a>
			</li>
			<li class="menu-item">
				<a class="menu-link" href="#">Secretaria</a>
			</li>
			<li class="menu-item">
				<a class="menu-link" href="#">TCC</a>
			</li>
		</ul>
	</div>
</nav>
<div class="container-fluid jumbotron corverdinha mx-sm-auto">
	<div class="row justify-content-around">
		<div class="col-md-3 col-12 mt-2 ml-auto pr-0">
				<a href="cadastrar_coordenador.php" class="btn btn-outline-success form-control my-2 my-sm-0" style="padding:2px; margin-bottom:5px;">Cadastrar Coordenador</a>
		</div>

		<div class="col-md-3 col-12 mt-2 mx-md-auto pr-0">
			<a href="cadastrar_horario.php" class="btn btn-outline-success form-control my-2 my-sm-0" style="padding:2px; margin-bottom:5px;">Cadastrar Horário</a>
		</div>
	</div>
	<div id="list" class="row" style="margin-top:5px;">
		<div class="table-responsive col-md-12">
			<table class="table table-striped" cellspacing="0" cellpadding="0">
				<thead>
					<tr>
						<th>CD</th>
						<th>Coordenador</th>
						<th class="actions">Ações</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<!--Mostrar conteúdo da tabela-->
					 	<?php
							$select="SELECT * FROM `tb_usuario` WHERE `id_tipo` = 1 ORDER BY  `cd_usuario` ASC ";
								if ($con=$mysqli->query($select)) {
									while ($obj= $con->fetch_object()) {
										echo  "<td>".$obj->cd_usuario."</td>";
										echo "<td>".$obj->nm_usuario." ".$obj->nm_sobrenome."</td>";
										echo '<td> <a href="coordenador.php?view=0&itens='.$obj->cd_usuario.'" TYPE="BUTTON" NAME="submit" class="btn btn-success btn-xs botao" >Visualizar</a>';
										echo ' <a href="alterar_coordenador.php?edit=0&itens='.$obj->cd_usuario.'" TYPE="BUTTON" NAME="submit" class="btn btn-warning btn-xs botao">Editar</a>';
										echo ' <a href="alterar_horario.php?edit=0&itens='.$obj->cd_usuario.'" TYPE="BUTTON" NAME="submit" class="btn btn-warning btn-xs botao">Editar Horário</a>';
										echo ' <a class="btn btn-danger btn-xs botao" style="color:white;" data-toggle="modal" data-target="#delete-modal';
										echo $obj->cd_usuario.'">Excluir</a>';
										echo '</td>
										</tr>';
									}
								}else{
										echo "Não há nenhum item cadastrado!";
								}
						?>
					</tr>
				</tbody>
			</table>

<?php
    $selectmodal="SELECT * FROM `tb_usuario`";
    if ($con=$mysqli->query($selectmodal)) {
    while ($obj= $con->fetch_object()) {

echo '<div class="modal fade" id="delete-modal';
echo $obj->cd_usuario . '" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content corverdinha">
      <div class="modal-header">
        <h4 class="modal-title" id="modalLabel">Excluir Coordenador</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        Deseja realmente excluir este coordenador?
      </div>
      <div class="modal-footer">
        <a href="excluir_coordenador.php?cd=';
        echo $obj->cd_usuario . ' " class="btn btn-primary corverdinha">Sim</a>
    <button type="button" class="btn btn-default " data-dismiss="modal">N&atilde;o</button>
      </div>
    </div>
  </div>
</div>';
        }
    }
    ?>

		<!-- JavaScript -->
		<script src="js/jquery.min.js" ></script>
		<script src="js/popper.min.js" ></script>
		<script src="js/bootstrap.min.js" ></script>
		<script src="js/slick.min.js" ></script>
		<script src="js/per.js"></script>


	</body>
</html>
