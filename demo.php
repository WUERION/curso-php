<?php 
    const API_URL = "https://whenisthenextmcufilm.com/api";
    # inicializamos una nueva sesion de curl; ch = curl handel
    $ch = curl_init(API_URL);
    // Indicamos que queremos obtener el resultado de la peticion y no mostrarla en pantalla
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    /* Ejecutamos la peticion
    y guardamos el resultado */
    $result = curl_exec($ch);
    # buscamos los datos trasformamos el json del resultado y que lo coloque en un array associativo y que no este en una cadena de texto y que mojor este en un array
    $data = json_decode($result, true);
    curl_close($ch);

    var_dump($data);
?>

<main>
    <h2>La proxima pelicula de Marvel</h2>
</main>


<style>
    :root {
        color-scheme: light dark;
        color: white;
    }

    body {
        display: grid;
        place-content: center;
    }
</style>