<?php
  include_once "includes/conexao.php";
  $apagar=$_GET ['cd'];
  $select="DELETE FROM `tb_calendario` WHERE `cd_calendario` = $apagar ";
 if ($mysqli->query($select)) {
 	?>
 	<script type="text/javascript">
          alert('Item apagado com sucesso!');
          document.location="avaliacoes.php";
        </script>

    <?php
}else{
 	?>
 	<script type="text/javascript">
          alert('Erro ao excluir item!');
          document.location="avaliacoes.php";
        </script>
        <?php

}
?>