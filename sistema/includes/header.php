<?php
    
    session_start();
    if (empty($_SESSION['active'])) 
    {
            header('location: ../'); 
    }

 ?>
 <link rel="icon" href="../img/logo.png" type="image/png">
    <header>
		<div class="header">
			
			<h1>Sistema Administrativo</h1>
			<div class="optionsBar">
				<p>Colombia, <?php echo fechaC(); ?></p>
				<span>|</span>
				<span class="user"><?php echo $_SESSION['user']; ?></span>
				<img class="photouser" src="../../sistema/img/usuario.png" alt="Usuario">
				<a href="../../sistema/salir.php"><img class="close" src="../../sistema/img/salir.png" alt="Salir del sistema" title="Salir"></a>
			</div>
		</div>
        <?php include "nav.php"; ?>
	</header>