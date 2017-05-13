<?php include "cabecalho.php" ?>
 
 
 
 <?php  
 
 $nome = $_GET["nome"];
 $email = $_GET["email"];
 $coment = $_GET["comment"];
 
 ?>   

	
 <p class="alert-success"> 
 	<?= $nome; ?> Adicionada com sucesso!!
 </p>

  <a href="index.php" class="btn btn-default" role="button">Voltar</a>

</div>
 
<?php include "rodape.php" ?>