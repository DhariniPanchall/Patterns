<!DOCTYPE html>
<html>
	<body>
		<?php 
			echo "Using for loop";
			echo "<br/>";
			for ($i = 0; $i <= 5; $i++)
			{
				for($j = 0; $j < $i; $j++)
				{
					echo "@";
				}
				echo "<br/>";
			}
		?>
	</body>
</html>