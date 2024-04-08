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

//una alternativa seria file_get_contents
// $reult = file_get_contents(API_URL) // asi solo quieres hacer un GET de una API
$data = json_decode($result, true);
curl_close($ch);


?>

<head>
    <title>La Proxima Pelicula De Marvel</title>
    <!-- Centered viewport -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css" />
</head>

<main>
    <section>
        <img src="<?= $data["poster_url"]; ?>" width="200" alt="Poster de <?= $data["title"] ?>"
        style="border-radius: 16px;"/>
    </section>
    <hgroup>
        <h3><?=$data["title"];?> se estrena en <?=$data["days_until"];?> dias</h3>
        <p>Fecha de estreno <?= $data["release_date"];?></p>
        <p>dercription <?= $data["overview"];?></p>
        <p>la sieguiente es: <?= $data["following_production"]["title"];?></p>
    </hgroup>
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

    section{
        display: flex;
        justify-content: center;
        text-align: center;
    }

    hgroup {
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }


</style>