<?php

class Fruta{

var $idfruta;
var $nomfruta;
var $descripcion;

       function VerificaFruta(){
        $oConn=new Conexion();
        
        if ($oConn->Conectar())
            $db=$oConn->objconn;
        else
            return false;
        
        $sql="SELECT * FROM fruta ORDER BY nomfruta ";
        
        $resultado=$db->query($sql);
               
        if ($resultado->num_rows>=1)
            return true;
        else
            return false;
        
    }
    
        function MostrarFruta(){
            $oConn=new Conexion();
            
            if($oConn->Conectar())
                $db=$oConn->objconn;
        else
            return false;
        
        $sql="SELECT FROM fruta WHERE nomfruta='$this->nomfruta";
        
        }
}
    

  
