<?php 
if(!isset($_GET['podcastid']) || empty($_GET['podcastid'])){
    header("Location: index.php");
    exit;
}
$podcastID = $_GET['podcastid'];

require_once 'server/Podcast.class.php';
$podcast = new Podcast();
$podcastInfo = $podcast->getPodcastItem($podcastID);

require_once 'pages/header.php';
?>

    <section id="podcast">
        <div class="container pagpod">
            <div class="row">
                <h1 class="centra">PODCAST</h1>
            </div>
            <div class="row">
                <div class="col-12">
                    <h4><?php echo utf8_encode($podcastInfo['podcastTitulo']); ?> </h4>
                </div>
                <div class="col-12">
                    <?php
                    //DATA
                    echo date("d/m/y H:m", strtotime($podcastInfo['podcastDataHora']));
                    echo "<hr>";
                    //DESCRIÇÃO
                    echo utf8_encode($podcastInfo['podcastDescricao']);
                    echo "<hr>";
                    ?>
                </div>
                <div class="col-12">
                    <iframe class="tocador" src="<?php echo $podcastInfo['podcastURL']; ?>"></iframe>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-8 mx-auto botaopod">
                    <a href="index.php" class="btn btn-dark btn-lg btn-block">Retornar</a>
                </div>
            </div>
        </div>
    </section>

<?php 
require_once 'pages/footer.php';
?>