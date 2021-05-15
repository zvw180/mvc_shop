<!DOCTYPE html>
<html lang="en">

<?php include_once ("./mvc/views/block/head.php"); ?>

<body>
<!-- Start Top Nav -->
<?php include_once ("./mvc/views/block/topbar.php"); ?>
<!-- Close Top Nav -->


<!-- Header -->
<?php include_once ("./mvc/views/block/menu.php"); ?>
<!-- Close Header -->

<!-- Modal -->

<?php include_once ("./mvc/views/block/search.php"); ?>


<?php if (isset($data)) {
    require_once ("./mvc/views/page/".$data["page"].".php");
} ?>

<!-- Start Footer -->
<?php include_once ("./mvc/views/block/footer.php"); ?>
<!-- End Footer -->

<!-- Start Script -->
<?php include_once ("./mvc/views/block/script.php"); ?>
<!-- End Script -->
</body>

</html>