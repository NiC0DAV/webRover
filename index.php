<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/main.js"></script>

    <title>Login.php</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Rover Agricultor</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        </div>
    </nav>


    <div class="container">
    <div class="col-md-7 center mx-auto mt-5">
            <div class="card">
                <br>
                <h3 class="mx-auto">Iniciar Sesión</h3>
                <form action="" class="">
                <div class="form-group row">
                    <div class="ml-4">
                        <label class="" for="username">Usuario</label>
                    </div>
                    <div class="input col-md-11 ml-4">
                            <input id="username" class="form-control" type="text" placeholder="Usuario" name="username">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="ml-4">
                            <label class="ml-2" for="pass">Contraseña</label>
                        </div>
                        <div class="input col-md-11 ml-4">
                            <input id="pass" class="form-control" type="password" placeholder="Contraseña" name="pass">
                            <input type="button" id="showpass"  value="Mostrar Contraseña" class="mt-1 btn btn-warning" >
                        </div>
                    </div> 
                    <div class="form-group row">
                        <!-- <button type="submit" class="btn btn-success mx-auto col-md-5">Iniciar Sesión</button> -->
                        <div class="mx-auto">
                            <input type="submit" class="btn btn-success " value="Iniciar Sesión">
                        </div>
                    </div>
                    </form>
                    <br>
                </div>
            </div>
        </div>
    </div>
</body>
</html>