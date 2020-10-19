<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        fieldset{
            border: 3px solid black;
        }
    </style>
</head>
<body>
    <body>
        <form action="../act2/src/functions.php" method="POST">
                 <fieldset>
                        <label>Ingrese el numero: </label><br><br>
                             <input type="number" name="num1"/><br><br>
                        <label for="operacionees">Operaciones:</label><br><br>
                        <select name="operaciones">
                                <option value="">Elige</option>
                                 <option value="factorial">Factorial</option>
                                 <option value="primo">Primo</option>
                        </select>       
                        <input type="submit" value="ENVIAR" id="Comprobar"/><br><br>
                 </fieldset>

                </form>

                <form action="../act2/src/functions.php" method="POST">
                <fieldset>
                        <label>Ingrese el numero: </label><br><br>
                             <input type="number" name="num1"/><br><br>
                             <input type="number" name="num2"/><br><br>
                        <label for="operacionees">Operaciones:</label><br><br>
                        <select name="operaciones">
                                <option value="">Elige</option>
                                 <option value="suma">Sumar</option>
                        </select>       
                        <input type="submit" value="ENVIAR" id="Comprobar"/><br><br>
                </fieldset>

                </form>


    </body>
</html>