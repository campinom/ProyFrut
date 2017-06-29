<?php
class Cliente{
    
    var $idcliente;
    var $nombre;
    var $clave;
    
    function __construct($cli="",$clave=""){
        $this->nombre=$cli;
        $this->clave=$clave;
    }
    
    /*Valida la existencia del usuario*/
    function VerificaUsuario(){
        $oConn=new Conexion();
        
        if ($oConn->Conectar())
            $db=$oConn->objconn;
        else
            return false;
        
        $sql="SELECT * FROM cliente WHERE nomusuario='$this->nombre'";
        
        $resultado=$db->query($sql);
               
        if ($resultado->num_rows>=1)
            return true;
        else
            return false;
        
    }
    
    function VerificaUsuarioClave(){
        $oConn=new Conexion();
        
        if ($oConn->Conectar())
            $db=$oConn->objconn;
        else
            return false;
        
        $clavemd5=md5($this->clave);
        $sql="SELECT * FROM cliente WHERE nomcliente='$this->nombre' and pwdcliente='$clavemd5'";
              
        $resultado=$db->query($sql);
               
        if ($resultado->num_rows>=1)
            return true;
        else
            return false;
        
    }
    
    function VerificaLocal(){
        $usu="cliente";
        $key="cliente";
        
        if ($this->nombre==$cli && $this->clave==$key)
            return true;
        else
            return false;
    
    }
    
}