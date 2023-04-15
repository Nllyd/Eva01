<?php 

$usuario = $_POST['usuario'];
$direccion = $_POST['direccion'];
$email = $_POST['email'];
$edad = $_POST['edad'];

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pregunta2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            <h2>Bienvenido</h2>
                        </div>
                    </div>
                    <div class="card-body">
                    <p> ¡Hola <?php echo $usuario ?> !</p>
                    <p> Tu direccion es <?php echo $direccion ?> </p>
                    <p> Tienes <?php echo $edad ?> y tu correo es <?php echo $email ?> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</body>
</html>