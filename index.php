<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Generales</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <legend>
        <form action="controlador/datos_generales.php" method="POST">
            <ul class="formulario">
                <ol>
                    <label for="name">Nombre:</label>
                    <input type="text" id="name" name="name" require> 
                </ol>
                <ol>
                    <label for="age">Edad:</label>
                    <input type="text" id="age" name="age" require>
                </ol>
                <ol>
                    <label for="gender">Genero:</label>
                    <input type="text" id="gender" name="gender" require>
                </ol>
                <ol>
                    <label for="address">Direccion:</label>
                    <input type="text" id="address" name="address" require>
                </ol>
                <ol>
                    <label for="country">Pais:</label>
                    <select name="country" id="country">
                        <option value="">Elige tu pais</option>
                        <option value="MX">Mexico</option>
                        <option value="EUA">Estados Unidos</option>
                    </select>
                </ol>
                <ol>
                    <label for="state">Estado:</label>
                    <select name="state" id="state">
                        <option value="">Apareceran los estados dependiendo del pais elegido</option>
                    </select>
                </ol>
            </ul>
            <button type="submit" id="button_info" class="boton">Enviar datos</button>
        </form>

    </legend>


    <script src="controller/controller_info.js"></script>

</body>

</html>