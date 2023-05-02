<div class="mb-4"></div>
<h1 class="mb-4"> Álbuns </h1>
<div class="float-right">
    <a href= "?page=NovoAlbum" class="btn btn-success mb-4">Adicionar novo Álbum</a>
</div> 
<div class="row">
    <?php
        $albuns = pegaAlbum();
        foreach ($albuns as $album){
            $infoAlbum = explode('/', $album);
            $nomeAlbum = $infoAlbum[1]; 
            var_dump(pegaImagem($nomeAlbum));
            $imgAlbum = "{$album}/{$nomeAlbum}.jpg";
    ?>
        <div class="col-sm-3 card mb-3" style="width: 18rem;">
            <a href ="?page=Musicas&album=<?=$nomeAlbum?>">
                <img src="<?=$imgAlbum?>" alt="<?=$nomeAlbum?>" class="img-album card-img-top" >
                <h4 class="card-title"><?=$nomeAlbum?> </h4>
            </a>
        </div>
    <?php
        }    
    ?>
</div>