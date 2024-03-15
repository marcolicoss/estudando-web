<?php
/**
 * Created by PhpStorm.
 * User: Luiz
 * Date: 18/11/2016
 * Time: 12:55
 */
?>

<header>
    <nav class="navbar navbar-inverse navbar-fixed-top topo">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#navbar-collapse" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="site/assets/img/logo-2.png" alt="" style="width: 100px;">
                </a>
            </div> <!--navbar-header-->


            <div class="navbar-collapse collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li id="link-home" class="@if($_SERVER['REQUEST_URI'] == '/'){{'active'}}@endif"><a href="/">Home</a></li>
                    <li id="link-quem-somos" class="@if($_SERVER['REQUEST_URI'] == '/quem-somos'){{'active'}}@endif">
                        <a href="{{ route('site.quem-somos') }}">Quem Somos</a>
                    </li>
                    <li id="link-cardapio" class="@if($_SERVER['REQUEST_URI'] == '/cardapio'){{'active'}}@endif">
                        <a href="{{ route('site.cardapio') }}">Cardápio</a>
                    </li>
                    <li id="link-localizacao" class="@if($_SERVER['REQUEST_URI'] == '/localizacao'){{'active'}}@endif">
                        <a href="{{ route('site.localizacao') }}">Localização</a>
                    </li>
                    <li id="link-contato" class="@if($_SERVER['REQUEST_URI'] == '/contato'){{'active'}}@endif">
                        <a href="{{ route('site.contato') }}">Contato</a>
                    </li>
                </ul>
            </div> <!-- collapse navbar-collapse -->

        </div> <!--container-->
    </nav>
</header>
