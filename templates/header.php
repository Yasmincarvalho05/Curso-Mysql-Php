<?php
 
 include("process/conn.php");

 $msg ="";

 if(isset($_SESSION["msg"])){

    $msg = $_SESSION["msg"];
    $status = $_SESSION["status"];

    $_SESSION["msg"]="";
    $_SESSION["status"]="";
 }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faça seu pedido!</title>
    <!-- Booststrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--App CSS-->
    <link rel="stylesheet" href="css/styles.css"/>
    
</head>
<body>
    <header> 
    <nav class="navbar navbar-expand-lg">
    <a   href="index.php" class="navbar-brand">
        <img scr="img/piticinha.png" alt= "pizzaria do João" id="brand-logo"> 
    </a>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class= "nav-item active">
           <a href="index.php" class="nav-link"> Peça sua pizza</a>
        
        
        </li>
    </ul>
 </div>
</nav>
</header>
 <?php if($msg !=""):?>
<div class="alert alert-<?= $status ?>">
    <p><?= $msg ?></p>
</div>
<?php endif;?>

</body>