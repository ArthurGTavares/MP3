<div class="mb-4"></div>
<h1 class="mb-4"> Álbuns </h1>
<a href="?page=NovoAlbum" class="btn btn-success mb-4">Adicionar novo Álbum</a>
<div class="row">
    <?php
        $albuns = pegaAlbum();
        foreach ($albuns as $album){
            $infoAlbum = explode('/', $album);
            $nomeAlbum = $infoAlbum[1]; 
            $imgAlbum = "{$album}/{$nomeAlbum}.jpg";
    ?>
    <div class="col-3 mb-3">
        <a href="?page=Musicas&album=<?=$nomeAlbum?>">
            <img src="<?=$imgAlbum?>" alt="<?=$nomeAlbum?>" class="img-album">
            <h4><?=$nomeAlbum?> </h4>
        </a>
    </div>
    <?php
        }    
    ?>
</div>
