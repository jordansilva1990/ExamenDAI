<?php
require_once("../datos/conexion.php");

class Renta {
    private $id_renta;
    private $nombre_renta;

    public function __contruct() {}

    public function Renta($id_renta, $nombre_renta) {
        $this->id_renta=$id_renta;
        $this->nombre_renta=$nombre_renta;
    }


    //GETTERS
    public function getId_renta() {
        return $this->id_renta;
    }

    public function getNombre_renta() {
        return $this->nombre_renta;
    }

    //SETTERS
    public function setId_renta($id_renta) {
        $this->id_renta=$id_renta;
    }

    public function setNombre_renta($nombre_renta) {
        $this->nombre_renta=$nombre_renta;
    }

    //CRUD
	public function insertarRenta() {
        $objConex= new Conexion();
	    $objConex->abrirConexion();
	    $sql="INSERT INTO RENTA VALUES('".$this->id_renta."','".$this->nombre_renta."')";
	    $resul=$objConex->ejecutarTransaccion($sql);
	    return $resul;
	}

	public function modificarRenta() {
        $objConex= new Conexion();
	    $objConex->abrirConexion();
	    $sql="UPDATE RENTA SET ID_RENTA='".$this->id_renta."',NOMBRE_RENTA='".$this->nombre_renta."' WHERE(ID_RENTA='".$this->id_renta."')";
	    $resul=$objConex->ejecutarTransaccion($sql);
	    return $resul;
	}

	public function eliminarRenta() {
        $objConex= new Conexion();
	    $objConex->abrirConexion();
	    $sql="DELETE FROM RENTA WHERE(ID_RENTA='".$id_renta."')";
	    $resul=$objConex->ejecutarTransaccion($sql);
	    return $resul;
	}

	//QUERY
	public function buscarRenta() {
        $objConex= new Conexion();
	    $objConex->abrirConexion();
	    $sql="SELECT * FROM RENTA WHERE(ID_RENTA='".$id_renta."')";
	    $vector=$objConex->ejecutarTransaccion($sql);
	    return $vector;
	}

	public function listarRenta() {  
        $objConex= new Conexion();
	    $objConex->abrirConexion();
	    $sql="SELECT * FROM RENTA";
	    $matrix=$objConex->ejecutarTransaccion($sql);
	    return $matrix;
	}
}
?>
