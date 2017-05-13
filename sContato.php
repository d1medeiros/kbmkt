<?php include "cabecalho.php" ?>
 
 
 <?php
 
 
	  $name = $_POST['nome'];
	  $visitor_email = $_POST['email'];
	  $message = $_POST['comment'];
	  
	  $email_from = $visitor_email;
	  
	  $email_subject = "New Form submission";
	  
	  $email_body = "You have received a new message from the user $name.\n".
							  "Here is the message:\n $message".
	  
	  
	  $to = "djbmbb@hotmail.com";
	  
	  $headers = "From: $email_from \r\n";
	  
	  $headers .= "Reply-To: $visitor_email \r\n";
	  
	  mail($to,$email_subject,$email_body,$headers);
	  
	   
 ?>
     <div class="alert alert-success text-center" role="alert">
	 <?php echo "E-mail enviado com sucesso!!"; ?>
     </div> 
 
 <br />

 <div class="alert alert-success text-center" role="alert"><a href="index.php">voltar</a></div>
 
 <?php /*?><?php
function IsInjected($str)
{
    $injections = array('(\n+)',
           '(\r+)',
           '(\t+)',
           '(%0A+)',
           '(%0D+)',
           '(%08+)',
           '(%09+)'
           );
                
    $inject = join('|', $injections);
    $inject = "/$inject/i";
     
    if(preg_match($inject,$str))
    {
      return true;
    }
    else
    {
      return false;
    }
}
 
if(IsInjected($visitor_email))
{
    echo "Bad email value!";
    exit;
}
?>
<?php */?>
 
 
</div>     
</body>
</html>