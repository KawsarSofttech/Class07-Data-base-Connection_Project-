<?php

include 'Connection.php';
$conn = new Connection();



?>

<!DOCTYPE html>
<html>
<head>
	<title>Add a note</title>
</head>

<body>
	
	<div class="Add" style="background-color: red;">
		<div class="Container" style="text-align: center; background-color: green; width: 95%; margin: auto;">

			<h2 style="text-align: center; color: yellowgreen;">Add a note</h2>
			<?php

				if(isset($_POST['submit'])){
					echo "Functioning";
				}

			?>
			<form style="text-align: center; padding: 20px;" method="POST" action="">
				<input type="text" name="title"  placeholder="Title"><br>
				<input type="text" name="date"  placeholder="Date"><br>
				<textarea name="details" placeholder="Details"></textarea><br>
				<input type="submit" name="submit"  value="Add"><br>
				
			</form>



			
		</div>
		
	</div>



</body>
</html>
