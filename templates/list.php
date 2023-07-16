<?php

require_once('./includes/dbconnect.php');

$sql = "SELECT * FROM minions ORDER BY id ASC";
$result = $connection->query($sql);

?>

<main class="container">
    <section class="px-4 px-lg-5">
        <div class="mt-5">
            <h1>Listado de subditos</h1>
            <table class="table table-striped">
                <thead>
                    <tr class="text-center text-uppercase">
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Mail</th>
                    </tr>
                </thead>
                <tbody>
<?php
    $count = 1;
    while($res = mysqli_fetch_array($result)) {
        echo '<tr class="text-center">';
        echo '<th scope="row">'.$count.'</th>';
        echo '<td class="col-3">'.$res['name'].'</td>';
        echo '<td class="col-3">'.$res['lastname'].'</td>';
        echo '<td class="col-3">'.$res['mail'].'</td>';
        $count++;
    }
?>
                </tbody>
            </table>
        </div>
    </section>
</main>

<?php

    $connection->close();

?>
