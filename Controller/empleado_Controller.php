<?php
require '../Models/crudEmpleado.php';

/*$e=empleado*/
$objeto =new CrudEmpleado();


if(isset($_REQUEST["guardar"])){
    $e=new Empleado($_REQUEST["id_empleado"],$_REQUEST["nombre"],$_REQUEST["id_dep"]);
    $objeto->insertarEmpleado($e);
    $men="Registro guardado exitosamente";
}
if(isset($_REQUEST["modificar"])){
    $e=new Empleado($_REQUEST["id_empleado"],$_REQUEST["nombre"],$_REQUEST["id_dep"]);
    $objeto->modificarEmpleado($e);
    $men="Registro modificado exitosamente";
}
if(isset($_REQUEST["eliminar"])){
    $e=new Empleado($_REQUEST["id_empleado"],$_REQUEST["nombre"],$_REQUEST["id_dep"]);
    $objeto->eliminarEmpleado($e);
    $men="Registro eliminado exitosamente";
}





if(isset($_REQUEST["m"])){
    $r1=$objeto->mostrarEmpleado();
    $r2=$objeto->mostrarDepartamento();
    $a1=array();
    $a2=array();
    while($row =mysqli_fetch_array($r1)){
        $a1[]=$row;
    }
    while($row=mysqli_fetch_array($r2)){
        $a2[]=$row;
    }
    $json1=json_encode($a1);
    $json2=json_encode($a2);

}
header("Location:../Views/index.php?emp=$json1&dep=$json2&res=$men");
?>