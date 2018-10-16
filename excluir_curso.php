<?php
  include_once "includes/conexao.php";
   $apagar=$_GET ['cd'];
  $delete="DELETE FROM `tb_curso` WHERE `cd_curso` = $apagar ";
 if ($mysqli->query($delete)) {
 	?>
 	<script type="text/javascript">
          alert('Item apagado com sucesso!');
          document.location="cursos.php";
        </script>

    <?php
}else{
 	?>
 	<script type="text/javascript">
          alert('Erro ao excluir item!');
          document.location="cursos.php";
        </script>
        <?php

}
?>