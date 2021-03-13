<!DOCTYPE html>
<html  lang="en">
  <head>
  	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  	<meta charset="utf-8">
  	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="icon" href="production/images/favicon.ico" type="image/ico" />
    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="vendors/animate.css/animate.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>
  <body class="login">
  	<div><!--- ? ---> 
<?php include "controler/conn.php"; 
      session_start();
      if (isset($_POST['user_log'])){
        $username = $_POST['user_log'];
        $password = $_POST['pass'];
        $username = stripslashes($username);
        $password = stripslashes($password);

        $query = "SELECT * FROM usuarios WHERE correo='$username' and contrasena='$password' ";
        $result = sqlsrv_query($conn, $query) or die( print_r( sqlsrv_errors(), true)) ;
        $rows = 0;
        while($row = sqlsrv_fetch_array($result)){
          $rows++;
        }
        if($rows==1){
          $_SESSION['user_log'] = $username;
          header("Location: /hcjti/Reclutamiento/production/main.php");
        }else{
          echo "<div class='form'> <h3>nombre/pass Incorreto.</h3> <br/> <a href='index.php'>Login</a> </div>";
         //nota: Cambia a la plantilla de pagina erronea o agregar el modal, ver cual puede ser la mejor opcion. 
        }
      }else{
    ?>
      <div class="login_wrapper"><!--- login_wrapper --->
        <div class="animate form login_form">

          <section class="login_content">
      <form action="" method="post" name="login">
      <!--- aqui va el logo ---->
              <div>
        <div><p>Correo</p>
          <input type="text" class="form-control" name="user_log" placeholder="Nombre o Clave" required />
        	<!---input type="text" class="form-control" name="user_log" onkeypress="return /\d/.test(String.fromCharCode(((event||window.event).which||(event||window.event).which)));" placeholder="Nombre o Clave" required / --->
        </div>
        <div><p>Clave</p>
        	<input type="password" class="form-control" name="pass"  placeholder="Clave" required />
        </div>
             <div class="clearfix"></div>
              <div class="separator">
                <div class="clearfix"></div>
                <br />
                <div>
                	<div><input class="btn btn-default submit" name="submit" type="submit" value="Login" /></div>
                 <div class="clearfix"></div>
                <br />               	
                  <h1>Reclutamiento</h1>
                  <p>©2018 All Rights Reserved. Privacy and Terms.</p>
                </div>
              </div>        
      </form>
           </section>


        </div><!--- animate form login_form --->
      </div><!--- /login_wrapper --->    
    <?php } ?>
    </div><!--- /? --->    
  </body>
</html>
