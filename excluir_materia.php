<?php
  include_once "includes/conexao.php";
  $itens = $_GET['itens'];
  $delete="DELETE FROM `tb_materia` WHERE `cd_materia` = $itens ";
 if ($mysqli->query($delete)) {
 	?>
 	<script type="text/javascript">
          alert('Item apagado com sucesso!');
          document.location="materias.php";
        </script>

    <?php
}else{
 	?>
 	<script type="text/javascript">
          alert('Erro ao excluir item!');
          document.location="materias.php";
        </script>
        <?php

}
?>
