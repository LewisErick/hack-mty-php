<?php

class Reporte {


    function reporteProfesores()
    {
        $archivo = "reporteProfesores"." ".date('d-m-Y H-i-s');
        header("Content-Type: application/vnd.ms-excel");
        header("Content-disposition: attachment; filename=".$archivo.".xls");

        $model = new Model();
        $query = "SELECT p.id, p.nombre, p.email, p.telefono, p.celular, p.gradoescolar, p.fechanacimiento, e.nombre as nombreescuela  FROM userprofesor as p INNER JOIN escuela as e ON p.escuela = e.id";
        $result = $model -> doSelectAll($query);

        if(mysqli_num_rows($result) > 0){
            echo mb_convert_encoding("ID\tNombre\tEmail\tTeléfono\tCelular\tGrado Escolar\tFecha de Nacimiento\tEscuela\n", 'utf-16', 'utf-8');
            while ($row = mysqli_fetch_assoc($result)) {
                echo mb_convert_encoding($row['id']."\t".$row['nombre']."\t".$row['email']."\t".$row['telefono']."\t".$row['celular']."\t".$row['gradoescolar']."\t".$row['fechanacimiento']."\t".$row['nombreescuela']."\n", 'utf-16', 'utf-8');
            }
        }
    }

    function reporteAlumnos()
    {
        $archivo = "reporteAlumnos"." ".date('d-m-Y H-i-s');
        header("Content-Type: application/vnd.ms-excel");
        header("Content-disposition: attachment; filename=".$archivo.".xls");

        $model = new Model();
        $query = "SELECT * FROM useralumno";
        $result = $model -> doSelectAll($query);

        if(mysqli_num_rows($result) > 0){
            echo mb_convert_encoding("ID\tNombre\tEmail\tGenero\tGrado Escolar\n", 'utf-16', 'utf-8');
            while ($row = mysqli_fetch_assoc($result)) {
                echo mb_convert_encoding($row['id']."\t".$row['nombre']."\t".$row['email']."\t".$row['genero']."\t".$row['gradoescolar']."\n", 'utf-16', 'utf-8');
            }
        }
    }

    function reporteEscuelas()
    {

        $archivo = "reporteEscuelas"." ".date('d-m-Y H-i-s');
        header("Content-Type: application/vnd.ms-excel");
        header("Content-disposition: attachment; filename=".$archivo.".xls");

        $model = new Model();
        $query = "SELECT * FROM escuela";
        $result = $model -> doSelectAll($query);

        if(mysqli_num_rows($result) > 0){
            echo mb_convert_encoding("ID\tNombre\tActiva\n", 'utf-16', 'utf-8');
            while ($row = mysqli_fetch_assoc($result)) {
                echo mb_convert_encoding($row['id']."\t".$row['nombre']."\t".$row['activa']."\n", 'utf-16', 'utf-8');
            }
        }
    }

    function alumnosPorGrado()
    {
        $archivo = "reporteAlumnosPorGrado"." ".date('d-m-Y H-i-s');
        header("Content-Type: application/vnd.ms-excel");
        header("Content-disposition: attachment; filename=".$archivo.".xls");
    }

    function alumnosPorEdad()
    {
        $archivo = "reporteAlumnosPorEdad"." ".date('d-m-Y H-i-s');
        header("Content-Type: application/vnd.ms-excel");
        header("Content-disposition: attachment; filename=".$archivo.".xls");
    }

    function reporteGeneral()
    {
        $archivo = "reporteGeneral"." ".date('d-m-Y H-i-s');
        header("Content-Type: application/vnd.ms-excel");
        header("Content-disposition: attachment; filename=".$archivo.".xls");
        echo mb_convert_encoding("Profesores\n\n", 'utf-16', 'utf-8');
        $this->reporteProfesores();
        echo mb_convert_encoding("\n\nAlumnos\n\n", 'utf-16', 'utf-8');
        $this->reporteAlumnos();
        echo mb_convert_encoding("\n\nEscuelas\n\n", 'utf-16', 'utf-8');
        $this->reporteEscuelas();
        echo mb_convert_encoding("\n\nAlumnos por Grado\n\n", 'utf-16', 'utf-8');
        $this->alumnosPorGrado();
        echo mb_convert_encoding("\n\nAlumnos por Edad\n\n", 'utf-16', 'utf-8');
        $this->alumnosPorEdad();
    }


}

?>