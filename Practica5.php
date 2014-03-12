<!DOCTYPE html>
<html>
<title>Practica 5</title>
<h4><p Align=Center> Practica 5 </p></h4>
	<body>
		<table align="center">
				<?php	
					for($i=0; $i<=90;$i+=10){
						if(($i%20) == 0){
							echo "<tr bgcolor='white'>";}
						else{
							echo "<tr bgcolor='silver'>";}
						for($j=1; $j<=10;$j++){
							$r=$i+$j;
							echo "<td>".$r."</td>";
						}	
						echo "</tr>";
					}
				 ?>
		</table>
	</body>
</html>
