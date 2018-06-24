
<?php require_once 'includes/headerResource.php'; ?>

<!-- Check Useremail is SET -->
<?php if(!isset($_SESSION['userEmail'])) { ?>
	<?php require_once 'includes/indexContent.php'; ?>
<?php } else { ?>
	<script type="text/javascript">
		window.location.href="dashboard.php";
	</script>
<?php }
?>
<?php require_once 'includes/footerResource.php'; ?>


