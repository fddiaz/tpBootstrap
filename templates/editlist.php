<?php

require_once('./includes/dbconnect.php');

$sql = "SELECT * FROM minions ORDER BY id ASC";
$result = $connection->query($sql);

?>

<main class="container">
    <form action="acctions.php" method="post">
        <section class="px-4 px-lg-5">
            <div class="mt-5">
                <div class="row">
                    <h1 class="col">Listado de subditos</h1>
                    <button class="col-3 btn btn-primary me-md-2 h-auto" type="submit" name="addMinion" value="add">Agregar subdito</button>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr class="text-center text-uppercase">
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Mail</th>
                        <th scope="col">Acciones</th>
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
        if(Session::get('role_id') == 1){
            echo '<td class="col-3"><div class="btn-group disabled">
            <button type="submit" class="btn btn-warning" name="editMinion" value="'.$res['id'].'">Modificar</button>
            <button type="submit" class="btn btn-danger" name="deleteMinion" value="'.$res['id'].'">Eliminar</button>
            </div></td>';
        echo '</tr>';
        } else {
            echo '<td class="col-3"><div class="btn-group disabled">
            <button type="button" disabled class="btn btn-info">Ver datos</button>
            <button type="button" disabled class="btn btn-warning">Modificar</button>
            <button type="button" disabled class="btn btn-danger">Eliminar</button>
            </div></td>';
        echo '</tr>';
        }
        $count++;
    }
?>
                    </tbody>
                </table>
            </div>
        </section>
    </form>
</main>

<?php

    $connection->close();

?>