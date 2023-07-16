<?php

require_once('./includes/autoload.php');

?>

<?php

if(isset($_POST['registration']) && $_POST['registration'] == "voluntary"){

    require_once('./includes/dbconnect.php');

    $sql = "INSERT INTO `minions` 
                (`id`, 
                 `name`, 
                 `lastname`, 
                 `mail`, 
                 `tithe_id`, 
                 `plus`, 
                 `tithe_multiplier`, 
                 `catsown`) 
            VALUES 
                (NULL, 
                 '".$_POST['name']."', 
                 '".$_POST['lastname']."', 
                 '".$_POST['mail']."', 
                 ".$_POST['tithe_id'].", 
                 ".$_POST['plus'].", 
                 ".$_POST['tithe_multiplier'].", 
                 ".$_POST['catsown'].")";

    $result = $connection->query($sql);

    if($result == 1){
        $connection->close();
        header('Location:thanks.php');
    } else {
        $connection->close();
        header('Location:404.php');
    }
}

if($_POST && Session::get('role_id') == 1){

    require_once('./includes/dbconnect.php');

    if(isset($_POST['addMinion']) && $_POST['addMinion'] == 'add'){
        header('Location:tithe.php');
    }

    if(isset($_POST['editMinion']) && intval($_POST['editMinion']) > 0){
        // var_dump($_POST);
        $minion_id = $_POST['editMinion'];
        // echo $minion_id;
        var_dump(Session::GetAll());
        Session::set('minion_id', $minion_id);
        // var_dump(Session::GetAll());
        header('Location:admin.php');
    }

    if(isset($_POST['deleteMinion']) && intval($_POST['deleteMinion']) > 0){
        $sql = 'DELETE FROM minions WHERE id='.$_POST['deleteMinion'];
        // echo $sql;
        $result = $connection->query($sql);
        if($result == 1){
            $connection->close();
            header('Location:tithelist.php');
        } else {
            $connection->close();
            header('Location:404.php');
        }
    }
}

?>