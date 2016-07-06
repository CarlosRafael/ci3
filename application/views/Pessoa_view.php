<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Welcome to Pessoa</title>
	</head>
	
	<body>
		<?php
			if(isset($nome)){
				echo 'Usuário: '.$nome;
			}
		?>
			<p>Isso é tudo</p>

	</body>
</html>	
