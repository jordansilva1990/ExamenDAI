<?php
require_once("../datos/conexion.php");

class Solicitud {
    private $id_solicitud;
    private $estado;
    private $fecha;
    private $rut_post;

    public function __construct() {}

    public function Solicitud($id_solicitud, $estado, $fecha, $rut_post) {
        $this->id_solicitud=$id_solicitud;
        $this->estado=$estado;
        $this->fecha=$fecha;
        $this->rut_post=$rut_post;
    }


    //GETTERS
    public function getId_solicitud() {
        return $this->id_solicitud;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function getfecha() {
        return $this->fecha;
    }

    public function getRut_post() {
        return $this->rut_post;
    }

    //SETTERS
    public function setId_solicitud($id_solicitud) {
        $this->id_solicitud=$id_solicitud;
    }

    public function setEstado($estado) {
        $this->estado=$estado;
    }

    public function setFecha($fecha) {
        $this->fecha=$fecha;
    }

    public function setRut_post($rut_post) {
        $this->rut_post=$rut_post;
    }

    //CRUD
	public function insertarSolicitud() {
        $objConex= new Conexion();
	    $objConex->abrirConexion();
	    $sql="INSERT INTO SOLICITUD VALUES(".$this->id_solicitud.",'".$this->estado."', '".$this->fecha."', '".$this->rut_post."')";
	    $resul=$objConex->ejecutarTransaccion($sql);
	    return $resul;
	}

	public function modificarSolicitud() {
        $objConex= new Conexion();
	    $objConex->abrirConexion();
	    $sql="UPDATE SOLICITUD SET ID_SOLICITUD=".$this->id_solicitud.",ESTADO='".$this->estado."', FECHA='".$this->fecha."', RUT_POST='".$this->rut_post."' WHERE(ID_SOLICITUD='".$this->id_solicitud."')";
	    $resul=$objConex->ejecutarTransaccion($sql);
	    return $resul;
	}

	public function eliminarSolicitud() {
        $objConex= new Conexion();
	    $objConex->abrirConexion();
	    $sql="DELETE FROM SOLICITUD WHERE(ID_SOLICITUD='".$id_solicitud."')";
	    $resul=$objConex->ejecutarTransaccion($sql);
	    return $resul;
	}

	//QUERY
	public function buscarSolicitud() {
        $objConex= new Conexion();
	    $objConex->abrirConexion();
	    $sql="SELECT * FROM SOLICITUD WHERE(ID_SOLICITUD='".$id_solicitud."')";
	    $vector=$objConex->ejecutarTransaccion($sql);
	    return $vector;
	}

	public function listarSolicitud() {
        $objConex= new Conexion();
	    $objConex->abrirConexion();
	    $sql="SELECT * FROM SOLICITUD";
	    $matrix=$objConex->ejecutarTransaccion($sql);
	    return $matrix;
	}
    
    public function verEstado($rut_post) {
        $objConex= new Conexion();
	    $objConex->abrirConexion();
	    $sql="SELECT * ESTADO FROM SOLICITUD WHERE RUT_POST='".$rut_post."';";
	    $resul=$objConex->ejecutarTransaccion($sql);
	    return $resul;
    }
}
?>
