<div class="mb-2"></div>
<a href= "?page=Albuns" class="btn btn-link mb-2">Voltar para os Albuns</a>
<h1 class="mb-4">Músicas do Álbum <?=$_GET['album']?></h1>
<a href= "?page=NovaMusica&album=<?=$_GET['album']?>" class="btn btn-success mb-4">Cadastrar nova Música</a> 
<hr>
<?php
    $Album = $_GET['album'];
    $Musicas = pegaMusicas($Album);
    foreach ($Musicas as $Music){
?>
<div class="col-12 mb-3">
    <audio src="<?=$Music?>" controls></audio>
</div>
<?php
    }
?>