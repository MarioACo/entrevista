<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Generales</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body class="m-0 vh-100 row justify-content-center align-items-center">
    
    <div class="container col-center p-5 ">
        <div class="card" style="width: 40rem;">
            <div class="card-body">
                <div class="form-group">
                    <form action="controlador/datos_generales.php" method="POST">
                        <ul class="formulario">
                            <ol>
                                <label for="name">Nombre:</label>
                                <input type="text" id="name" name="name" require class="form-control" aria-label="Text input with segmented dropdown button">
                            </ol>
                            <ol>
                                <label for="age">Edad:</label>
                                <input type="number" id="age" name="age" require class="form-control" aria-label="Text input with segmented dropdown button">
                            </ol>
                            <ol>
                                <label for="gender">Genero:</label>
                                <input type="text" id="gender" name="gender" require class="form-control" aria-label="Text input with segmented dropdown button">
                            </ol>
                            <ol>
                                <label for="address">Direccion:</label>
                                <input type="email" id="address" name="address" require class="form-control" aria-label="Text input with segmented dropdown button">
                            </ol>
                            <ol>
                                <label for="country">Pais:</label>
                                <select name="country" id="country" class="custom-select">
                                    <option value="">Elige tu pais</option>
                                    <option value="MX">Mexico</option>
                                    <option value="EUA">Estados Unidos</option>
                                </select>
                            </ol>
                            <ol>
                                <label for="state">Estado:</label>
                                <select name="state" id="state" class="custom-select">
                                    <option value="">Apareceran los estados dependiendo del pais elegido</option>
                                </select>
                            </ol>
                        </ul>
                        <button type="submit" id="button_info" type="button" class="btn btn-info">Enviar datos</button>
                    </form>
                </div>

            </div>
        </div>


    </div>



    <script src="controller/controller_info.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

</body>

</html>