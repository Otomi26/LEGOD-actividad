<?php    
    const DBHOST = "localhost";//RAIZ
    const DBUSER = "root";// usuario
    const PASSWORD = "";//poner contraseña si existe
    const DB = "lego";

    function connect()
    {
        $conexion = mysqli_connect(DBHOST, DBUSER, PASSWORD, DB);// conecta base de datos con la pagina
        /*
        --PASO : var_dump de $conexion:
        --PASO: regresar variable para un archivo externo
        */
        return $conexion;
        
    }
    // --PASO : llamar a la funcion antes de pasarla a otro archivo
    $conexion = connect(); //llama a la funcion para que se ejecute


?>