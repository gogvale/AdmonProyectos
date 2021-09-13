<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Register - Carta_2</title>
    <meta name="description" content="Proyecto Administracion de Proyectos">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Newsletter-Subscription-Form.css">
</head>

<body class="bg-gradient-primary">
    <div class="container">
        <div class="card shadow-lg o-hidden border-0 my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-flex">
                        <div class="flex-grow-1 bg-register-image" style="background-image: url(&quot;assets/img/dogs/Registro.jpeg&quot;);"></div>
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h4 class="text-dark mb-4">Crea tu cuenta!</h4>
                            </div>
                            <form class="user" action="dashboard.php" method="post">
                                <div class="row" style="margin: 1em 0;">
                                    <div class="col"><input class="form-control form-control-user" type="text" id="exampleFirstName" placeholder="Nombre Completo" name="complete_name"></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-6" style="margin-bottom: 1em;"><input class="form-control form-control-user" type="text" id="exampleFirstName" placeholder="Compañía" name="company" style="margin-bottom: 1em;"></div>
                                    <div class="col-sm-12 col-md-12 col-lg-6" style="margin-bottom: 1em;"><input class="form-control form-control-user" type="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Correo" name="email" required="" style="margin-bottom: 1em;"></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-6" style="margin-bottom: 1em;"><input class="form-control form-control-user" type="password" id="examplePasswordInput" placeholder="Contraseña" name="password" required="" style="margin-bottom: 1em;"></div>
                                    <div class="col-sm-12 col-md-12 col-lg-6" style="margin-bottom: 1em;"><input class="form-control form-control-user" type="password" id="exampleRepeatPasswordInput" placeholder="Confirmar Contraseña" name="confirm_password" required=""></div>
                                </div><button class="btn btn-primary d-block btn-user w-100" type="submit">Registrarse</button>
                                <hr>
                            </form>
                            <div class="text-center"></div>
                            <div class="text-center"><a class="small" href="login.html">Ya tengo una cuenta</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>