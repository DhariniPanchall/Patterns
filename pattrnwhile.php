<!DOCTYPE html>
<html>
	<body>
		<?php 
			echo "Using while loop";	
			echo "<br/>";
			$i = 1;	
			while($i<=5)
			{
				for ($i = 0; $i <= 5; $i++)
				{
					for($j = 0; $j < $i; $j++)
					{
						echo "^";
					}
					echo "<br/>";
				}
			}
		?>
	</body>
</html>