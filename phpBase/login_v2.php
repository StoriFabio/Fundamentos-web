<?php

include'connect.php';

// is set 
if(isset($_POST['sub'])){
    $u=$_POST['user'];
    $p=$_POST['pass'];
    
   $s= "select * from reg where username='$u' and password= '$p'";   
   $qu= mysqli_query($con, $s);
   if(mysqli_num_rows($qu)>0){
      $f= mysqli_fetch_assoc($qu);
      $_SESSION['id']=$f['id'];
      header ('location:home.php');
   }
   else{
       echo 'username or password does not exist';
   }
  
}
?>
<html>
      <style> body {
        background-color: #ABBAEA;
    }</style>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1> Login - Fabio </h1>
        <form method="POST" enctype="multipart/form-data">
            <table>
                
                <tr>
                    <td>
                        Username
                        <input type="text" name="user">
                    </td>
                </tr>
                <tr>
                    <td>
                        password
                        <input type="password" name="pass">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="sub" value="submit">
                    </td>
                    <td>
                        <a href="reg.php">cadastrar</a>
                    </td>
                    
                </tr>
            </table>
    </body>
</html>
