<!DOCTYPE html>
<html>
	<body>
		<?php 
			echo "Using do while loop";	
			echo "<br/>";	
			$i = 0;
			do
			{
				$j = 1;
				while($j<=$i)
				{
					echo "*";
					$j++;
				}
				echo "<br/>";
				$i++;
			}
			while($i<=5);
		?>
	</body>
</html>