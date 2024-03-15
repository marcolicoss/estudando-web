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

    <section class="bg-section-header-site header-size-site section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12"></div>
            </div>
        </div>
    </section> <!-- bg-section-header-site header-size-site -->

    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <h2 class="text-center "><i class="linha-1">_____</i> Fale Conosco <i class="linha-1">_____</i></h2><br>
                </div>
            </div>
            <div class="row text-title-description">
                <div class="col-md-6 col-sm-16 col-xs-6">
                    <h4>Telefone: 3232 5039</h4>
                    <h4>Rua Dr. Artur Martins, 41, Sorocaba - SP</h4>
                    <h4>contato@kyodai.com.br</h4>
                </div>
                
                <div class="col-md-6 col-sm-16 col-xs-6">
                    <h4 class="text-right "><u>Horário de Funcionamento</u></h4>
                    <h4 class="text-right">Segunda a Sexta: 18:00h as 23:00h</h4>
                    <h4 class="text-right">Sábado: 18:00h as 23:00h</h4>
                    <h4 class="text-right"><u>Delivery</u></h4>
                    <h4 class="text-right">Segunda a Sábado: 19:00h as 22:30h</h4>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid">
            <div class="row">
                <div id="map"></div>
                <script>
                    function initMap() {
                        var infowindow = new google.maps.InfoWindow();

                        var uluru = {
                            lat: -23.502412,
                            lng: -47.458376
                        };

                        var map = new google.maps.Map(document.getElementById('map'), {
                            zoom: 17,
                            center: uluru
                        });
                        var marker = new google.maps.Marker({
                            position: uluru,
                            map: map
                        });

                        google.maps.event.addListener(map, 'mouseover', (function(marker) {
                            return function() {
                                infowindow.setContent('Kyodai');
                                infowindow.open(map, marker);
                            }
                        })(marker));


                    }
                </script>
                <script async defer
                        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjTs0nbQbEecUygnKpThLfzRKES8nKS0A&callback=initMap">
                </script>
            </div>
        </div>
    </section>

    @include('site.include.footer')
</main>



</body>
</html>
