
<?php require_once 'includes/headerResource.php'; ?>

<!-- Check Useremail is SET -->
<?php if(isset($_SESSION['userEmail'])) { ?>
	<?php require_once 'includes/dashboardContent.php'; ?>
<?php } else { ?>
	<script type="text/javascript">
		window.location.href="index.php";
	</script>
<?php }
?>
<?php require_once 'includes/footerResource.php'; ?>