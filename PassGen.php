<?php

function PassGen(){

	$chars = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 'a', 'A', 'b', 'B', 'c', 'C', 'd', 'D', 'e', 'E', 'f', 'F', 'g', 'G', 'h', 'H', 'i', 'I', 'j', 'J', 'k', 'K', 'l', 'L', 'm', 'M', 'n', 'N', 'o', 'O', 'p', 'P', 'q', 'Q', 'r', 'R', 's', 'S', 't', 'T', 'u', 'U', 'v', 'V', 'w', 'W', 'x', 'X', 'y', 'Y', 'z', 'Z', '%', '$', '#', '~', '@', ',', '.', '?', '(', ')', '*', '&', '/');
						
	shuffle($chars);

	for ($index=0; $index < min(16, count($chars)); $index++) {
		echo $chars[$index];
	}

}

?>
<!DOCTYPE html>
<html>
<head>

	<title>Password Generator</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
	
</head>

<body>

		<div id="horizon">
			<div id="content">
				<div class="bodytext">
					<span class="headline">Password Generator</span><br/><br/>
					<div id="pass">
						<form>
							<input type="text" onClick="this.select();" name="pass" value="<?php PassGen(); ?>" readonly><?php //PassGen(); ?>
						</form>
					</div><br/><br/>
					
					<button type="button" onclick="window.location.reload(true)">Click here to generate new password</button><br/><br/>
					Click the button to generate a random 16 character password.
					
				</div>
			</div>
		</div>

</body>
</html>
