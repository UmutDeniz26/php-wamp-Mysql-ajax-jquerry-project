<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>LoginPage</title>

	<?php $this->load->view("/components/resources.php"); ?>

</head>

<body>
	<?php $this->load->view("/components/navbarLogin.php"); ?>
	<div class="page-content">
		<div class="content-wrapper">
			<div class="content-inner">
				<?php $this->load->view("/components/contentLogin.php"); ?>

			</div>
		</div>
	</div>

</body>

</html>