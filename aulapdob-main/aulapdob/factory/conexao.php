<?php
class caminho{
    public static $usuario = "root";
    public static $senha = "";
    public static $connect = null;
    private static function Conectar(){
        try {
            if(self::$connect == null){
                self::$connect = new
                PDO('mysql:
                host=localhost;
                dbname=bdmarvelb;',
                self::$usuario,self::$senha);
            };
        } catch (Exception $ex){
            echo 'Mensagem: ' . 
            $ex->getMessage();
            die;
        }
        return self::$connect;
    }
    public function getConn(){
        return self::Conectar();
    }
}
?>