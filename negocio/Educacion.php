<?php
require_once("../datos/Conexion.php");

class Educacion {
    private $id_edu;
    private $nombre_edu;

    public function __contruct() {}

    public function Educacion($id_edu, $nombre_edu) {
        $this->id_edu=$id_edu;
        $this->nombre_edu=$nombre_edu;
    }
	

    //GETTERS
    public function getId_edu() {
        return $this->id_edu;
    }

    public function getNombre_edu() {
        return $this->nombre_edu;
    }

    //SETTERS
    public function setId_edu($id_edu) {
        $this->id_edu=$id_edu;
    }

    public function setNombre_edu($nombre_edu) {
        $this->nombre_edu=$nombre_edu;
    }

    //CRUD
	public function insertarCategoria() {  
        $objConex= new Conexion();
	    $objConex->abrirConexion();
	    $sql="INSERT INTO EDUCACION VALUES('".$this->id_edu."','".$this->nombre_edu."')";
	    $resul=$objConex->ejecutarTransaccion($sql);	
	    return $resul;
	}

	public function modificarEducacion() {  
        $objConex= new Conexion();
	    $objConex->abrirConexion();
	    $sql="UPDATE EDUCACION SET ID_EDU='".$this->id_edu."',NOMBRE_EDU='".$this->nombre_edu."' WHERE(ID_EDU='".$this->id_edu."')";  
	    $resul=$objConex->ejecutarTransaccion($sql);	
	    return $resul;
	}

	public function eliminarEducacion($id_edu) {  
        $objConex= new Conexion();
	    $objConex->abrirConexion();
	    $sql="DELETE FROM EDUCACION WHERE(ID_EDU='".$id_edu."')";	  
	    $resul=$objConex->ejecutarTransaccion($sql);	
	    return $resul;
	}

	//QUERY
	public function buscarEducacion($id_edu) {  
        $objConex= new Conexion();
	    $objConex->abrirConexion();
	    $sql="SELECT * FROM EDUCACION WHERE(ID_EDU='".$id_edu."')";	  
	    $vector=$objConex->ejecutarTransaccion($sql);	
	    return $vector;
	}

	public function listarCategoria() {  
        $objConex= new Conexion();
	    $objConex->abrirConexion();
	    $sql="SELECT * FROM EDUCACION";	  
	    $matrix=$objConex->ejecutarTransaccion($sql);	
	    return $matrix;
	}
}