<?php
  include_once "includes/conexao.php";
  $itens = $_GET['itens'];
  $select="DELETE FROM `tb_artigo` WHERE `cd_artigo` = $itens ";
 if ($mysqli->query($select)) {
 	?>
 	<script type="text/javascript">
          alert('Item apagado com sucesso!');
          document.location="artigos.php";
        </script>

    <?php
}else{
 	?>
 	<script type="text/javascript">
          alert('Erro ao excluir item!');
          document.location="artigos.php";
        </script>
        <?php

}
?>