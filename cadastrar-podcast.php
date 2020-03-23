<?php
require_once 'server/Podcast.class.php';
$podcast = new Podcast();


if(isset($_POST['podcastTitulo']) && !empty($_POST['podcastTitulo'])){
    $dados = array();
    $dados['podcastTitulo'] = $_POST['podcastTitulo'];
    $dados['podcastDescricao'] = $_POST['podcastDescricao'];
    $dados['podcastManchete'] = $_POST['podcastManchete'];
    $dados['podcastURL'] = $_POST['podcastURL'];


    if($podcast->createPod($dados)){
         ?>
        <div class="alert alert-success" role="alert">
            Poscast enviado com sucesso!
        </div>
        <?php
    }else{
        ?>
        <div class="alert alert-danger" role="alert">
            Erro ao enviar poscast!
        </div>
        <?php
    }
}



require_once 'pages/header.php';
?>

<section id="podcast">

    <div class="container pagpod">
        <h2>Cadastre Novo Podcast</h2>
        <form method="post" action="">
            Titulo:<br>
            <input type="text" name="podcastTitulo"  class="form-control" required/>
            Manchete:<br>
            <input type="text" name="podcastManchete" class="form-control" required/>
            Descrição:<br>
            <textarea name="podcastDescricao"  class="form-control" required></textarea>

            URL do tocador:<br>
            <input type="text" name="podcastURL" class="form-control" required/>

            <input class="btn btn-primary" type="submit" value="Enviar" >
        </form>

    </div>
</section>




<?php
require_once 'pages/footer.php';
?>
