<?php
require_once("../datos/conexion.php");

class Estado_Civil {
    private $id_estado;
    private $nombre_estado;

    public function __contruct() {}

    public function Estado_Civil($id_estado, $nombre_estado) {
        $this->id_estado=$id_estado;
        $this->nombre_estado=$nombre_estado;
    }


    //GETTERS
    public function getId_estado() {
        return $this->id_estado;
    }

    public function getNombre_estado() {
        return $this->nombre_estado;
    }

    //SETTERS
    public function setId_estado($id_estado) {
        $this->id_estado=$id_estado;
    }

    public function setNombre_estado($nombre_estado) {
        $this->nombre_estado=$nombre_estado;
    }

    //CRUD
	public function insertarEstado() {
        $objConex= new Conexion();
	    $objConex->abrirConexion();
	    $sql="INSERT INTO ESTADO VALUES('".$this->id_estado."','".$this->nombre_estado."')";
	    $resul=$objConex->ejecutarTransaccion($sql);
	    return $resul;
	}

	public function modificarEstado() {
        $objConex= new Conexion();
	    $objConex->abrirConexion();
	    $sql="UPDATE ESTADO SET ID_ESTADO='".$this->id_estado."',NOMBRE_ESTADO='".$this->nombre_estado."' WHERE(ID_ESTADO='".$this->id_estado."')";
	    $resul=$objConex->ejecutarTransaccion($sql);
	    return $resul;
	}

	public function eliminarEstado($id_estado) {
        $objConex= new Conexion();
	    $objConex->abrirConexion();
	    $sql="DELETE FROM ESTADO WHERE(ID_ESTADO='".$id_estado."')";
	    $resul=$objConex->ejecutarTransaccion($sql);
	    return $resul;
	}

	//QUERY
	public function buscarEstado($id_estado) {
        $objConex= new Conexion();
	    $objConex->abrirConexion();
	    $sql="SELECT * FROM ESTADO WHERE(ID_EDU='".$id_estado."')";
	    $vector=$objConex->ejecutarTransaccion($sql);
	    return $vector;
	}

	public function listarEstado() {
        $objConex= new Conexion();
	    $objConex->abrirConexion();
	    $sql="SELECT * FROM ESTADO";
	    $matrix=$objConex->ejecutarTransaccion($sql);
	    return $matrix;
	}
}
?>
