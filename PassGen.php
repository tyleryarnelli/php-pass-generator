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
	
	<style type="text/css">
	
		body {
			color: white;
			background-color: #003;
			margin: 0px
			}
			
		input {
			text-align: center; 
		}

		#horizon {
			color: white;
			background-color: transparent;
			text-align: center;
			position: absolute;
			top: 30%;
			left: 0px;
			width: 100%;
			height: 1px;
			overflow: visible;
			visibility: visible;
			display: block
			}

		#content {
			font-family: Verdana, Geneva, Arial, sans-serif;
			background-color: transparent;
			margin-left: -125px;
			position: absolute;
			top: -35px;
			left: 50%;
			width: 250px;
			height: 70px;
			visibility: visible
			}
			
		#pass {
			//width:250px;
			padding:10px;
			border:5px dashed #0000B5;
			margin:10px;
		}

		.bodytext {
			font-size: 14px
			}
			
		.headline {
			font-weight: bold;
			font-size: 34px
			}
	
	</style>
	
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
