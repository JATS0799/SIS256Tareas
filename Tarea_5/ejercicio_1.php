<?php
	$filas = $_GET["textn"]
?>
<table border="3">
	<?php 
		for ($i = 1 ; $i <= $filas ; $i++){
		?>
	<tr>
		<td> <?php echo $i ?> </td>
	<?php } ?>
	</tr>
</table>