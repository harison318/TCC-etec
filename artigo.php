<?php
	include_once("includes/conexao.php");
  $itens = $_GET['itens'];
	$ds_artigo= "SELECT * FROM `tb_artigo` WHERE cd_artigo = $itens ";
	if($artigo = $mysqli->query($ds_artigo)){
	}else {
		echo "Não foi!!!!";
	}
?>
<!DOCTYPE html>
<html lang="pt-br">

    <meta charset="utf-8">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" >
    <link rel="stylesheet" href="css/fontawesome.css" >
    <link rel="stylesheet" href="css/slick.css" >
    <link rel="stylesheet" href="css/slick-theme.css" >


    <style>

.container{
  background-color: #FFFFFF;
  margin-bottom: 1rem;
  border-radius:0rem;
  color:#343a40;
}

table{
  margin: 0 0 0 0;
}
@media (min-width: 990px) {
  #foto_artigo {
    width: 40%;
    height: auto;
    float:left;
    position:relative;
  }
}
#logo{
	width:22%;
	height:auto;
	position:absolute;
	top:1%;
	left: 3%;
}
#div_nm_artigo{
	width: 100%;
	height: auto;
}
    </style>
  </head>
  <body class="bg-light">
		<div class="fluid-container">
			<div id="logo">
				<img src="imagens/logo-vetorizado.png" class="img-fluid">
			</div>
			<img src="imagens/header.png" class="img-fluid">
		</div>

      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">A Escola</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#">Eventos</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">Cursos</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">Vestibulinho</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">Corpo Docente</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">Coordenação</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">Direção</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">Secretaria</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">TCC</a>
      </li>
    </ul>
  </div>
</nav>

	<?php
	while($obj = $artigo->fetch_object()){
	?>
<div class="container">
	<div class="mx-auto pt-3 pb-5 text-center" id="div_nm_artigo" >
		<p id="nm_artigo" class="h1">
			<?php
				echo $obj->nm_artigo;
        echo '<title>'.$obj->nm_artigo.'</title>';
			?>
		</p>
	</div>
  <?php
	echo '<div class="mr-sm-5 mt-5 mt-sm-0 mr-0" id="foto_artigo"  ><img class="img-fluid" 
    src="'.$obj->nm_foto.'"></div>';
?>



	<div align="justify">
		<?php
				echo $obj->ds_conteudo;
		?>
	</div>
</div>
	<?php
	}
	?>


    <!-- JavaScript -->
    <script src="js/jquery.min.js" ></script>
    <script src="js/popper.min.js" ></script>
    <script src="js/bootstrap.min.js" ></script>
    <script src="js/slick.min.js" ></script>

    <script>
        $(document).ready(function(){
          alert("nfjfjfg");
        }
    </script>

  </body>
</html>
