<div class="mb-4"></div>
<h1 class="mb-4 text-white"> Álbuns </h1>
<a href="?page=NovoAlbum" class="btn btn-success mb-4">Adicionar novo Álbum</a>
<div class="row">
    <?php
        $albuns = pegaAlbum();
        foreach ($albuns as $album){
            $infoAlbum = explode('/', $album);
            $nomeAlbum = $infoAlbum[1]; 
            $imgAlbum = "{$album}/{$nomeAlbum}.jpg";
    ?>
    <div class="col-3 mb-3" style="width: 17rem;">
        <a href="?page=Musicas&album=<?=$nomeAlbum?>">
            <div class="card fundo">
                <img src="<?=$imgAlbum?>" alt="<?=$nomeAlbum?>" class="card-img-top mb-3">
                <h4 class="card-title mb-3 text-w" style="margin-left: 5%"><?=$nomeAlbum?> </h4>
            </div>
        </a>
    </div>
    <?php
        }    
    ?>
</div>
