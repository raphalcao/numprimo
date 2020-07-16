<!DOCTYPE html>
<html lang="en">
<head>
	<style>
		fieldset {
			background-color: #eeeeee;
			width: 10%;
		}
	</style>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Números primos</title>
</head>
<body>
	<form action="" method="post">
	<fieldset>
	<legend>NÚMEROS PRIMOS</legend>
		<p><input type="text" name="campo1"></p>
		<p><input type="submit" name="enviar"></p>
	</fieldset>
	</form>

<?php
	$num = $_POST['campo1'];
	echo "Output: ";	

	for($i = 1; $i <= $num; $i++)
	{

		$share = 0;
		for($j = $i; $j >= 1; $j--)
		{
			if (($i % $j) == 0) {
				$share++;
			}
		}
		if ($share == 2)
		{
			echo  $i . ', ';
		}
	}

?>

</body>
</html>