<?php

include_once('./includes/autoload.php');

?>

<?php

if($_POST) {

    require_once(__DIR__.'/includes/dbconnect.php');

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = 'SELECT * FROM users WHERE username = "'.$username.'" and password = "'.$password.'" LIMIT 1';

    $result = mysqli_fetch_assoc($connection->query($sql));

    var_dump($result);

    if($result['username'] == $username && $result['password'] == $password) {
        Session::set('login', TRUE);
        Session::set('username', $result['username']);
        Session::set('mail', $result['mail']);
        Session::set('role_id', $result['role_id']);
        Session::set('disable', $result['disable']);
    } else {
        Session::set('login', FALSE);
    }

    Session::CheckLogin();

} else {
    Session::CheckSession();
}

?>