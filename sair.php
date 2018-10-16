<?php
session_start();
if(!isset($_SESSION['nm_usuario'])){
	$_SESSION['msg-fim']= "<div class='alert alert-danger' role='alert'>Logue primeiro antes de entrar aqui!</div>";
	$_SESSION['fim']= 1;
	?>
	<script type="text/javascript">
        document.location="login.php";
	</script>
    <?php
}else{
	$_SESSION['msg-fim']= "<div class='alert alert-danger' role='alert'>Deslogado, Volte sempre!</div>";
	$_SESSION['fim']= 1;
	$_SESSION['sair']= 2;
	?>
	<script type="text/javascript">
	    document.location="login.php";
	</script>
	<?php
}

?>