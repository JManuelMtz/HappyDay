
<?php include '../../database/conexion.php'; ?>

<?php include '../../partials/header.php'; ?>

<?php include '../../partials/content.php'; ?>

<?php 

	// Almacena todos inflables infantiles
	$productos = mysqli_query($conexion, "select * from productos where etiqueta like '%Social%Globo%' ");

?>

<header>
	<h2>Globos sociales</h2>
</header>

<?php
	while ($producto = mysqli_fetch_assoc($productos)) {	
		
		include '../../' . $ruta_productos;

	}
?>

<?php include '../../partials/footer.php'; ?>
