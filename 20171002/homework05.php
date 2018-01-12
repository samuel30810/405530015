<!DOCTYPE html>
<html>
<head>
	<title>homework</title>
</head>
<body>
	<?php
	$data = array(
	array("Volvo",22,18),
	array("BMW",15,13),
	array("Saad",5,2),
	array("Land Rover",17,15)
	)
	?>
	<table>
		<?php
		for ($a=0; $a <4 ; $a++) 
		{ 
			echo "<tr>";
			for ($i=0; $i < 3; $i++) 
			{ 
				$result = $data[$a][$i];
				echo "<td> $result </td>";
			}
			echo "</tr>";
		}
		?>
	</table>
	<br>
	<table>
		<?php
		foreach ($data as $key => $value) 
		{
			echo " <tr>";
			foreach ($value as $key => $value1) 
			{
				echo " <td> $value1 </td>";
			}
			echo " </tr>";
			
		}
		?>
	</table>
	<br>
	<table>
		<?php
		function tr($data01 = [])
		{
			/*$data1 = array_map("tr2", $data01);*/
			foreach ($data01 as $key => $value01) {
				$data01 [$key]=  "<td> $value01 </td>";
			}
			return $data01;
		}			

		/*function tr2($value01){
				return "<td> $value01 </td>";
		}*/

		$result02 = [];
		$result02 = array_map("tr", $data[1]);
		$result02 = join("<tr>",$result02);
		print_r($result02);
		?>
	</table>
</body>
</html>