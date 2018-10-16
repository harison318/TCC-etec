<?php
session_start();
include_once "includes/conexao.php";
if (isset($_POST['desativar'])) {
  $cd=$_POST['desativar'];
  $update = "UPDATE `tb_turma` SET `st_ativo` = 0 WHERE cd_turma = ".$cd;
    if ($query= $mysqli->query($update)){
      header("Location: index.php");
    }
}elseif (isset($_POST['ativar'])) {
  $cd=$_POST['ativar'];
  $update = "UPDATE `tb_turma` SET `st_ativo` = 1 WHERE cd_turma = ".$cd;
    if ($query= $mysqli->query($update)){
      header("Location: index.php");
    }
}elseif (isset($_POST['excluir'])) {
  $cd=$_POST['excluir'];
  $delete = "DELETE FROM `tb_turma` WHERE `cd_turma` = ".$cd;
    if ($query= $mysqli->query($delete)){
      header("Location: index.php");
    }
}elseif (isset($_POST['edit'])) {
  $cd=$_POST['cd'];
  $inicio=$_POST['inicio'];
  $fim=$_POST['fim'];
  $curso=$_POST['curso'];
  $update = "UPDATE `tb_turma` SET `dt_ano_inicio` = $inicio, `dt_ano_fim` = $fim, `id_curso` = $curso WHERE cd_turma = ".$cd;
 		if ($query= $mysqli->query($update)){
   		header("Location: index.php");
 		}
}elseif (isset($_POST['cadastrar'])) {
  $inicio=$_POST['inicio'];
  $fim=$_POST['fim'];
  $curso=$_POST['curso'];
  $ano=  date("Y");
  $nr_ano = ($ano-$inicio)+1;
  echo $nr_ano;

  $select = "SELECT * FROM `tb_turma` WHERE `dt_ano_inicio` = '$inicio'";
  if ($query = $mysqli->query($select)) {
    $row_cnt = $query->num_rows;
    if ($row_cnt != 0) {
      $insert = "INSERT INTO `tb_turma`(`dt_ano_inicio`, `dt_ano_fim`, `nr_ano`, `st_ativo`, `id_curso`) VALUES ('$inicio', '$fim', '$nr_ano', 1, '$curso')";
      if ($query= $mysqli->query($insert)){
        header("Location: index.php");
      }else{
        $_SESSION['msg'] = '<div class="alert alert-danger" role="alert">Não foi possivel cadastrar essa turma!</div>';
        header("Location: index.php");
      }
    }else{
      $_SESSION['msg'] = '<div class="alert alert-danger" role="alert">Está turma já existe!</div>';
      header("Location: index.php");
    }
  }
}else{
 header("Location: index.php");
}

?>
