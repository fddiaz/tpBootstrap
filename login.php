<?php

include_once("./includes/autoload.php");

?>

<!DOCTYPE html>
<html lang="es">
    <?php include("templates/head.php"); ?>
    <body>
        <!-- Start header --->
        <?php include("templates/header.php"); ?>
        <!-- End header -->
        <!-- Start content-->
        <?php
            include("templates/login_form.php"); 
        ?>
        <!-- End content -->
        <!-- Start Footer -->
        <?php include("templates/footer.php"); ?>
        <!-- End Footer -->
    </body>
</html>