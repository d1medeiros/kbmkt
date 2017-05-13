<?php include "cabecalho.php" ?>

	<form action="adiciona.php">
    
    	<label>Nome:</label>
    	<input class="form-control" type="text" name="nome">
        
        <br/>
        
        <label>Valor:</label>
        <input class="form-control" type="text" name="valor" placeholder="00,00">
        
    	<br/>
       	
        <label>Data:</label>
        <select class="form-control" name="data" >
        	<option> 10/10/2015 </option>
            <option> 11/10/2015 </option>
            <option> 12/10/2015 </option>
        </select>
        
        <br/>
        
        <input class="btn btn-default" type="submit" value="enviar">
        
    </form>
    
<?php include "rodape.php" ?>