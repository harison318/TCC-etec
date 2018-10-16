<?php
	include_once("includes/conexao.php");
  $itens = $_GET['itens'];
	$select0= "SELECT * FROM `tb_usuario` WHERE cd_usuario = $itens and id_tipo = 1 ";
	if($coordenador = $mysqli->query($select0)){
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
    <link rel="stylesheet" href="css/bootstrap.min.css" >
	<link rel="stylesheet" href="css/fontawesome-all.css">


    <style>

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

		}

table{
  margin: 0 0 0 0;
}
@media (min-width: 990px) {
  #foto_coordenador {
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
		<link rel="shortcut icon" href="imagens/icone_etec.png" >
  </head>
  <body class="bg-light">

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

	<?php
	while($obj = $coordenador->fetch_object()){
	?>
<div class="container" style="margin-top:100px;">
	<div class="mx-auto pt-3 pb-5 text-center" id="div_nm_artigo" >
		<p id="nm_artigo" class="h1">
			<?php
				echo $obj->nm_usuario;
        echo " ".$obj->nm_sobrenome;
        echo '<title>'.$obj->nm_usuario." ".$obj->nm_sobrenome.'</title>';
			?>
		</p>
	</div>
  <?php
	echo '<div class="mr-sm-5 mt-5 mt-sm-0 mr-0" id="foto_coordenador"  ><img class="img-fluid"
    src="'.$obj->nm_foto.'"></div>';
 echo '<div class="border" style="color: #fff; background-color: #212529;">';
  echo '<div class="row">
        Login: '.$obj->nm_login.'
        </div>';

  echo '<div class="row">
        Cargo: Coordenador';

	echo "</div>";
		?>
</div>
	<?php
	}
?>

<table class="table">
  <thead class="thead-dark text-center">
    <tr>
      <th scope="col text-center">Segunda-Feira</th>
      <th scope="col text-center">Terça-Feira</th>
      <th scope="col text-center">Quarta-Feira</th>
      <th scope="col text-center">Quinta-Feira</th>
      <th scope="col text-center">Sexta-Feira</th>
    </tr>
  </thead>

  <tbody>
<tr>
<?php
$select1= "SELECT * FROM `tb_horario_coordenador` WHERE `id_usuario` = $itens and nm_dia_semana = 'Segunda-feira'";
$select2= "SELECT * FROM `tb_horario_coordenador` WHERE `id_usuario` = $itens and nm_dia_semana = 'Terça-feira'";
$select3= "SELECT * FROM `tb_horario_coordenador` WHERE `id_usuario` = $itens and nm_dia_semana = 'Quarta-feira'";
$select4= "SELECT * FROM `tb_horario_coordenador` WHERE `id_usuario` = $itens and nm_dia_semana = 'Quinta-feira'";
$select5= "SELECT * FROM `tb_horario_coordenador` WHERE `id_usuario` = $itens and nm_dia_semana = 'Sexta-feira'";

  if ($con1=$mysqli->query($select1)) {
    $row1 =  $con1->num_rows;
  if ($row1 == 0) {
    echo '<th class="text-center">---</th>';
  }

  if ($row1 == 1) {
    if ($obj1= $con1->fetch_object()) {
    echo '<th class="text-center">'.$obj1->hr_entrada.' as '.$obj1->hr_saida.'</th>';
  }}

  if ($row1 >= 2) {
    echo '<th class="text-center">';
    while ($obj1= $con1->fetch_object()) {
    echo "$obj1->hr_entrada as $obj1->hr_saida <br>";
}
  }}else {
    echo "Não foi!";
  }




  if ($con2=$mysqli->query($select2)) {
    $row2 =  $con2->num_rows;
  if ($row2 == 0) {
    echo '<th class="text-center">---</th>';
  }

  if ($row2 == 1) {
    if ($obj2= $con2->fetch_object()) {
    echo '<th class="text-center">'.$obj2->hr_entrada.' as '.$obj2->hr_saida.'</th>';
  }}

  if ($row2 >= 2) {
    echo '<th class="text-center">';
    while ($obj2= $con2->fetch_object()) {
    echo "$obj2->hr_entrada as $obj2->hr_saida <br>";
}
  }}else {
    echo "Não foi!";
  }

  if ($con3=$mysqli->query($select3)) {
    $row3 =  $con3->num_rows;
  if ($row3 == 0) {
    echo '<th class="text-center">---</th>';
  }

  if ($row3 == 1) {
    if ($obj3= $con3->fetch_object()) {
    echo '<th class="text-center">'.$obj3->hr_entrada.' as '.$obj3->hr_saida.'</th>';
  }}

  if ($row3 >= 2) {
    echo '<th class="text-center">';
    while ($obj3= $con3->fetch_object()) {
    echo "$obj3->hr_entrada as $obj3->hr_saida <br>";
}
  }}else {
    echo "Não foi!";
  }

  if ($con4=$mysqli->query($select4)) {
    $row4 =  $con4->num_rows;
  if ($row4 == 0) {
    echo '<th class="text-center">---</th>';
  }

  if ($row4 == 1) {
    if ($obj4= $con4->fetch_object()) {
    echo '<th class="text-center">'.$obj4->hr_entrada.' as '.$obj4->hr_saida.'</th>';
  }}

  if ($row4 >= 2) {
    echo '<th class="text-center">';
    while ($obj4= $con4->fetch_object()) {
    echo "$obj4->hr_entrada as $obj4->hr_saida <br>";
}
  }}else {
    echo "Não foi!";
  }

  if ($con5=$mysqli->query($select5)) {
    $row5 =  $con5->num_rows;
  if ($row5 == 0) {
    echo '<th class="text-center">---</th>';
  }

  if ($row5 == 1) {
    if ($obj5= $con5->fetch_object()) {
    echo '<th class="text-center">'.$obj5->hr_entrada.' as '.$obj5->hr_saida.'</th>';
  }}

  if ($row5 >= 2) {
    echo '<th class="text-center">';
    while ($obj5= $con5->fetch_object()) {
    echo "$obj5->hr_entrada as $obj5->hr_saida <br>";
}
  }}else {
    echo "Não foi!";
  }
?>
</tr>
</tbody>
</div>
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
