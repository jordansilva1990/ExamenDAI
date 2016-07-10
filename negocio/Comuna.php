<?php
require_once("../datos/Conexion.php");

class Categoria {
    private $id_com;
    private $nombre;

    public function __contruct() {}

    public function Categoria($id_com, $nombre) {
        $this->id_com=$id_com;
        $this->nombre=$nombre;
    }
	

    //GETTERS
    public function getId_com() {
        return $this->id_com;
    }

    public function getNombre() {
        return $this->nombre;
    }

    //SETTERS
    public function setId_com($id_com) {
        $this->id_cat=$id_cat;
    }

    public function setNombre($nombre) {
        $this->nombre=$nombre;
    }

    //CRUD
	public function insertarCategoria() {  
        $objConex= new Conexion();
	    $objConex->abrirConexion();
	    $sql="INSERT INTO COMUNA VALUES('".$this->id_com."','".$this->nombre."')";
	    $resul=$objConex->ejecutarTransaccion($sql);	
	    return $resul;
	}

	public function modificarCategoria() {  
        $objConex= new Conexion();
	    $objConex->abrirConexion();
	    $sql="UPDATE COMUNA SET ID_COM='".$this->id_com."',NOMBRE='".$this->nombre."' WHERE(ID_COM='".$this->id_com."')";  
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