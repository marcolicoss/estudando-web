<?php
/**
 * Created by PhpStorm.
 * User: luizfernandosanches
 * Date: 21/11/16
 * Time: 15:42
 */ ?>

<html>

@include('site.include.head')

<body>

@include('site.include.header')

<main>

    <section class="bg-section-header-site header-size-site col-md-12 col-lg-12">
        <div class="container">
            <div class="row">
            </div>
        </div>
    </section> <!-- bg-section-header-site header-size-site -->

    <section>
        <div class="container">
            <div class="row text-center">
                <div class="divisor-default"></div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="list-inline">
                        <li class="linha-header-index hidden-xs"></li>
                        <li class=""><h2 class="text-color-1">Conheça nosso cardápio</h2></li>
                        <li class="linha-header-index hidden-sm hidden-md"></li>
                    </ul>
                </div>
            </div>

            <div class="row text-center text-title-description">
                <h4>Conheça nosso cardápio</h4>
            </div>

            <div class="row text-center text-title-description">
                <h4 class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    Fundado em 1993, o Kyodai Sorocaba é o primeiro restaurante japonês tradicional de sorocaba
                    Fundado em 1993, o Kyodai Sorocaba é o primeiro restaurante japonês tradicional de sorocaba
                    Fundado em 1993, o Kyodai Sorocaba é o primeiro restaurante japonês tradicional de sorocaba
                </h4>
            </div>
        </div>
    </section>

    <section>

        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="container">
                <div class="row text-center">
                    <div class="panel visible-md visible-lg">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                                   aria-expanded="true" aria-controls="collapseOne">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img-cardapio-width-height">
                                        <img src="site/assets/img/cardapio/cardapio-1.png"
                                             class="img-responsive centered">
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <h3 class="banner-menu-h3 text-center text-img-cardapio" style="color: white;">Porções</h3>
                                    </div>
                                </a>
                            </h4>
                        </div>

                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                             aria-labelledby="headingOne">
                            <div class="panel-body">
                                <div class="divisor-default"></div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <ul class="list-inline">
                                        <li class="linha-header-index hidden-xs"></li>
                                        <li class=""><h4 class="text-color-1">Porções</h4></li>
                                        <li class="linha-header-index hidden-sm hidden-md"></li>
                                    </ul>

                                    <ul class="list-inline text-center">
                                        <li class=""><h5 class="text-color-1">Cogumelo</h5></li>
                                    </ul>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shimeji com Lula</p>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shitake com Lula</p>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shitake com Shimeji</p>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shimeji com Mignom</p>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shimeji com Tofu</p>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shimeji ou Shitake</p>
                                </div>



                                <ul class="list-inline col-md-12" style="margin-top: 50px;">
                                    <li class=""><h5 class="text-color-1">Ika</h5></li>
                                </ul>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Lula na Manteiga</p>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Lula Empanada</p>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Isca de Lula</p>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Tempura Ebi 10 un.</p>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Tempura <span style="font-size: 10px;">16 legumes e 3 camarões</span></p>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Isca de Peixe Branco</p>
                                </div>


                                <ul class="list-inline col-md-12" style="margin-top: 50px;">
                                    <li class=""><h5 class="text-color-1">Harumaki - Rolinho Primavera</h5></li>
                                </ul>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Frango</p>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Queijo</p>
                                </div>

                                <ul class="list-inline col-md-12" style="margin-top: 50px;">
                                    <li class=""><h5 class="text-color-1">Gyoza</h5></li>
                                </ul>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Pernil ou Frango - 6 unidades</p>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Nassu com Misso ou Alho</p>
                                    <h6>Beringela com Misso ou Shoyu com Alho</h6>
                                </div>

                                <ul class="list-inline col-md-12" style="margin-top: 50px;">
                                    <li class=""><h5 class="text-color-1">Salmão Hot Roll</h5></li>
                                </ul>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Com Cream Cheese</p>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Com Kani</p>
                                </div>

                                <ul class="list-inline col-md-12" style="margin-top: 50px;">
                                    <li class=""><h5 class="text-color-1">Outras Porções</h5></li>
                                </ul>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Hiyayako</p>
                                    <h6>Tofu com shoga e cebolinha</h6>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Gohan(Arroz)</p>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Missoshiru (Sopa de Soja)</p>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Conserva</p>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Gari - Gengibre em Conserva</p>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Nimono</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-xs-12 visible-xs visible-sm">
                        <ul class="list-inline">
                            <li class=""><h4 class="text-color-1">Porções</h4></li>
                        </ul>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shimeji com Lula</p>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shitake com Lula</p>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shitake com Shimeji</p>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shitake com Mignom</p>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shimeji com Mignom</p>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shimeji com Tofu</p>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shimeji ou Shitake</p>
                    </div>
                </div>

            </div>


            <div class="container">
                <div class="row text-center">
                    <div class="panel visible-md visible-lg">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"
                                   aria-expanded="false" aria-controls="collapseTwo">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img-cardapio-width-height">
                                        <img src="site/assets/img/cardapio/cardapio-2.png"
                                             class="img-responsive centered">
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <h3 class="banner-menu-h3 text-center text-img-cardapio" style="color: white;">Sopas</h3>
                                    </div>
                                </a>
                            </h4>
                        </div>

                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                             aria-labelledby="headingTwo">
                            <div class="panel-body">
                                <div class="divisor-default"></div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <ul class="list-inline">
                                        <li class="linha-header-index hidden-xs"></li>
                                        <li class=""><h4 class="text-color-1">Sopas</h4></li>
                                        <li class="linha-header-index hidden-sm hidden-md"></li>
                                    </ul>
                                </div>

                                <ul class="list-inline col-md-12" style="margin-top: 50px;">
                                    <li class=""><h5 class="text-color-1">Udon</h5></li>
                                </ul>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Udon Especial</p>
                                    <h6>frango, shitake, ovo, milanesa e kamaboku</h6>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Gyukatsu Udon</p>
                                    <h6>filé mignon à milanesa</h6>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Tempurá Udon</p>
                                    <h6>Legumes e camarão empanado</h6>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Kare Udon</p>
                                    <h6>pernil e legumes ao curry</h6>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Tonkatsu Udon</p>
                                    <h6>Lombo à milanesa</h6>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Tsukimi Udon</p>
                                    <h6>Frango, shitake, omelete e kamaboku</h6>
                                </div>

                                <ul class="list-inline col-md-12" style="margin-top: 50px;">
                                    <li class=""><h5 class="text-color-1">Somen</h5></li>
                                </ul>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Hayashi Somen</p>
                                    <h6>Sopa gelada (cenoura, pepino, frango, omelete, kamaboku e shogá</h6>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Somen</p>
                                    <h6>Omelete, shitake e cebolinha</h6>
                                </div>

                                <ul class="list-inline col-md-12" style="margin-top: 50px;">
                                    <li class=""><h5 class="text-color-1">Lamen</h5></li>
                                </ul>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shoyu Lamen Completo</p>
                                    <h6>frango, tikwa, moyashi, cebola, cebolinha e kamaboku</h6>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Misso Lamen</p>
                                    <h6>Moyashi, frango e cebolinha</h6>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shoyu Lamen</p>
                                    <h6>Ovo, nori e cebolinha</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-xs-12 visible-xs visible-sm">
                        <ul class="list-inline">
                            <li class=""><h4 class="text-color-1">Sopas</h4></li>
                        </ul>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shimeji com Lula</p>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shitaki com Lula</p>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shimeji com Mignom</p>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shimeji com Tofu</p>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shimeji com Lula</p>
                    </div>
                </div>

            </div>


            <div class="container">
                <div class="row text-center">
                    <div class="panel visible-md visible-lg">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree"
                                   aria-expanded="false" aria-controls="collapseThree">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img-cardapio-width-height">
                                        <img src="site/assets/img/cardapio/cardapio-3.png"
                                             class="img-responsive centered">
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <h3 class="banner-menu-h3 text-center text-img-cardapio" style="color: white;">Hossomaki</h3>
                                    </div>
                                </a>
                            </h4>
                        </div>

                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                             aria-labelledby="headingThree">
                            <div class="panel-body">
                                <div class="divisor-default"></div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <ul class="list-inline">
                                        <li class="linha-header-index hidden-xs"></li>
                                        <li class=""><h4 class="text-color-1">Hossomaki</h4></li>
                                        <li class="linha-header-index hidden-sm hidden-md"></li>
                                    </ul>
                                </div>

                                <ul class="list-inline col-md-12" style="margin-top: 50px;">
                                    <li class=""><h5 class="text-color-1">Rolo fino cortado em 8 pedaços</h5></li>
                                </ul>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Ebi Maki</p>
                                    <h6>Camarão</h6>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Kampyo Maki</p>
                                    <h6>Abóbora d'agua</h6>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Tekka Maki</p>
                                    <h6>Atum</h6>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Tobiko Maki</p>
                                    <h6>Ovas de peixe</h6>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Peixe Branco</p>
                                    <h6>Peixe branco crú</h6>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Salmão Maki</p>
                                    <h6>Salmão</h6>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Kani Maki</p>
                                    <h6>Carangueijo</h6>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Kani com pepino</p>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Kappa Maki</p>
                                    <h6>Pepino</h6>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Oshinko Maki</p>
                                    <h6>Conserva de nabo</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-xs-12 visible-xs visible-sm">
                        <ul class="list-inline">
                            <li class=""><h4 class="text-color-1">Hossomaki</h4></li>
                        </ul>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shimeji com Lula</p>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shitaki com Lula</p>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shimeji com Mignom</p>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shimeji com Tofu</p>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shimeji com Lula</p>
                    </div>
                </div>

            </div>


            <div class="container">
                <div class="row text-center">
                    <div class="panel visible-md visible-lg">
                        <div class="panel-heading" role="tab" id="headingFour">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour"
                                   aria-expanded="false" aria-controls="collapseFour">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img-cardapio-width-height">
                                        <img src="site/assets/img/cardapio/cardapio-4.png"
                                             class="img-responsive centered">
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <h3 class="banner-menu-h3 text-center text-img-cardapio" style="color: white;">Urumaki</h3>
                                    </div>
                                </a>
                            </h4>
                        </div>

                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel"
                             aria-labelledby="headingFour">
                            <div class="panel-body">
                                <div class="divisor-default"></div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <ul class="list-inline">
                                        <li class="linha-header-index hidden-xs"></li>
                                        <li class=""><h4 class="text-color-1">Urumaki</h4></li>
                                        <li class="linha-header-index hidden-sm hidden-md"></li>
                                    </ul>
                                </div>

                                <ul class="list-inline col-md-12" style="margin-top: 50px;">
                                    <li class=""><h5 class="text-color-1">Arroz por fora e gergelim</h5></li>
                                </ul>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Urumaki atum com cheese</p>
                                    <h6>Atum crú ou cozido com cream cheese</h6>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Urumaki Sake skin</p>
                                    <h6>Salmão crú com skin e molho tarê</h6>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Urumaki salmão ou atum cozido</p>
                                    <h6>Peixe cozido, maionese, cebolinha e pepino</h6>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Urumaki Atum</p>
                                    <h6>Atum crú, cebolinha, gengibre e pepino</h6>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Urumaki Califórnia</p>
                                    <h6>Kani, Maionese, fruta da época e pepino</h6>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Urumaki Shitake ou Shimeji</p>
                                    <h6>Kani, Maionese, fruta da época e pepino</h6>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Urumaki Salmão</p>
                                    <h6>Salmão Crú, cebolinha, gengibre e pepino</h6>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Urumaki Skin</p>
                                    <h6>Skin Grelhado com molho tarê</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-xs-12 visible-xs visible-sm">
                        <ul class="list-inline">
                            <li class=""><h4 class="text-color-1">Urumaki</h4></li>
                        </ul>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shimeji com Lula</p>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shitaki com Lula</p>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shimeji com Mignom</p>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shimeji com Tofu</p>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shimeji com Lula</p>
                    </div>
                </div>

            </div>


            <div class="container">
                <div class="row text-center">
                    <div class="panel visible-md visible-lg">
                        <div class="panel-heading" role="tab" id="headingFive">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive"
                                   aria-expanded="false" aria-controls="collapseFive">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img-cardapio-width-height">
                                        <img src="site/assets/img/cardapio/cardapio-5.png"
                                             class="img-responsive centered">
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <h3 class="banner-menu-h3 text-center text-img-cardapio" style="color: white;">Temaki</h3>
                                    </div>
                                </a>
                            </h4>
                        </div>

                        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel"
                             aria-labelledby="headingFive">
                            <div class="panel-body">
                                <div class="divisor-default"></div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <ul class="list-inline">
                                        <li class="linha-header-index hidden-xs"></li>
                                        <li class=""><h4 class="text-color-1">Temaki</h4></li>
                                        <li class="linha-header-index hidden-sm hidden-md"></li>
                                    </ul>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shimeji com Lula</p>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shitaki com Lula</p>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shimeji com Mignom</p>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shimeji com Tofu</p>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shimeji com Lula</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-xs-12 visible-xs visible-sm">
                        <ul class="list-inline">
                            <li class=""><h4 class="text-color-1">Temaki</h4></li>
                        </ul>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shimeji com Lula</p>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shitaki com Lula</p>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shimeji com Mignom</p>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shimeji com Tofu</p>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shimeji com Lula</p>
                    </div>
                </div>

            </div>


            <div class="container">
                <div class="row text-center">
                    <div class="panel visible-md visible-lg">
                        <div class="panel-heading" role="tab" id="headingSix">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix"
                                   aria-expanded="false" aria-controls="collapseSix">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img-cardapio-width-height">
                                        <img src="site/assets/img/cardapio/cardapio-6.png"
                                             class="img-responsive centered">
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <h3 class="banner-menu-h3 text-center text-img-cardapio" style="color: white;">Teishoku</h3>
                                    </div>
                                </a>
                            </h4>
                        </div>

                        <div id="collapseSix" class="panel-collapse collapse" role="tabpanel"
                             aria-labelledby="headingSix">
                            <div class="panel-body">
                                <div class="divisor-default"></div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <ul class="list-inline">
                                        <li class="linha-header-index hidden-xs"></li>
                                        <li class=""><h4 class="text-color-1">Teishoku</h4></li>
                                        <li class="linha-header-index hidden-sm hidden-md"></li>
                                    </ul>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shimeji com Lula</p>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shitaki com Lula</p>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shimeji com Mignom</p>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shimeji com Tofu</p>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shimeji com Lula</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-xs-12 visible-xs visible-sm">
                        <ul class="list-inline">
                            <li class=""><h4 class="text-color-1">Teishoku</h4></li>
                        </ul>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shimeji com Lula</p>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shitaki com Lula</p>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shimeji com Mignom</p>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shimeji com Tofu</p>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shimeji com Lula</p>
                    </div>
                </div>

            </div>


            <div class="container">
                <div class="row text-center">
                    <div class="panel visible-md visible-lg">
                        <div class="panel-heading" role="tab" id="headingSeven">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven"
                                   aria-expanded="false" aria-controls="collapseSeven">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img-cardapio-width-height">
                                        <img src="site/assets/img/cardapio/cardapio-7.png"
                                             class="img-responsive centered">
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <h3 class="banner-menu-h3 text-center text-img-cardapio" style="color: white;">Nigiri</h3>
                                    </div>
                                </a>
                            </h4>
                        </div>

                        <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel"
                             aria-labelledby="headingSeven">
                            <div class="panel-body">
                                <div class="divisor-default"></div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <ul class="list-inline">
                                        <li class="linha-header-index hidden-xs"></li>
                                        <li class=""><h4 class="text-color-1">Nigiri</h4></li>
                                        <li class="linha-header-index hidden-sm hidden-md"></li>
                                    </ul>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shimeji com Lula</p>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shitaki com Lula</p>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shimeji com Mignom</p>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shimeji com Tofu</p>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shimeji com Lula</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-xs-12 visible-xs visible-sm">
                        <ul class="list-inline">
                            <li class=""><h4 class="text-color-1">Nigiri</h4></li>
                        </ul>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shimeji com Lula</p>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shitaki com Lula</p>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shimeji com Mignom</p>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shimeji com Tofu</p>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shimeji com Lula</p>
                    </div>
                </div>

            </div>


            <div class="container">
                <div class="row text-center">
                    <div class="panel visible-md visible-lg">
                        <div class="panel-heading" role="tab" id="headingEight">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight"
                                   aria-expanded="false" aria-controls="collapseEight">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img-cardapio-width-height">
                                        <img src="site/assets/img/cardapio/cardapio-8.png"
                                             class="img-responsive centered">
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <h3 class="banner-menu-h3 text-center text-img-cardapio" style="color: white;">Teppanyaki Teshoku</h3>
                                    </div>
                                </a>
                            </h4>
                        </div>

                        <div id="collapseEight" class="panel-collapse collapse" role="tabpanel"
                             aria-labelledby="headingEight">
                            <div class="panel-body">
                                <div class="divisor-default"></div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <ul class="list-inline">
                                        <li class="linha-header-index hidden-xs"></li>
                                        <li class=""><h4 class="text-color-1">Teppanyaki Teshoku</h4></li>
                                        <li class="linha-header-index hidden-sm hidden-md"></li>
                                    </ul>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shimeji com Lula</p>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shitaki com Lula</p>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shimeji com Mignom</p>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shimeji com Tofu</p>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shimeji com Lula</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xs-12 visible-xs visible-sm">
                        <ul class="list-inline">
                            <li class=""><h4 class="text-color-1">Teppanyaki Teshoku</h4></li>
                        </ul>
                    </div>


                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shimeji com Lula</p>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shitaki com Lula</p>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shimeji com Mignom</p>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shimeji com Tofu</p>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shimeji com Lula</p>
                    </div>
                </div>

            </div>


            <div class="container">
                <div class="row text-center">
                    <div class="panel visible-md visible-lg">
                        <div class="panel-heading" role="tab" id="headingNine">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine"
                                   aria-expanded="false" aria-controls="collapseNine">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img-cardapio-width-height">
                                        <img src="site/assets/img/cardapio/cardapio-9.png"
                                             class="img-responsive centered">
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <h3 class="banner-menu-h3 text-center text-img-cardapio" style="color: white;">Pratos Diversos</h3>
                                    </div>
                                </a>
                            </h4>
                        </div>

                        <div id="collapseNine" class="panel-collapse collapse" role="tabpanel"
                             aria-labelledby="headingNine">
                            <div class="panel-body">
                                <div class="divisor-default"></div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <ul class="list-inline">
                                        <li class="linha-header-index hidden-xs"></li>
                                        <li class=""><h4 class="text-color-1">Pratos Diversos</h4></li>
                                        <li class="linha-header-index hidden-sm hidden-md"></li>
                                    </ul>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shimeji com Lula</p>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shitaki com Lula</p>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shimeji com Mignom</p>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shimeji com Tofu</p>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <p class="item-text-cardapio">Shimeji com Lula</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-xs-12 visible-xs visible-sm">
                        <ul class="list-inline">
                            <li class=""><h4 class="text-color-1" style="color: white;">Pratos Diversos</h4></li>
                        </ul>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shimeji com Lula</p>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shitaki com Lula</p>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shimeji com Mignom</p>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shimeji com Tofu</p>
                    </div>

                    <div class="col-sm-6 col-xs-6 visible-xs visible-sm">
                        <p class="item-text-cardapio">Shimeji com Lula</p>
                    </div>
                </div>

            </div>

        </div> <!--panel group -->


        <!--<div class="row text-center">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                               aria-expanded="true" aria-controls="collapseOne">
                                Collapsible Group Item #1
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                         aria-labelledby="headingOne">
                        <div class="panel-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                            squid.
                        </div>
                    </div>
                </div>
            </div>

        </div>-->
    </section>

    @include('site.include.footer')
</main>



</body>
</html>
