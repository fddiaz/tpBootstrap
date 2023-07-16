<?php


require_once('./includes/dbconnect.php');

if(Session::get('minion_id') > 0 ){

    $sql_minion = 'SELECT * FROM minions WHERE id = '.Session::get('minion_id');
    $result_minion = $connection->query($sql_minion);
    $minion_data = $result_minion->fetch_assoc();
}

?>
    <main class="container">
        <section class="px-4 px-lg-5 pb-5 pt-5">
            <div class="border px-4 pt-3">
                <div class="row">
                    <h1>Actulizar datos personales.</h1>
                    <div class="mx-auto">
                        <div class="mt-2 mx-auto p-4 bg-light">
                            <div class="bg-light">
                                <form action="update.php" method="post" id="formupdate" role="form">
                                    <div class="controls">
                                        <div class="row pb-3">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_name">Nombre *</label>
                                                    <input id="name" type="text" name="name"
                                                        value = "<?php echo $minion_data['name']; ?>"
                                                        class="form-control"
                                                        placeholder="Imgrese su Nombre *"
                                                        required="required" data-error="Nombre obligatorio.">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_lastname">Apellido *</label>
                                                    <input id="lastname" type="text" name="lastname"
                                                        value = "<?php echo $minion_data['lastname']; ?>"
                                                        class="form-control"
                                                        placeholder="Ingrese su Apellido *"
                                                        required="required" data-error="Apellido es obligatorio.">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row pb-3">
                                            <div class="form-group">
                                                <label for="form_mail">Email *</label>
                                                <input id="email" type="email" name="mail"
                                                    value = "<?php echo $minion_data['mail']; ?>"
                                                    class="form-control" placeholder="Ingrese su Email *"
                                                    required="required" data-error="Email tiene que ser válido y es obligatorio.">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <button type="submit" name="update" value="update" class="w-100 btn btn-success">Actualizar datos personales</button>
                                            </div>
                                            <div class="col">
                                                <button type="" name="update" value="update" class="w-100 btn btn-secondary" onclick="if(confirm('Esta SEGURO que quiere cancelar?')) history.back();">Cancelar</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php

    $connection->close();

?>