<?php
require_once("../datos/conexion.php");

class Postulante {
    private $rut_post;
    private $nombre;
    private $apel_pat;
    private $apel_mat;
    private $fecha_nac;
    private $sexo;
    private $hijo;
    private $telefono;
    private $direccion;
    private $sueldo_liquido;
    private $enfermedad_cronica;
    private $id_estado;
    private $id_comuna;
    private $id_edu;
    private $id_renta;
    
    public function __construct(){}
    
    public function Postulante($rut_post, $nombre, $apel_pat, $apel_mat, $fecha_nac, $sexo, $hijo, $telefono, $direccion, $sueldo_liquido, $enfermedad_cronica, $id_estado, $id_comuna, $id_edu, $id_renta){
        $this->rut_post=$rut_post;
        $this->nombre=$nombre;
        $this->apel_pat=$apel_pat;
        $this->apel_mat=$apel_mat;
        $this->fecha_nac=$fecha_nac;
        $this->sexo=$sexo;
        $this->hijo=$hijo;
        $this->telefono=$telefono;
        $this->direccion=$direccion;
        $this->sueldo_liquido=$sueldo_liquido;
        $this->enfermedad_cronica=$enfermedad_cronica;
        $this->id_estado=$id_estado;
        $this->id_comuna=$id_comuna;
        $this->id_edu=$id_edu;
        $this->id_renta=$id_renta;
    }
    
    //GETTERS
    public function getRut_post(){
        return $this->rut_post;
    }
    
    public function getNombre(){
        return $this->nombre;
    }
    
    public function getApel_pat(){
        return $this->apel_pat;
    }
    
    public function getApel_mat(){
        return $this->apel_mat;
    }
    
    public function getFecha_nac(){
        return $this->fecha_nac;
    }
    
    public function getSexo(){
        return $this->sexo;
    }
    
    public function getHijo(){
        return $this->hijo;
    }
    
    public function getTelefono(){
        return $this->telefono;
    }
    
    public function getDireccion(){
        return $this->direccion;
    }
    
    public function getSueldo_liquido(){
        return $this->sueldo_liquido;
    }
    
    public function getEnfermedad_cronica(){
        return $this->enfermedad_cronica;
    }
    
    public function getId_estado(){
        return $this->id_estado;
    }
    
    public function getId_comuna(){
        return $this->id_comuna;
    }
    
    public function getId_edu(){
        return $this->id_edu;
    }
    
    public function getId_renta(){
        return $this->id_renta;
    }
    
    //SETTERS
    public function setRut_post($rut_post){
        $this->rut_post=$rut_post;
    }
    
    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
    
    public function setApel_pat($apel_pat){
        $this->apel_pat=$apel_pat;
    }
    
    public function setApel_mat($apel_mat){
        $this->apel_mat=$apel_mat;
    }
    
    public function setFecha_nac($fecha_nac){
        $this->fecha_nac=$fecha_nac;
    }
    
    public function setSexo($sexo){
        $this->sexo=$sexo;
    }
    
    public function setHijo($hijo){
        $this->hijo=$hijo;
    }
    
    public function setTelefono($telefono){
        $this->telefono=$telefono;
    }
    
    public function setDireccion($direccion){
        $this->direccion=$direccion;
    }
    
    public function setSueldo_liquido($sueldo_liquido){
        $this->sueldo_liquido=$sueldo_liquido;
    }
    
    public function setEnfermedad_cronica($enfermedad_cronica){
        $this->enfermedad_cronica=$enfermedad_cronica;
    }
    
    public function setId_estado($id_estado){
        $this->id_estado=$id_estado;
    }
    
    public function setId_comuna($id_comuna){
        $this->id_comuna=$id_comuna;
    }
    
    public function setId_edu($id_edu){
        $this->id_edu=$id_edu;
    }
    
    public function setId_renta($id_renta){
        $this->id_renta=$id_renta;
    }
    
    //CRUD
    public function insertarPostulante(){
        $objConex = new Conexion();
        $objConex->abrirConexion();
        $sql="INSERT INTO POSTULANTE VALUES('".$this->rut_post."' , '".$this->nombre."', '".$this->apel_pat."', '".$this->apel_mat."', '".$this->fecha_nac."', '".$this->sexo."', ".$this->hijo.", '".$this->telefono."', '".$this->direccion."', ".$this->sueldo_liquido.", '".$this->enfermedad_cronica."', ".$this->id_estado.", ".$this->id_comuna.", ".$this->id_edu.", ".$this->id_renta.")";
        $resul=$objConex->ejecutarTransaccion($sql);
        return $resul;
    }
    
    public function modificarPostulante(){
        $objConex= new Conexion();
        $objConex->abrirConexion();
        $sql="UPDATE POSTULANTE SET RUT_POST='".$this->rut_post."', NOMBRE='".$this->nombre."', APEL_PAT='".$this->apel_pat."', APEL_MAT='".$this->apel_mat."', FECHA_NAC='".$this->fecha_nac."', SEXO='".$this->sexo."', HIJO=".$this->hijo.", TELEFONO='".$this->telefono."', DIRECCION='".$this->direccion."', SUELDO_LIQUIDO=".$this->sueldo_liquido.", ENFERMEDAD_CRONICA='".$this->enfermedad_cronica."', ID_ESTADO=".$this->id_estado.", ID_COMUNA=".$this->id_comuna.", ID_EDU=".$this->id_edu.", ID_RENTA=".$this->id_renta." WHERE(RUT_POST='".$this->rut_post."')";
        $resul=$objConex->ejecutarTransaccion($sql);
        return $resul;
    }
    
    public function eliminarPostulante(){
        $objConex= new Conexion();
        $objConex->abrirConexion();
        $sql="DELETE FROM POSTULANTE WHERE(RUT_POST='".$this->rut_post."')";
        $resul=$objConex->ejecutarTransaccion($sql);
        return $resul;
    }
    
    //QUERY
    public function buscarPostulante(){
        $objConex= new Conexion();
	    $objConex->abrirConexion();
	    $sql="SELECT * FROM POSTULANTE WHERE(RUT_POST='".$rut_post."')";	  
	    $vector=$objConex->ejecutarTransaccion($sql);	
	    return $vector;
    }
    
    public function listarPostulante() {  
        $objConex= new Conexion();
	    $objConex->abrirConexion();
	    $sql="SELECT * FROM POSTULANTE";	  
	    $matrix=$objConex->ejecutarTransaccion($sql);	
	    return $matrix;
	}
}
    
?>