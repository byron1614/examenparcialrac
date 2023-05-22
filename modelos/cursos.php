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
        $this->cursos_cantidad_de_periodos = $args['cursos_cantidad_de_periodos'] ?? '';
        $this->cursos_fase_de_imparticion = $args['cursos_fase_de_imparticion'] ?? '';
        $this->cursos_nombre_del_instructor = $args['cursos_nombre_del_instructor'] ?? '';
        $this->cursos_creditos = $args['cursos_creditos'] ?? '';
    }

    public function guardar(){
        $sql = "INSERT INTO cursos(cursos_nombre, cursos_cantidad_de_periodos, cursos_fase_de_imparticion, cursos_nombre_del_instructor, cursos_creditos) VALUES ('$this->cursos_nombre', '$this->cursos_cantidad_de_periodos', '$this->cursos_fase_de_imparticion', '$this->cursos_nombre_del_instructor', '$this->cursos_creditos')";
        $resultado = self::ejecutar($sql);
        return $resultado;
    }
}
//conexion a la base de datos
