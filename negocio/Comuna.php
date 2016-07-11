<?php
require_once("../datos/Conexion.php");

class Comuna {
    private $id_com;
    private $nombre_com;

    public function __contruct() {}

    public function Comuna($id_com, $nombre_com) {
        $this->id_com=$id_com;
        $this->nombre_com=$nombre_com;
    }
	

    //GETTERS
    public function getId_com() {
        return $this->id_com;
    }

    public function getNombre() {
        return $this->nombre_com;
    }

    //SETTERS
    public function setId_com($id_com) {
        $this->id_cat=$id_cat;
    }

    public function setNombre_com($nombre_com) {
        $this->nombre_com=$nombre_com;
    }

    //CRUD
	public function insertarCategoria() {  
        $objConex= new Conexion();
	    $objConex->abrirConexion();
	    $sql="INSERT INTO COMUNA VALUES('".$this->id_com."','".$this->nombre_com."')";
	    $resul=$objConex->ejecutarTransaccion($sql);	
	    return $resul;
	}

	public function modificarCategoria() {  
        $objConex= new Conexion();
	    $objConex->abrirConexion();
	    $sql="UPDATE COMUNA SET ID_COM='".$this->id_com."',NOMBRE_COM='".$this->nombre_com."' WHERE(ID_COM='".$this->id_com."')";  
	    $resul=$objConex->ejecutarTransaccion($sql);	
	    return $resul;
	}

	public function eliminarComuna($id_com) {  
        $objConex= new Conexion();
	    $objConex->abrirConexion();
	    $sql="DELETE FROM COMUNA WHERE(ID_COM='".$id_com."')";	  
	    $resul=$objConex->ejecutarTransaccion($sql);	
	    return $resul;
	}

	//QUERY
	public function buscarComuna($id_com) {  
        $objConex= new Conexion();
	    $objConex->abrirConexion();
	    $sql="SELECT * FROM COMUNA WHERE(ID_COM='".$id_com."')";	  
	    $vector=$objConex->ejecutarTransaccion($sql);	
	    return $vector;
	}

	public function listarCategoria() {  
        $objConex= new Conexion();
	    $objConex->abrirConexion();
	    $sql="SELECT * FROM COMUNA";	  
	    $matrix=$objConex->ejecutarTransaccion($sql);	
	    return $matrix;
	}
}