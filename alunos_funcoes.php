<?php
session_start();
include_once "includes/conexao.php";
if (isset($_POST['excluir'])) {
 $cd=$_POST['excluir'];
 $delete = "DELETE FROM `tb_aluno` WHERE `cd_aluno` = ".$cd;
 if ($query= $mysqli->query($delete)){
  header("Location: turma.php");
}
}elseif (isset($_POST['edit'])) {
 $cd= $_POST['cd'];
 $nome= $_POST['nome'];
 $rm= $_POST['rm'];
 $email= $_POST['email'];
 $turma = $_POST['turma'];
 $update = "UPDATE `tb_aluno` SET `nm_aluno`='$nome',`nr_rm`=$rm,`nm_login`='$email',`id_turma`= $turma WHERE `cd_aluno` = $cd";
 if ($query= $mysqli->query($update)){
   header("Location: turma.php");
 }
}elseif (isset($_POST['cadastrar'])) {
  $nome=$_POST['nome'];
  $rm=$_POST['rm'];
  $email=$_POST['email'];
  $senha=  $_POST['senha'];
  $turma = $_POST['turma'];

  $select = "SELECT * FROM `tb_aluno` WHERE `nm_aluno` = '$nome'";
  if ($query = $mysqli->query($select)) {
    $row_cnt = $query->num_rows;
    if ($row_cnt == 0) {
      $insert = "INSERT INTO `tb_aluno`(`nm_aluno`, `nr_rm`, `nm_login`, `nm_senha`, `id_turma`) VALUES ('$nome', '$rm', '$email', '$senha', $turma)";
      if ($query= $mysqli->query($insert)){
        header("Location: aluno.php");
      }else{
        $_SESSION['msg'] = '<div class="alert alert-danger" role="alert">Não foi possivel cadastrar essa turma!</div>';
        header("Location: aluno.php");
      }
    }else{
      $_SESSION['msg'] = '<div class="alert alert-danger" role="alert">Está turma já existe!</div>';
      header("Location: aluno.php");
    }
  }
}else{
 header("Location: aluno.php");
}

?>
