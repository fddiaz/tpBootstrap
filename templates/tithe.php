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
                    <p class="text-white m-0">En el siguiente formulario podrás seleccionar si DIEZMO para a la
                        causa de los Reyes de Internet. Todas las donaciones son <strong>OBLIGATORIAS</strong>.</p>
                </div>
            </div>
            <!-- End call to action -->
            <div class="">
                <p>Nuestros Reyes en su infinita misericordia nos permiten tener un descuento dependiendo de cuantos "Felinos" tengamos a nuestro cargo.</p>
                <p>A continuación se detallan los descuentos:</p>
                <div class="pt-2 pb-3">
                    <ul class="list-group text-center">
                        <li class="list-group-item">1 "Felino/s" a su cuidado - 15%</li>
                        <li class="list-group-item">2 "Felino/s" a su cuidado - 50%</li>
                        <li class="list-group-item">3 "Felino/s" a su cuidado - 80%</li>
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
                    <div class="col">
                        <div class="card h-100">
                            <img src="./templates/media/img/tithe/noble.jpeg" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-title">Noble</h5>
                                <p class="card-text">$ 30.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="./templates/media/img/tithe/caballero.png" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-title">Caballero</h5>
                                <p class="card-text">$ 15.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="./templates/media/img/tithe/campesino.jpeg" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-title">Campesino</h5>
                                <p class="card-text">$ 7500</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="mx-auto">
                        <div class="mt-2 mx-auto p-4 bg-light">
                            <div class="bg-light">
                                <form id="form" role="form" onsubmit="event.preventDefault();">
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
                                                    <input id="lastname" type="text" name="surname"
                                                        class="form-control"
                                                        placeholder="Ingrese su Apellido *"
                                                        required="required" data-error="Apellido es obligatorio.">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row pb-3">
                                            <div class="form-group">
                                                <label for="form_email">Email *</label>
                                                <input id="email" type="email" name="email"
                                                    class="form-control" placeholder="Ingrese su Email *"
                                                    required="required" data-error="Email tiene que ser válido y es obligatorio.">
                                            </div>
                                        </div>
                                        <div class="row pb-3">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_tithe">Seleccione su Diezmo *</label>
                                                    <select id="tithe" name="tithe" class="form-control"
                                                        required="required" data-error="Por favor seleccione uno.">
                                                        <option value="0" selected disabled>--Por favor seleccione uno--
                                                        </option>
                                                        <option value="1">Noble</option>
                                                        <option value="2">Caballero</option>
                                                        <option value="3">Campesino</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_plus">Quiere aportar un poco más?</label>
                                                    <select id="plus" name="plus" class="form-control">
                                                        <option value="0" selected disabled>--</option>
                                                        <option value="1">+ 100</option>
                                                        <option value="2">+ 5000</option>
                                                        <option value="3">+ 10000</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row pb-3">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_tithe_num">Diezmo/s a aportar *</label>
                                                    <input type="form_tithe_num" name="tithe_num" id="tithe_num" class="form-control" 
                                                    placeholder="Máximo 10 tickets" min="1" max="10" value="1">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_feline_num">Cuantos Felinos tiene a su cargo?</label>
                                                    <select id="feline_num" name="feline_num" class="form-control">
                                                        <option value="0" selected disabled>--Por favor seleccione una opción--
                                                        </option>
                                                        <option value="1">0</option>
                                                        <option value="2">1</option>
                                                        <option value="3">2</option>
                                                        <option value="4">3</option>
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
                                                <button id="reset" class="w-100 btn btn-danger">Restablecer</button>
                                            </div>
                                            <div class="col">
                                                <button id="resume" class="w-100 btn btn-success">Resumen</button>
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