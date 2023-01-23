<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        body{
            background: #1097E4;
            background: linear-gradient(to right, #86C6EB, #1097E4);
        }
        .bg{
            background-image: url('Public/img/imglogin2.jpg');
            background-position: center center;
            background-size:cover;
        }
    </style>
</head>
<body>
    <div class="container w-75 bg-primary mt-5 rounded shadow">
        <div class="row align-items-stretch">
            <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded"></div>
            <div class="col bg-white p-5 rounded-end" >
                <div class="text-end">
                    <img src="" alt="">
                </div>
                <h2 class="fw-bold text_center py-5 text-center p-3">Inicio de sesión</h2>
                <!-- LOGIN -->
                <form action="Usuario/Controlador/login.php" method="POST">
                    <div class="mb-4">
                        <label for="usuario" class="form-label"><i class="bi bi-person"></i> Usuario</label>
                        <input type="text" name="usuario" placeholder="Usuario..." class="form-control">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label"><i class="bi bi-lock"></i> Contraseña</label>
                        <input type="password" name="password" placeholder="Contraseña..." class="form-control">
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                    </div>
                    <div class="my-3">
                        <span>No tienes cuenta? <a href="register.php">Registrate</a></span> <br>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>