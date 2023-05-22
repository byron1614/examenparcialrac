create table cursos(
    cursos_id serial not null,
    cursos_nombre varchar(70) not null,
    cursos_cantidad_de_periodos integer not null,
    cursos_fase_de_imparticion varchar(70) not null,
    cursos_nombre_del_instructor varchar(70) not null,
    curso_creditos varchar(70) not null,
    primary key (cursos_id)
);