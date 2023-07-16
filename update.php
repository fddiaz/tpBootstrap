<?php

require_once('./includes/autoload.php');

?>

<?php

if($_POST && Session::get('role_id') == 1){
    require_once('./includes/dbconnect.php');

    var_dump($_POST);

    $sql_update = "UPDATE `minions` 
                    SET 
                        `name` = '".$_POST['name']."', 
                        `lastname` = '".$_POST['lastname']."', 
                        `mail` = '".$_POST['mail']."' 
                    WHERE `minions`.`id` = ".Session::get('minion_id');

    $result_update = $connection->query($sql_update);

    if($result_update == 1){
        $connection->close();
        header('Location:tithelist.php');
    } else {
        $connection->close();
        header('Location:404.php');
    }
} else {
    Session::CheckSession();
}

?>