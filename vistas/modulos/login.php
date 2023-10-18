<div id="back">
</div>
<div class="login-page">
    <div class="login-box">

        <div class="login-logo">

            <img src="vistas/img/plantilla/logo.png" class="img-responsive" width="100px" height="100px" alt="logo-imagen">

        </div>

        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">

                <p class="login-box-msg">Iniciar Sesión</p>

                <form method="post">

                    <div class="input-group mb-3">

                        <input type="text" class="form-control" placeholder="Usuario" name="ingUsuario" requerid>

                        <div class="input-group-append">

                            <div class="input-group-text">

                                <span class="fas fa-user"></span>

                            </div>
                        </div>

                    </div>

                    <div class="input-group mb-3">

                        <input type="password" class="form-control" placeholder="Contraseña" name="ingPassword" required>

                        <div class="input-group-append">

                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>

                            </div>

                        </div>

                    </div>

                    <div class="row">
                        <!--<div class="col-8">
                    <div class="icheck-primary">
                        <input type="checkbox" id="remember">
                        <label for="remember">
                            Remember Me
                        </label>
                    </div>
                </div>-->
                        <!-- /.col -->
                        <div class="col-4">

                            <button type="submit" class="btn btn-primary btn-block">Ingresar</button>

                        </div>
                        <!-- /.col -->
                    </div>


                    <?php
                    $login = new ControladorUsuarios();
                    $login->ctrIngresoUsuario();

                    ?>

                </form>

                <!--<div class="social-auth-links text-center mb-3">
            <p>- OR -</p>
            <a href="#" class="btn btn-block btn-primary">
                <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
            </a>
            <a href="#" class="btn btn-block btn-danger">
                <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
            </a>
        </div>-->
                <!-- /.social-auth-links -->

                <!--<p class="mb-1">
            <a href="forgot-password.html">I forgot my password</a>
        </p>
        <p class="mb-0">
            <a href="register.html" class="text-center">Register a new membership</a>
        </p>
    </div>-->
                <!-- /.login-card-body -->
            </div>
        </div>

        <!-- /.login-box -->
    </div>