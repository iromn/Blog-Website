<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/topics.php"); 
adminOnly();
?>
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<!--Font Awesome-->
	<script src="https://kit.fontawesome.com/4ff264fb23.js" crossorigin="anonymous"></script>

	<!-- Google Fonts-->
	<link href="https://fonts.googleapis.com/css2?family=PT+Serif&family=Pacifico&family=Trispace:wght@600&display=swap" rel="stylesheet"> 

	<!--css link-->
	<link rel="stylesheet" type="text/css" href="../../assets/css/style.css">	

	<!--Admin styling -->
	<link rel="stylesheet" type="text/css" href="../../assets/css/admin.css">


	<title>Admin - Add Topic</title>
	
</head>

<body>

	<!-- NAVBAR -->
	<?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>
	<!-- //NAVBAR -->

	<!-- ADMIN PAGE WRAPPER-->
	<div class="admin-wrapper">

		<!-- LEFT SIDEBAR-->
		<?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>

		<!--ADMIN CONTENT-->
		<div class="admin-content">

			<div class="button-grp">
				<a href="create.php" class="btn btn-big">Add Topic</a>
				<a href="index.php" class="btn btn-big" >Manage Topic</a>
			</div>

			<div class="content">
				<h2 class="page-title">Add Topic</h2>
				<?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>
				
				<form action="create.php" method="post">
					<div>
						<label>Name</label>
						<input type="text" name="name" value="<?php echo $name ?>" class="text-input">
					</div>
					<div>
						<label>Description</label>
						<textarea name="description" id="body"></textarea>
					</div>
					<div>
						<button type="submit" name="add-topic" class="btn btn-big" > Add Topic</button>
					</div>
				</form>
				
			</div>
			
			
		</div>

	</div>
	<!--// ADMIN PAGE WRAPPER-->

	<!--jQUERY-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- CK EDITOR -->
	<script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>

	<!--CUSTOM SCRIPT-->
	<script src="../../assets/js/scripts.js"></script>

</body>
</html>