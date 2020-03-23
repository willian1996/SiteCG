<?php
require_once 'server/Podcast.class.php';
$podcast = new Podcast();
$listarPodcasts = $podcast->getLista();


require_once 'pages/header.php';
?>

    <section id="carousel_slider">
        <div class="container caroslider">
            <div class="row no-gutters">
                <div class="col">
                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="assets/img/Tiger.jpg" class="d-block w-100" alt="Coluna de Tigers">
                                <div class="carousel-caption d-none d-md-block titulo">
                                    <h5>Clube dos Generais</h5>
                                    <p>Para quem não pode ter um tanque em casa...</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/b17.jpg" class="d-block w-100" alt="B-17 Fortaleza Voadora">
                                <div class="carousel-caption d-none d-md-block titulo">
                                    <h5>Podcats</h5>
                                    <p>Trazemos até você informações e opiniões sobre diversos assuntos da Histório Militar.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/ColunaBlinda.jpg" class="d-block w-100" alt="Coluna Blindada Aliada">
                                <div class="carousel-caption d-none d-md-block titulo">
                                    <h5>Artigos</h5>
                                    <p>Escrevemos artigos interessantes para quem gosta de estudar Histório Militar.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/Esquadra.jpg" class="d-block w-100" alt="Coluna Blindada Aliada">
                                <div class="carousel-caption d-none d-md-block titulo">
                                    <h5>Batalhas e Campanhas</h5>
                                    <p>Vamos debater as estratégias e táticas adotadas. Os comandantes, as unidades e armamentos
                                       envolvidos. OS efeitos e desdobramentos sobre a guerra.</p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Anterior</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Próximo</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="constru">
        <div class="container emconstru">
            <div class="row">
                <div class="col-4">
                    <img src="assets/img/construcao.png" alt="Em Construção" class="imaconstru">
                </div>
                <div class="col-8 textocontru">
                    <p class="titprim">Este site está em construção</p>
                    <p class="titsecu">Estamos melhorando para ampliar sua experiência</p>
                </div>
            </div>
        </div>
    </section>

    <section id="pods">
        <div class="container blocopod">
            <div class="row">
                <h1 class="centra">LISTA DE PODCASTS</h1>
            </div>
            <div class="row justify-content-around">
                <!--Lista para os cards podcast-->
                <?php foreach($listarPodcasts as $valor): ?>
                    <!--    DADOS PARA CADA CARD-->
                    <div class="col">
                        <div class="card ajuscard" style="width: 18rem;">
                            <?php echo strstr(strstr($valor['podcastDescricao'], '<img'), 'sty', true).' class="card-img-top" style="height: 180px;" alt="Imagem do Podcats">'; ?>
                            <div class="card-body">
                                <h5 class="card-title titupod"><?php echo utf8_encode($valor['podcastTitulo']); ?></h5>
                                <p class="card-text despod"><?php echo utf8_encode($valor['podcastManchete']); ?></p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item despod"><?php echo date("d/m/y", strtotime($valor['podcastDataHora'])); ?></li>
                            </ul>
                            <div class="card-body">
                                <a href="podcast.php?podcastid=<?php echo $valor['podcastID']; ?>" class="card-link
                                titupod"><?php echo utf8_encode($valor['podcastTitulo']); ?></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

<?php    
require_once 'pages/footer.php';
?>

