<?php

class Fruta{

var $idproducto;
var $nomproducto;
var $descripcion;
var $cantidad;
var $tipo;

       function VerificaProducto(){
        $oConn=new Conexion();
        
        if ($oConn->Conectar())
            $db=$oConn->objconn;
        else
            return false;
        
        $sql="SELECT * FROM fruta WHERE nomproducto='$this->nombre' ";
        
        $resultado=$db->query($sql);
               
        if ($resultado->num_rows>=1)
            return true;
        else
            return false;
        
    }
        function MostrarFruta(){
        $oConn=new Conexion();
        
        if ($oConn->Conectar())
            $db=$oConn->objconn;
        else
            return false;
        
        $sql="SELECT * FROM producto WHERE tipo='fruta' ";
        
        $resultado=$db->query($sql);
               
        if ($resultado->num_rows>=1)
            return true;
        else
            return false;
        
    }
    
        function MostrarVerdura(){
            $oConn=new Conexion();
            
            if($oConn->Conectar())
                $db=$oConn->objconn;
        else
            return false;
        
        $sql="SELECT FROM producto WHERE tipo='verdura'";
        
        $resultado=$db->query($sql);
               
        if ($resultado->num_rows>=1)
            return true;
        else
            return false;
    
        }
        
                function MostrarSeta(){
        $oConn=new Conexion();
        
        if ($oConn->Conectar())
            $db=$oConn->objconn;
        else
            return false;
        
        $sql="SELECT * FROM producto WHERE tipo='seta' ";
        
        $resultado=$db->query($sql);
               
        if ($resultado->num_rows>=1)
            return true;
        else
            return false;
        
    }
    
            function MostrarDeli(){
        $oConn=new Conexion();
        
        if ($oConn->Conectar())
            $db=$oConn->objconn;
        else
            return false;
        
        $sql="SELECT * FROM producto WHERE tipo='deli' ";
        
        $resultado=$db->query($sql);
               
        if ($resultado->num_rows>=1)
            return true;
        else
            return false;
        
    }
}