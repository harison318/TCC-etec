<?php
	include_once("includes/conexao.php");
  $itens = $_GET['itens'];
	$ds_avaliacao= "SELECT * FROM `tb_calendario` WHERE cd_calendario = $itens ";
	if($avaliacao = $mysqli->query($ds_avaliacao)){
	}else {
		echo "Ocorreu um erro!";
	}
?>
<!DOCTYPE html>
<html lang="pt-br">  
  <head>
  	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="imagens/icone_etec.png">
    <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/fontawesome-all.css" >
  </head>
  <body>	
		<?php
			while($obj = $avaliacao->fetch_object()){
		?>
		<div class="container jumbotron corverdinha mx-sm-auto">
			<div class="mx-auto pt-3 pb-5 text-center" id="div_nm_artigo">
				<p id="nm_artigo" class="h1">
					<?php
						echo $obj->nm_tipo.': ';
        		echo '<title>'.$obj->nm_tipo.'</title>';
        		echo $obj->ds_conteudo.'<br>';
        		echo $obj->dt_inicio;
					?>
				</p>
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
  </body>
</html>
