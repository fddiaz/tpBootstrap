<main class="container">
    <div class="row justify-content-center">
        <div class="col-4 mt-5 ">
            <form action="validar.php" method="post" class="form-signin mt-5">
                <div class="text-center mb-4">
                    <img class="mb-4" src="./templates/media/svg/logo.svg" alt="" width="86" height="86">
                    <h1 class="h3 mb-3 font-weight-normal">Login de usuarios</h1>
                    <p>
                        Este login esta pensado para usaurios y admininstradores del sistema, a los cuales nuestros reyes han tenido el honor de designar.
                    </p>
                </div>
                <div class="pt-4">
                    <div class="form-label-group">
                        <input type="text" name="username" id="inputUsername" class="form-control" placeholder="Usuario" required autofocus>
                        <label for="inputUsername">Nombre de usuario</label>
                    </div>
                    <div class="form-label-group mt-2">
                        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Contraseña" required>
                        <label for="inputPassword">Contraseña</label>
                    </div>
                    <div class="checkbox mt-3">
                        <label>
                            <input type="checkbox" value="remember-me"> Recuerdame
                        </label>
                    </div>
                </div>
                <div class="mt-3 mb-lg-5 text-muted text-center">
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
                </div>
            </form>
        </div>
    </div>
</main>