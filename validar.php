<!DOCTYPE html>
<html lang="es">
    <?php include("views/head.php"); ?>
    <body>
        <!-- Start header --->
        <?php include("views/header.php"); ?>
        <!-- End header -->
        <!-- Start content-->
        <main class="container">
            <div class="row justify-content-center">
                <div class="col-8 mt-5 mb-5">
                <?php 
                if ($_POST['username'] == "admin" and $_POST['password'] == 1234) {
                    echo("
                    <h1>Bienvenido Administrador</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae dicta ducimus similique nesciunt, quis amet laboriosam consequuntur perspiciatis, ex vero quaerat explicabo delectus illo numquam! Corrupti, exercitationem! Nesciunt, labore voluptatem.</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis nam optio impedit perspiciatis beatae, magnam ratione atque fugit aut tempora asperiores reprehenderit facilis, quam nostrum nobis nisi natus officiis illo.</p>
                    ");
                ?>
                    <div class="d-flex flex-column flex-md-row p-4 gap-4 py-md-5 align-items-center justify-content-center">
                        <div class="dropdown-menu position-static d-flex flex-column flex-lg-row align-items-stretch justify-content-start p-3 rounded-3 shadow-lg" data-bs-theme="light">
                            <nav class="col-lg-8">
                            <ul class="list-unstyled d-flex flex-column gap-2">
                                <li>
                                <a href="#" class="btn btn-hover-light rounded-2 d-flex align-items-start gap-2 py-2 px-3 lh-sm text-start">
                                    <svg class="bi" width="24" height="24"><use xlink:href="#image-fill"></use></svg>
                                    <div>
                                    <strong class="d-block">Main product</strong>
                                    <small>Take a tour through the product</small>
                                    </div>
                                </a>
                                </li>
                                <li>
                                <a href="#" class="btn btn-hover-light rounded-2 d-flex align-items-start gap-2 py-2 px-3 lh-sm text-start">
                                    <svg class="bi" width="24" height="24"><use xlink:href="#music-note-beamed"></use></svg>
                                    <div>
                                    <strong class="d-block">Another product</strong>
                                    <small>Explore this other product we offer</small>
                                    </div>
                                </a>
                                </li>
                                <li>
                                <a href="#" class="btn btn-hover-light rounded-2 d-flex align-items-start gap-2 py-2 px-3 lh-sm text-start">
                                    <svg class="bi" width="24" height="24"><use xlink:href="#question-circle"></use></svg>
                                    <div>
                                    <strong class="d-block">Support</strong>
                                    <small>Get help from our support crew</small>
                                    </div>
                                </a>
                                </li>
                            </ul>
                            </nav>
                            <div class="d-none d-lg-block vr mx-4 opacity-10">&nbsp;</div>
                            <hr class="d-lg-none">
                            <div class="col-lg-auto pe-3">
                            <nav>
                                <ul class="d-flex flex-column gap-2 list-unstyled small">
                                <li><a href="#" class="link-offset-2 link-underline link-underline-opacity-25 link-underline-opacity-75-hover">Documentation</a></li>
                                <li><a href="#" class="link-offset-2 link-underline link-underline-opacity-25 link-underline-opacity-75-hover">Use cases</a></li>
                                <li><a href="#" class="link-offset-2 link-underline link-underline-opacity-25 link-underline-opacity-75-hover">API status</a></li>
                                <li><a href="#" class="link-offset-2 link-underline link-underline-opacity-25 link-underline-opacity-75-hover">Partners</a></li>
                                <li><a href="#" class="link-offset-2 link-underline link-underline-opacity-25 link-underline-opacity-75-hover">Resources</a></li>
                                </ul>
                            </nav>
                            </div>
                        </div>
                    </div>
                <?php
                    
                } elseif ($_POST['username'] == "usuario" and $_POST['password'] == "usuario") {
                    echo("
                    <h1>Bienvenido Usuario</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae dicta ducimus similique nesciunt, quis amet laboriosam consequuntur perspiciatis, ex vero quaerat explicabo delectus illo numquam! Corrupti, exercitationem! Nesciunt, labore voluptatem.</p>
                    ");
                } else {
                    echo("
                    <h1>404</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae dicta ducimus similique nesciunt, quis amet laboriosam consequuntur perspiciatis, ex vero quaerat explicabo delectus illo numquam! Corrupti, exercitationem! Nesciunt, labore voluptatem.</p>
                    ");
                }
                ?>
            </div>
        </main>
        <!-- End content -->
        <!-- Start Footer -->
        <?php include("views/footer.php"); ?>
        <!-- End Footer -->
    </body>
</html>

