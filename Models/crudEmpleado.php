<?php
require 'conexion.php';
require 'empleado.php';


class CrudEmpleado extends Conexion{

    function __construct()
    {
        parent::__construct();
    }
    function mostrarEmpleado(){
        $res=$this->con->query("SELECT * FROM empleado");
        return $res;
    }
    function mostrarDepartamento(){
        $res=$this->con->query("SELECT * FROM departamento");
        return $res;
    }
    function insertarEmpleado($e){
        $para=$this->con->prepare("INSERT INTO empleado(id_empleado, nombre, id_dep) VALUES(?,?,?)");
        $para->bind_param('sss', $a, $b, $c);
        $a='';
        $b=$e->getNombre();
        $c=$e->getId_dep();
        $para->execute();
    }
    function modificarEmpleado($e){
        $para=$this->con->prepare("UPDATE empleado SET nombre=?, id_dep=? WHERE id_empleado=?");
        $para->bind_param('sss', $a, $b, $C);
        $a=$e->getNombre();
        $b=$e->getId_dep();
        $c=$e->getId_empleado();
        $para->execute();
    }
    function eliminarEmpleado($e){
        $para=$this->con->prepare("DELETE FROM empleado WHERE id_empleado=?");
        $para->bind_param('s', $a);
        $a=$e->getId_empleado();
        $para->execute();
    }
}

?>
