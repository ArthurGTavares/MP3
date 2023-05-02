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
    <div class="col-3 card mb-3" style="width: 17 rem;">
        <a href="?page=Musicas&album=<?=$nomeAlbum?>">
            <img src="<?=$imgAlbum?>" alt="<?=$nomeAlbum?>" class="card-img mb-3">
            <h4 class="card-title text-"><?=$nomeAlbum?> </h4>
        </a>
    </div>
    <?php
        }    
    ?>
</div>
