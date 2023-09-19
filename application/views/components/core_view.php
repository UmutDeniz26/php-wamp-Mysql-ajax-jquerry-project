<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>To-do List</title>

	<?php $this->load->view("/components/resources.php"); ?>

</head>

<body>

	<!-- Main navbar -->
	<?php $this->load->view("/components/main_navbar.php"); ?>
	<!-- Page Content -->
	<div class="page-content">
		<!-- Sidebar content -->
		<?php $this->load->view("/components/sidebar_content.php"); ?>
		<!-- Main content -->
		<?php $this->load->view($content); ?>
	</div>
	<!-- Page content -->
</body>

</html>