<?php


session_start();




if( @$_SESSION['usuario']==null){
    

    
  
    
}
else{
    
    header("Location:principal.php");
    
}



if(isset($_POST['entrar'])){
    
    
    


$a=$_POST['user'];

$b=$_POST['pass'];


    
    
 $_SESSION['usuario']=$a;
    
     $con=mysqli_connect('localhost','root','','prueba');
    
    
    
    
    
    $result=mysqli_query($con,"select * from usuarios where nombre='$a' and pass='$b'");
    
    
    $row=mysqli_num_rows($result);
       
    
    
   
        
       if($row>0){
            
            header("Location:principal.php");
            
       }
    
        else{
            
             $_SESSION['usuario']=0;
            
            
            
            $txt='<p style="color:red;">Acceso Denegado</p>';
            
        }
    
    
        
    
    
        
    
        mysqli_close($con);
    
    
        }
        
    
    
   
    
    
  
    
         






    
 
    
    






?>



<!DOCTYPE HTML>


<head>

    <meta charset="utf-8">
    

    
  
    <head>
        
        <meta charset="utf-8">
        
         <meta name="viewport" content="width=device-width , initial-scale=1.0">
        
        <link rel="stylesheet" type="text/css" href="css/index.css">
    
</head>


<body>


    
    


<h1 style=" color:blue;font-size:30px; text-align:center; font-family:arial;">[Login]</h1>
<h1 style=" color:blue;font-size:50px; text-align:center; font-family:Wingdings;">7</h1> 
 

<div class="panel">

    
   <?php echo @$txt; // texto de acceso denegado ?>
   
<form action="index.php" method="post">

<input name="user" type="text" placeholder="Ingresa tu Usuario" required>

<input name="pass" type="password" placeholder="Ingresa tu Contraseña" required>

<input  class="bts" name="entrar"type="submit" value="Entrar">


<p>No estas registrado? <a href="registro.php">Registrate Aqui</a> o entra como <a href="visitante.php">Visitante Aqui</a></p>
    
</form>
    
</div>

</body>


</HTML>