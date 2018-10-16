<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSS -->
    <link rel="stylesheet" href="css/fontawesome-all.css" >
    <title>Icones de ação</title>
    
    <style>
    <a class="remove"  href="#" data-toggle="modal" <?php echo 'data-target="#delete-modal'.$obj->cd_turma.'"'; ?> ></a>
    
	</style>
  </head>
  <body>
    <div class="container-config">
        <div class="container-edit">
            <div class="text">Editar</div>
            <button class="edit" ><i class="fas fa-pen"></i></button>
        </div>
        <div class="container-remove">
            <div class="text">Remover</div>
            <button class="remove" ><i class="fas fa-trash-alt"></i></button>
        </div>
        <button class="config" ><i class="fas fa-cogs"></i></button>
    </div>

    <!-- JavaScript -->
    <script src="js/jquery.min.js" ></script>
    <script type="text/javascript" >
		$(document).ready(function(){
			$(".config").click(function(){
				$(".container-remove").toggleClass("open-remove");
				$(".container-edit").toggleClass("open-edit");
				$(".config i").toggleClass("fa-cogs");
				$(".config i").toggleClass("fa-times");
			});
		});
	</script>
  </body>
</html>