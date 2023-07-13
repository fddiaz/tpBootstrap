<?php

include_once('./includes/autoload.php');

?>

<!DOCTYPE html>
<html lang="es">
    <?php include('templates/head.php'); ?>
    <body>
        <!-- Start header --->
        <?php include('templates/header.php'); ?>
        <!-- End header -->
        <!-- Start content-->
        <?php
        if(Session::get('login') == TRUE && Session::get('role_id') == 1){
            include('templates/editlist.php');
        } elseif (Session::get('login') == TRUE && Session::get('role_id') == 2 ) {
            include('templates/list.php');
        } else {
            include('templates/404.php');
        }
        ?>
        <!-- End content -->
        <!-- Start Footer -->
        <?php include('templates/footer.php'); ?>
        <!-- End Footer -->
    </body>
</html>