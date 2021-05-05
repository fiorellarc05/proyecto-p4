<!--Proyecto Programado 1 - Programación 4-->
<!--Fiorella Rodríguez Calvo-->

<html>
<head>
    <title>MundoBlog.com</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"  crossorigin="anonymous"></script>
   
    <!--ccs style-->
    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
    
    <!--Header info-->  
    <?php include 'view/header.php'; ?>  
      
    <!--Controller info-->
    <?php
        if(isset($_GET['c'])){
            include "controller/".$_GET['c'].".php";
        }else{
            include 'view/home.php';
        }
    ?>
        
    <!--Footer info-->    
    <?php include 'view/footer.php'; ?>  
    
  </body>
</html>
