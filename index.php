<!-- VARIAVEIS DO BLOG -->
<?php
	require_once("config\config.php");
?>
<!-- head.php -->
<?php
require_once("inc/head.php");
?>
<!-- Header -->
<?php
include_once("inc/header.php");
?>
<!-- Banner -->
<?php
require_once("inc/banner.php");
?>

<!-- Section -->
<?php
require_once("inc/section.php");
?>
<!-- Section -->
<?php
require_once("inc/section1.php");
?>

<!-- Sidebar -->
<div id="sidebar">
	<div class="inner">
		<!-- Search -->
		<?php
		require_once("inc/search.php");
		?>
		<!-- Menu -->
		<?php
		require_once("inc/menu.php");
		?>

		<!-- Section -->
		<?php
		require_once("inc/section2.php");
		?>

		<!-- Section -->
		<?php
		require_once("inc/section3.php");
		?>

		<!-- Footer -->
		<?php
		require_once "inc/footer.php";
		?>

	</div>
</div>
<?php
// foot.php
require_once("foot.php");
?>