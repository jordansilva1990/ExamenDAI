<?php
require_once("../datos/conexion.php");

class Usuario {
    private $rut_usu;
    private $nombre_usu;
    private $apel_pat;
    private $apel_mat;
    private $pass;

    public function __construct() {}

    public function Usuario($rut_usu, $nombre_usu, $apel_pat, $apel_mat, $pass) {
        $this->rut_usu=$rut_usu;
        $this->nombre_usu=$nombre_usu;
        $this->apel_pat=$apel_pat;
        $this->apel_mat=$apel_mat;
        $this->pass=$pass;
    }


    //GETTERS
    public function getRut_usu() {
        return $this->rut_usu;
    }

    public function getNombre_usu() {
        return $this->nombre_usu;
    }

    public function getApel_pat() {
        return $this->apel_pat;
    }

    public function getApel_mat() {
        return $this->apel_mat;
    }

    public function getPass(){
        return $this->pass;
    }

    //SETTERS
    public function setRut_usu($rut_usu) {
        $this->rut_usu=$rut_usu;
    }

    public function setNombre_usu($nombre_usu) {
        $this->nombre_usu=$nombre_usu;
    }

    public function setApel_pat($apel_pat) {
        $this->apel_pat=$apel_pat;
    }

    public function setApel_mat($apel_mat) {
        $this->apel_mat=$apel_mat;
    }

    public function setPass($pass){
        $this->pass=$pass;
    }

    //CRUD
	public function insertarUsuario() {
        $objConex= new Conexion();
	    $objConex->abrirConexion();
	    $sql="INSERT INTO USUARIO VALUES(".$this->rut_usu.",'".$this->nombre_usu."', '".$this->apel_pat."', '".$this->apel_mat."', '".$this->pass."')";
	    $resul=$objConex->ejecutarTransaccion($sql);
	    return $resul;
	}

	public function modificarUsuario() {
        $objConex= new Conexion();
	    $objConex->abrirConexion();
	    $sql="UPDATE USUARIO SET RUT_USU=".$this->rut_usu.",NOMBRE_USU='".$this->nombre_usu."', APEL_PAT='".$this->apel_pat."', APEL_MAT='".$this->apel_mat."', PASS='".$this->pass."' WHERE(RUT_USU='".$this->rut_usu."')";
	    $resul=$objConex->ejecutarTransaccion($sql);
	    return $resul;
	}

	public function eliminarUsuario() {
        $objConex= new Conexion();
	    $objConex->abrirConexion();
	    $sql="DELETE FROM USUARIO WHERE(RUT_USU='".$rut_usu."')";
	    $resul=$objConex->ejecutarTransaccion($sql);
	    return $resul;
	}

	//QUERY
	public function buscarUsuario() {
        $objConex= new Conexion();
	    $objConex->abrirConexion();
	    $sql="SELECT * FROM USUARIO WHERE(RUT_USU='".$rut_usu."')";
	    $vector=$objConex->ejecutarTransaccion($sql);
	    return $vector;
	}

	public function listarUsuario() {
        $objConex= new Conexion();
	    $objConex->abrirConexion();
	    $sql="SELECT * FROM USUARIO";
	    $matrix=$objConex->ejecutarTransaccion($sql);
	    return $matrix;
	}
    
    public function login() {
        $objConex= new Conexion();
        $objConex->abrirConexion();
        $sql="SELECT * FROM USUARIO WHERE NOMBRE_USU='".$this->nombre_usu."' AND PASS='".$this->pass."';";
        $vector=$objConex->ejecutarTransaccion($sql);
        return $vector;
    }
}
?>
