<?php
require 'Conexion.php';

class Producto extends Conexion{
    public $cursos_id;
    public $cursos_nombre;
    public $cursos_cantidad_de_periodos;
    public $cursos_fase_de_imparticion;
    public $cursos_nombre_del_instructor;
    public $cursos_creditos;


    public function __construct($args = [] )
    {
        $this->cursos_id = $args['cursos_id'] ?? null;
        $this->cursos_nombre = $args['cursos_nombre'] ?? '';
        $this->cursos_cantidad_de_periodos = $args['cursos_precio'] ?? '';
        $this->cursos_situacion = $args['cursos_situacion'] ?? '';
    }

    public function guardar(){
        $sql = "INSERT INTO cursoss(cursos_nombre, producto_precio) values('$this->producto_nombre','$this->producto_precio')";
        $resultado = self::ejecutar($sql);
        return $resultado;
    }
}