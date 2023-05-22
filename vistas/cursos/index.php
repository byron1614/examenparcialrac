<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Cursos de Informatica</title>
</head>
<style>
body {
            background-color: #f2f2f2;
            background-color: aqua;
        }


        .container {
            max-width: 400px;
            margin: 20vh auto; 
        }

        .form-control {
            border-color: #ccc;
            font-size: 14px;
            padding: 0.375rem 0.75rem;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            font-size: 14px;
            padding: 0.375rem 0.75rem;
        }

        .btn-primary:hover {
            background-color: #0069d9;
            border-color: #0062cc;
        }

        .custom-heading {
            background-color: blue; 
            color: white; 
            font-family: "Arial", sans-serif; 
            padding: 1px; 
            text-align: center; 
            display: flex; 
            
        }    
    </style>
<body>
    <div class="container">
        <h4 class="custom-heading">Formulario de Ingreso de Informacion Curso de Informatica</h4>
        <div class="row justify-content-center">
            <form action="/EXAMENPARCIALRAC/controladores/cursos/guardar.php" method="POST" class="col-lg-8 border bg-light p-3">
                <div class="row mb-3">
                    <div class="col">
                        <label for="cursos_nombre">Nombre del curso</label>
                        <input type="text" name="cursos_nombre" id="cursos_nombre" placeholder="Informatica Aplicada" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="cursos_cantidad_de_periodos">Cantidad de Periodos</label>
                        <input type="text" name="cursos_cantidad_de_periodos" id="cursos_cantidad_de_periodos" placeholder="diez" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="cursos_fase_de_imparticion">Fase en la cual se imparte</label>
                        <input type="text" name="cursos_fase_de_imparticion" id="cursos_fase_de_imparticion" placeholder="Cuarto Modulo" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="cursos_nombre_del_instructor">Nombres del Instructor</label>
                        <input type="text" name="cursos_nombre_del_instructor" id="cursos_nombre_del_instructor" placeholder="Jorge Byron Rac Chamale"class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="cursos_creditos">Creditos correspondientes al curso</label>
                        <input type="number" name="cursos_creditos" id="cursos_creditos" placeholder="5" class="form-control"required>
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
 