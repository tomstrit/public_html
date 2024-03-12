<?php 
include("ligacao.php");
@session_start();
?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <?php include "head.html";?>
</head>

<body id="page-top">



    <?php include "menu.php";?>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
            <div class="d-flex justify-content-center">
                <div class="text-center">
                    <h1 class="mx-auto my-0 text-uppercase">VianaConnect</h1>
                    <h3 class="text-white-50 mx-auto mt-2 mb-5">Conquistando vitórias, passo a passo</h3>
                </div>
            </div>
        </div>
    </header>
    <!-- Descrição de Viana no desporto-->
    <section class="projects-section bg-light">
        <div class="container px-4 px-lg-5">
            <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="imagens/geolocalizacao.jpg"
                        alt="..." /></div>
                <div class="col-xl-4 col-lg-5">
                    <div class="featured-text text-center text-lg-center">
                        <h4>LoRaWAN</h4>
                        <p class="text-black-50 mb-0">A principal distinção deste site em relação aos demais reside na
                            incorporação da nova rede LoRaWAN para a geolocalização dos atletas durante as competições
                            de atletismo. Inicialmente, concentrar-nos-emos em provas de estrada ou análogas, no
                            entanto, ao longo do tempo, pretendemos expandir a sua aplicação para competições de trail e
                            eventos similares aqui em Viana do Castelo.</p>
                    </div>
                </div>
            </div>
            <br>
            <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                <div class="col-xl-4 col-lg-5">
                    <div class="featured-text text-center text-lg-center">
                        <h4>Viana do Castelo</h4>
                        <p class="text-black-50 mb-0">Em Viana do Castelo, os desportos ganham vida com uma intensidade
                            única. Das ondas do Atlântico aos trilhos desafiantes, a nossa cidade é o cenário perfeito
                            para ação desportiva. De competições emocionantes a atletas locais brilhantes, o
                            VianaConnect é seu guia essencial para mergulhar na empolgante cultura desportiva da região.
                            Explore, participe e conecte-se ao dinamismo que define o desporto em Viana.</p>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="imagens/viana.jpg" alt="..." />
                </div>
            </div>
            <br>
            <br>

            <!-- Desportos praticados em Viana-->
            <center>
                <h1 class="text-black">Desportos praticados em Viana</h1>
            </center>
            <br>
            <div id="portfolio">
                <div class="container-fluid p-0">
                    <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-1 g-4">
                        <?php
                                $sql = "SELECT `CodigoDesporto`, `Nome`, `Descrição`, `Foto` FROM `Desportos`";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                            ?>
                        <div class="col-lg-3 col-md-5">
                            <a class="portfolio-box" href="<?=$row["Foto"];?>" title="Atlétismo">
                                <img class="img-fluid" src="<?=$row["Foto"];?>" alt="Atlétismo" />
                                <div class="portfolio-box-caption">
                                    <div class="project-category text-white-50"><?=$row["Descrição"];?></div>
                                    <div class="project-name"><?=$row["Nome"];?></div>
                                </div>
                            </a>
                        </div>
                        <?php
                                }
                                }
                            ?>
                    </div>
                </div>
            </div>
    </section>
    <!-- Contact-->
    <section class="contact-section bg-black" id="contactos">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5">
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Morada</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50">
                                <a href="https://www.google.com/maps/place/Agrupamento+de+Escolas+de+Monserrate/@41.6930125,-8.8441419,18z/data=!4m15!1m8!3m7!1s0xd25c9d252c582f7:0xa5e67066c8d72a2e!2sAv.+do+Atl%C3%A2ntico,+Viana+do+Castelo!3b1!8m2!3d41.6930109!4d-8.8430955!16s%2Fg%2F1txfqfkz!3m5!1s0xd25c9d422ca171b:0x43d288cc4dc164dc!8m2!3d41.693069!4d-8.8414075!16s%2Fg%2F1td1l8hd?entry=ttu">
                                    Avenida do Atlântico, 4904-860 Viana do Castelo
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-envelope text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Email</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50"><a
                                    href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox?compose=GTvVlcSGKnQzvfJBJjRxGrvSKhpzzPdLNCsVCPpRKJjdNVKSSfmbStCfTPbrQPFQHwpThGgkFfCpk">vianaconnectvc@gmail.com</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-mobile-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Telemóvel</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50">+351 969 576 182</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="social d-flex justify-content-center">
                <a class="mx-2 bg-dark" href="https://www.facebook.com/profile.php?id=61553328369654"><i
                        class="fab fa-facebook-f"></i></a>
            </div>
        </div>
    </section>
    <?php include "rodape.html";?>
</body>

</html>