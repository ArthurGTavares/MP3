<div class="mb-2"></div>
<a href= "?page=Albuns" class="btn btn-link mb-2">Voltar para os Albuns</a> 
<h1 class="mb-4">Cadastrar novo Álbum</h1>
<form action="#" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <input type="text" name="nomeAlbum" placeholder="Nome do Álbum:" class="form-control">
    </div>
    <div class="mb-3">
        <input type="file" name="imgAlbum" class="form-control">
    </div>
    <div>
        <button type="submit" class="btn btn-success col-2">Cadastrar Álbum</button>
    </div>
</form>

<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $album = $_POST['nomeAlbum'];
        $caminho = "Albuns/{$album}";

        if(!is_dir($caminho)){
            mkdir($caminho);
        }
        $file = $_FILES['imgAlbum'];
        $fileInfo = explode('.', $file['name']);

        $extensao = $fileInfo[1];
        $novoNomeImagem = $album . '.' . $extensao;

        if(move_uploaded_file($file['tmp_name'], $caminho.'/'.$novoNomeImagem)){
            header('Location: ?pages=Albuns');
        }else{
            echo 'Não deu :c';
        }
    }
?>