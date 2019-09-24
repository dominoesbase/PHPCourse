<?php

include "inc/logic.php";



?>

<html>
<head>
	<meta charset="utf-8">		
	
</head>
<body>
	<form method="post">
		<textarea name="access"></textarea>
		<input type="submit" value="verificar">
	</form>	
	<?php 
		$count = 0;
		foreach ($elements as $index => $element) {
			++$count;
			echo "<php>".$index."</p>";	
			echo "<p>" . $element . "</p>";
			echo "<input type='text' value='" . $element. "' id='count".$count."' style='display:none'>";  	
			echo "<button onclick='copyToClipboard(count" . $count . ")'>COPY</button>";
			echo '<br>';
		}
	?>
	<form method="post">
		<?php 
			$count = 0;
			foreach ($userGroups as $index => $userGroup) {
				echo $userGroup;
				echo '<br>';
			}
		?>
	</form>

	<script>
		function copyToClipboard(elementId) {
	        var copyGfGText = document.getElementById(elementId); 
  
			  /* Select the text field */
			  copyGfGText.select(); 
			  
			  /* Copy the text inside the text field */
			  document.execCommand("copy"); 
				}
	</script>
</body>
</html>


