<?php

function pegaAlbum() {
    $albuns = glob('Albuns/*');
    return $albuns;
}

function pegaMusicas($album){
    $musicas = glob("Albuns/{$album}/Musicas/*.mp3");
    return $musicas;
}
