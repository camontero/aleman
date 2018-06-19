<?php 

include '../config/db_conexion.php';

$sql = "SELECT * FROM vocabulario";
$res = mysqli_query($conn, $sql);

$max = mysqli_num_rows($res);
$min = 1;

$id = rand($min, $max);


$sql1 = "SELECT * FROM vocabulario WHERE vocabulario.id = $id";
$res1 = mysqli_query($conn, $sql1);

$row = mysqli_fetch_assoc($res1);
?>


	<div class="row significado">
		<p><?php echo $row["significado"]; ?></p>
	</div>
	<div class="row dos">
		<input type="text" name="word" id="word">
	</div>
	<div class="row tres">
		<button type="button" class="btn" id="comparar" onclick="comparar(<?php echo ($id); ?>, '<?php echo $row["significado"]; ?>', '<?php echo $row["palabra"];?>')">comparar</button>
	</div>		
	<div class="row audio">
		<audio src="audio/<?php echo $row["palabra"];?>.mp3" id="demo"></audio>
	    <i id="play">Pista <i class="fas fa-volume-up"></i></i>
	</div>	
	

