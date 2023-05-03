<div class="mb-2"></div>
<a href= "?page=Musicas&album=<?=$_GET['album']?>" class="btn text-w mb-2">Voltar para o Album <?=$_GET['album']?></a> 
<h1 class="mb-4 text-white">Cadastrar nova música para o Album <?=$_GET['album']?></h1>

<form action="#" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <input type="file" name="musica" class="form-control input">
    </div>
    <div>
        <button type="submit" class="btn btn-success">Cadastrar Música</button>
    </div>
</form>

<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $album = $_GET["album"];

        $caminho = "Albuns/{$album}/Musicas/";

        if(!is_dir($caminho)){
            mkdir($caminho);
        }

        if (move_uploaded_file($_FILES['musica']['tmp_name'], $caminho . $_FILES['musica']['name'])){
            header("Location: ?pages=Musicas&album={$album}");
        }else{
            echo "vigi kkkk";
        }
    }
?>