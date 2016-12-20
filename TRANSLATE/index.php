<!DOCTYPE html>
<html>
<head>
	<title>web thu</title>
	<link rel="stylesheet" href="layout/css/bootstrap.min.css">
	<link rel="stylesheet" href="layout/css/layout.css"> 
	<script src="layout/js/jquery-3.1.1.min.js"></script>
  <script src="layout/js/bootstrap.min.js"></script>
  <script src="layout/js/bootstrapselect.js"></script>
</head>
<body>
	<div class="header">
	<!-- NAV-MENU -->
		  <?php 
			include ("pages/nav_menu.php");
		   ?>
	</div>
	<div class="main">
		<div class="container-fluid area_combobox">
		<!-- AREA-COMBOBOX -->
		  <?php 
			include ("pages/area_combobox.php");
		   ?>
		</div>
		<div class="area_text container-fluid">	
		<!-- AREA_TEXT -->
		  <?php 
			include ("pages/area_text.php");
		   ?>
			
		</div>
	</div>
	<div class="footer">
		<?php 
			include ("pages/area_footer.php");
		   ?>
	</div>

</body>
</html>