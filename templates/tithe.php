<?php

require_once('./includes/dbconnect.php');

$sql_tithes = 'SELECT * FROM tithes ORDER BY id';
$result_tithes = $connection->query($sql_tithes);

?>

<main class="container">
        <section class="px-4 px-lg-5">
            <!-- Start heading row-->
            <div class="row gx-4 gx-lg-5 align-items-center my-5">
                <div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0"
                        src="./templates/media/img/Portada-gatos.png" alt="Dibujo de 3 gatos" /></div>
                <div class="col-lg-5">
                    <h1 class="font-weight-light">Conviértete en un Subdito!</h1>
                    <p><b>Nostros Reyes</b> necesitan de nuestro dinero para mantenerse <i>esponjosos, gordos y felices</i> (ellos no estan dispuestos a malgastar su tiempo de descanso en cosas tan mundanas como "trabajar").</p>
                    <p>En esta sección puedes seleccionar tu DIEZMO para mantener su <i>"estado"</i>.</p>
                </div>
            </div>
            <!-- End heading row -->
            <!-- Start call to action-->
            <div class="card text-white bg-secondary my-5 py-4 text-center">
                <div class="card-body">
                    <p class="text-white m-0">En el siguiente formulario podrás seleccionar su DIEZMO para la
                        causa de los Reyes de Internet. El diezmo es <strong>OBLIGATORIO</strong>.</p>
                </div>
            </div>
            <!-- End call to action -->
            <div class="">
                <p>Nuestros Reyes en su infinita misericordia nos permiten tener un descuento dependiendo de cuantos "Felinos" tengamos a nuestro cargo.</p>
                <p>A continuación se detallan los descuentos:</p>
                <div class="pt-2 pb-3">
                    <ul class="list-group text-center">
                        <li class="list-group-item">1 "Felino" a su cuidado - 15%</li>
                        <li class="list-group-item">2 "Felinos" a su cuidado - 50%</li>
                        <li class="list-group-item">3 "Felinos" a su cuidado - 80%</li>
                    </ul>
                </div>
                <p class="bi-asterisk pb-5"> Presentando documentación veterinaria que acredite mantención.</p>
            </div>
        </section>
        <section class="px-4 px-lg-5 pb-5">
            <div class="border px-4 pt-3">
                <div class="pb-3">
                    <h1 class="font-weight-light text-center">Elije tu <i>DIEZMO</i></h1>
                </div>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php while($iterable_tithes = $result_tithes->fetch_array(MYSQLI_ASSOC)) {
                    echo '<div class="col">';
                    echo '    <div class="card h-100">';
                    echo '        <img src="'.$iterable_tithes['image'].'" class="card-img-top" alt="'.$iterable_tithes['title'].'">';
                    echo '        <div class="card-body text-center">';
                    echo '            <h5 class="card-title">'.$iterable_tithes['title'].'</h5>';
                    echo '            <p class="card-text">$ <span id="amount-'.$iterable_tithes['id'].'">'.$iterable_tithes['amount'].'</span></p>';
                    echo '        </div>';
                    echo '    </div>';
                    echo '</div>';
                }
                ?>
                </div>
                <div class="row">
                    <div class="mx-auto">
                        <div class="mt-2 mx-auto p-4 bg-light">
                            <div class="bg-light">
                                <form action="acctions.php" method="post" id="formtithe" role="form">
                                    <div class="controls">
                                        <div class="row pb-3">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_name">Nombre *</label>
                                                    <input id="name" type="text" name="name"
                                                        class="form-control"
                                                        placeholder="Imgrese su Nombre *"
                                                        required="required" data-error="Nombre obligatorio.">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_lastname">Apellido *</label>
                                                    <input id="lastname" type="text" name="lastname"
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
                                                    class="form-control" placeholder="Ingrese su Email *"
                                                    required="required" data-error="Email tiene que ser válido y es obligatorio.">
                                            </div>
                                        </div>
                                        <div class="row pb-3">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_tithe">Seleccione su Diezmo *</label>
                                                    <select id="tithe" name="tithe_id" class="form-control"
                                                        required="required" data-error="Por favor seleccione uno.">
                                                        <option value="0" selected disabled>--Por favor seleccione uno--
                                                        </option>
                                                        <?php
                                                        $result_amount = $connection->query($sql_tithes);
                                                        while($iterable_amount = $result_amount->fetch_array(MYSQLI_ASSOC)) {
                                                            echo '<option value="'.$iterable_amount['id'].'">'.$iterable_amount['title'].' - '.$iterable_amount['amount'].'</option>';
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_plus">Quiere aportar un poco más?</label>
                                                    <select id="plus" name="plus" class="form-control">
                                                        <option value="0" selected>--</option>
                                                        <option value="100">+ 100</option>
                                                        <option value="5000">+ 5000</option>
                                                        <option value="10000">+ 10000</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row pb-3">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_tithe_multiplier">Diezmo/s a aportar *</label>
                                                    <input type="form_tithe_multiplier" name="tithe_multiplier" id="tithe_multiplier" class="form-control" 
                                                    placeholder="Máximo 10 tickets" min="1" max="10" value="1">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_feline_num">Cuantos Felinos tiene a su cargo?</label>
                                                    <select id="feline_num" name="catsown" class="form-control">
                                                        <option value="-1" selected>--Por favor seleccione una opción--
                                                        </option>
                                                        <option value="0">0</option>
                                                        <?php
                                                        $sql_discount = 'SELECT * FROM discounts';
                                                        $result_discount = $connection->query($sql_discount);
                                                        while($iterable_discount = $result_discount->fetch_array(MYSQLI_ASSOC)) {
                                                            echo '<option value="'.$iterable_discount['percent'].'">'.$iterable_discount['cats'].'</option>';
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row pb-3">
                                            <div class="col">
                                                <p class="p-3 mb-2 bg-success bg-gradient text-white">Total a pagar: <span id="price">$0</span></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <a id="reset" class="w-100 btn btn-danger">Restablecer</a>
                                            </div>
                                            <div class="col">
                                                <a id="resume" class="w-100 btn btn-success">Resumen</a>
                                            </div>
                                            <div class="col">
                                                <button type="submit" name="registration" value="voluntary" class="w-100 btn btn-primary">Enviar!</button>
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