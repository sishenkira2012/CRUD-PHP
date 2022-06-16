<?php
if (!isset($_REQUEST["emp"])) {
    header("Location:../Controller/empleado_Controller.php?m=1");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="../Assets/estilo.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kalam:wght@300&display=swap" rel="stylesheet">



    <link rel="icon" href="../Assets/laptop-code-solid.ico">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>





    <title>Trabajo Ex-Aula 2</title>
</head>

<body>
    <header></header>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="../inicio.php">Starlook</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="../inicio.php">Home</a></li>
                <li><a href="../Views/Galeria.php">Galeria</a></li>
                <li class="active"><a href="index.php">Empleados</a></li>

            </ul>
        </div>
    </nav>
    <section class="form-register">
        <h1>FORMULARIO DE REGISTRO DE EMPLEADOS</h1>
        <div class="table-3">
            <form action="../Controller/empleado_Controller.php" id="myform">
                Id<input type="text" name="id_empleado" id="id_empleado" class="Controls" readonly="true">
                Nombre<input type="text" name="nombre" id="nombre" class="Controls">
                <br>
                Departamento<select name='id_dep' id='id_dep' class="Controls">
                    <option></option>
                    <?php
                    if (isset($_REQUEST["dep"])) {
                        $a = json_decode($_REQUEST["dep"]);
                        foreach ($a as $v) {
                            echo "<option value ='$v->id_dep'>$v->nombre</option>";
                        }
                    }
                    ?>

                </select> <br>
                <input type="hidden" name="m">
                <!--name es guardar para crud */ -->
                <button type="reset" value="Nuevo" onclick="$('#g').attr('disabled',false)" class="btn btn-success"><i class="fa-solid fa-circle-check"></i>NUEVO</button>
                <button type="submit" name="guardar" value="Guardar" id='g' disabled="true" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i> Guardar</button>
                <button type="submit" name="modificar" value="modificar" class="btn btn-info"> <i class="fa-solid fa-share"></i>MODIFICAR</button>
                <button type="submit" name="eliminar" value=eliminar" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i>ELIMINAR</button>
            </form>
            <br>

            <div class="row d-flex justify-content-center">
                <table class="table table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>ID Departamento</th>
                        <th>Accion</th>
                    </tr>
                    <?php
                    if (isset($_REQUEST["emp"])) {
                        $d = json_decode($_REQUEST["emp"]);
                        foreach ($d as $v) {
                            echo "<tr>
                        <td>$v->id_empleado</td>
                        <td>$v->nombre</td>
                        <td>$v->id_dep</td>
                        <td>
                          <button class='btn btn-warning'  
                          onclick=$('#id_empleado').val('$v->id_empleado');$('#nombre').val('$v->nombre');$('#id_dep').val('$v->id_dep'); > <i class='fa-solid fa-pen-to-square'></i>Modificar
                          </button>
                          
                        </td>
                        </tr>";
                        }
                    }
                    ?>

                </table>
            </div>
        </div>
    </section>
    <aside></aside>
    <footer></footer>

</body>

</html>