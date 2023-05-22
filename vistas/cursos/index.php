<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Cursos de Informatica</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Formulario de Ingreso de Informacion Curso de Informatica</h1>
        <div class="row justify-content-center">
            <form action="/EXAMENPARCIALRAC/controladores/cursos/guardar.php" method="POST" class="col-lg-8 border bg-light p-3">
                <div class="row mb-3">
                    <div class="col">
                        <label for="cursos_nombre">Nombre del curso</label>
                        <input type="text" name="cursos_nombre" id="cursos_nombre" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="cursos_cantiad_de_periodos">Cantidad de Periodos</label>
                        <input type="text" name="cursos_cantiad_de_periodos" id="cursos_cantiad_de_periodos" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="cursos_fase_de_imparticion">Fase en la cual se imparte</label>
                        <input type="text" name="cursos_fase_de_imparticion" id="cursos_fase_de_imparticion" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="cursos_nombre_del_instructor">Nombres del Instructor</label>
                        <input type="text" name="cursos_cantidad_de_periodos" id="cursos_cantidad_de_periodos" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="cursos_dreditos">Creditos correspondientes al curso</label>
                        <input type="text" name="cursos_dreditos" id="cursos_dreditos" class="form-control"required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <button type="submit" class="btn btn-primary w-100">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>