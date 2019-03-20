<?php
/*
  Template Name: Nova Home
*/

?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


    <link rel="stylesheet" href="/wp-content/themes/whistle/new_style/assets/css/style.css">
    <title>AtletasNow  - Pagina Inicial</title>
    <link rel='stylesheet' id='startos-fonts-css'  href='https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C600%2C700%2C800%2C300&#038;subset=latin%2Clatin-ext' type='text/css' media='all' />



    <link rel='stylesheet' id='redux-google-fonts-startos_option-css'  href='http://fonts.googleapis.com/css?family=Montserrat%3A300&#038;ver=1550572742' type='text/css' media='all' />
    <style type="text/css">


        header {
            width: 100%
            height:100vh;
            min-height:20%;
            max-height: 30%;
            background-size:cover;
            position: relative;
            background-image: url("/wp-content/themes/whistle/new_style/img/img-destaque-home.jpg");
        }


    </style>
</head>
<body>






<header>

    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="https://www.atletasnow.com/"><img src="/wp-content/themes/whistle/new_style/img/logo-cor-2.png"/></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item active">
                    <!-- <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a> -->
                </li>
                <li class="nav-item">
                    <!-- <a class="nav-link" href="#">Link</a> -->
                </li>
                <li class="nav-item">
                    <!-- <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div> -->
                </li>
                <li class="nav-item m-3">
                    <a class="nav-link2" href="https://www.atletasnow.com/">Sobre a AtletasNow</a>
                </li>
                <li class="nav-item m-3">
                    <a class="nav-link2" href="https://www.atletasnow.com/blog/">Blog</a>
                </li>
                <li class="nav-item mt-2 ml-3 mr-3">
                    <a class="nav-link2" href="https://www.atletasnow.com/app/cadastro/"><button class="btn btn-atleta">Sou Atleta Profissional</button></a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <a href="https://www.atletasnow.com/atletasnow-incluida-na-lista-dos-finalistas-do-yahoo-sports-technology-awards-2019-o-oscar-das-tecnologias-do-esporte/">  <img src="/wp-content/themes/whistle/new_style/img/selo-yahoo.png"> </a>
            </form>
        </div>
    </nav>


    <!-- <div class="row"> -->
    <div class="col-md-12">




        <div class="col-md-12 mt-5">

            <h1 class="h1_atletas text-center">Os melhores atletas profissionais</br>
                do Brasil estão aqui.</h1>
        </div>

    </div>







    <div class="col-md-12 section-5">
        <!-- <form autocomplete="off" action="/action_page.php">
          <div class="autocomplete" style="width:300px;">
            <input id="myInput" type="text" name="myCountry" placeholder="Country">
          </div>
          <input type="submit">
        </form> -->


        <div class="col-md-6 mt-5 mx-auto ">
            <form autocomplete="off" method="get" action="https://www.atletasnow.com/atleta-nao-encontrado/">
                <div class="input-group mb-4 autocomplete">
                    <input type="text" class="form-control mt-5 input_search input_wp"  id="pesquisa" name="pesquisa" placeholder="Digite o nome do atleta ou modalidade">
                    <div class="input-group-append">
                        <button style="" class="btn btn-largee mt-5" type="submit">
                            <i style="color:#ff5f00;" class="fa fa-search"></i>
                        </button>
                    </div>
            </form>

            <!-- <h4>Listando jogadores</h4> -->

            <div class="col-md-4 box_search" style="display: none; border: 1px solid #fff;margin: 5px;background-color: #fb8626;border-radius: 3px; background-color: #F5F5F5;
    border: 1px solid #DDDDDD;
    border-radius: 4px 0 4px 0;
    color: #3B3C3E;
    font-size: 12px;
    font-weight: bold;
    left: -1px;
    padding: 10px 7px 5px;
    overflow:scroll;
    overflow-x:hidden;">
                <h4 class="m-3" style="color: #212529;">Listando jogadores</h4>
                <hr style="display: block;
                height: 1px;
                border: 0;
                border-top: 1px solid #ccc;
                margin: 1em 0;
                padding: 0; ">
                <div class="result_search"></div>
                <hr style="display: block;
                height: 1px;
                border: 0;
                border-top: 1px solid #ccc;
                margin: 1em 0;
                padding: 0; ">
            </div>

        </div>


        <!-- <div class=""> -->
        <!-- <div class="col-md-6 mt-5"> -->
        <a href="https://www.atletasnow.com/modalidade-futebol/">Futebol</a> <a href="https://www.atletasnow.com/modaliadade-basquete/">Basquete</a><a href="https://www.atletasnow.com/modalidade-atletismo">Atletismo</a><a href="https://www.atletasnow.com/modalidade-natacao/">Natação</a><a href="https://www.atletasnow.com/modalidade-tenis">Tênis</a><a href="https://www.atletasnow.com/modalidade-golfe">Golfe</a> <a href="">Mais esportes</a>

        <!-- </div> -->
    </div>




    </div>

    <!-- <div class="row"> -->
    <div  class="col-md-12 mt-5 pb-5 section-6">
        <h1>Atletas em destaque:</h1>



        <!-- <div class="row"> -->



        <div style="width: 9%;
                              height: 60px;
                              /*float: left ;*/
                              right: 64em;
                              margin-left: 92%;
                              background-image: linear-gradient(118deg, #ff5f00, #a0002a);" class="mb-2">
            <i style="color: #fff;" class="fa fa-2x m-2 mt-3 fa-arrow-circle-left" aria-hidden="true"></i>
            <i style="color: #fff;" class="fa fa-2x m-2 mt-3 fa-arrow-circle-right" aria-hidden="true"></i>

        </div>


        <div class="col-md-12">


            <div class=" destaques destaques_first" style="float:left; width: 18%; position:absolute; z-index: 1; right: 30
        ;   height: 300px;">
                <img src="/wp-content/themes/whistle/new_style/atletas/gege.jpg">

                <span style=" position: absolute;
                              top: 7em;
                              left: 16px; font-family: Axiforma;
                              /*font-size: 16px;*/
                              font-weight: 600;
                              font-style: normal;
                              font-stretch: normal;
                              line-height: normal;
                              letter-spacing: -0.1px;
                              color: #ffffff;">Gêgê</span>


                <div style="width: 100%;">

                    <!-- <div class="row"> -->

                    <span style=" font-family: Axiforma;
                                  font-family: Axiforma;
                                  /*font-size: 14px;*/
                                  font-weight: 300;
                                  font-style: normal;
                                  font-stretch: normal;
                                  line-height: normal;
                                  letter-spacing: -0.1px;
                                  color: #4a4a4a;">Basquete</span>

                    <!-- </div> -->

                </div>



                <div style="width: 100%;">

                      <span style="font-family: Axiforma;
                                    font-size: 14px;
                                    font-weight: 600;
                                    font-style: normal;
                                    font-stretch: normal;
                                    line-height: normal;
                                    letter-spacing: -0.1px;
                                    color: #4a4a4a;">Melhor Armador</span>

                </div>


                <div class="row">



                    <div style="width: 30%;
                      height: 60px;

                    ">

                        <span style="font-family: Axiforma;
                        font-size: 60px;
                        font-weight: 600;
                        font-style: normal;
                        font-stretch: normal;
                        line-height: normal;
                        letter-spacing: -0.3px;
                        color: #d03014;" class="ml-3">12</span>

                    </div>

                    <div style="width: 30%;" class="mr-4 mt-3">
                        <div class="progress" data-percentage="20">
                            <span class="progress-left">
                              <span class="progress-bar"></span>
                            </span>
                            <span class="progress-right">
                              <span class="progress-bar"></span>
                            </span>
                            <div class="progress-value">

                            </div>
                        </div>
                    </div>




                </div>


                <div style="width: 100%;
                      height: 14px;
                      font-family: Axiforma;
                      font-size: 14px;
                      font-weight: 300;
                      font-style: normal;
                      font-stretch: normal;
                      line-height: normal;
                      letter-spacing: -0.1px;
                      color: #4a4a4a;
                      margin-top: 5%;
                    ">Assistências por jogo</div>
            </div>


            <!-- </div> -->


            <!-- <div class="row"> -->


            <div class="  destaques " style=" width: 18%; position:absolute; z-index: 1; /* put .green-box above .dashed-box */ ; right: 48em;  height: 300px;">

                <img src="/wp-content/themes/whistle/new_style/atletas/marcos_rocha.jpg">


                <span style=" position: absolute;
                              top: 7em;
                              left: 16px; font-family: Axiforma;
                              /*font-size: 16px;*/
                              font-weight: 600;
                              font-style: normal;
                              font-stretch: normal;
                              line-height: normal;
                              letter-spacing: -0.1px;
                              color: #ffffff;">Marcos Rocha</span>


                <div style="width: 100%;">

                    <!-- <div class="row"> -->

                    <span style=" font-family: Axiforma;
                                  font-family: Axiforma;
                                  /*font-size: 14px;*/
                                  font-weight: 300;
                                  font-style: normal;
                                  font-stretch: normal;
                                  line-height: normal;
                                  letter-spacing: -0.1px;
                                  color: #4a4a4a;">Futebol</span>

                    <!-- </div> -->

                </div>



                <div style="width: 100%;">

                      <span style="font-family: Axiforma;
                                    font-size: 14px;
                                    font-weight: 600;
                                    font-style: normal;
                                    font-stretch: normal;
                                    line-height: normal;
                                    letter-spacing: -0.1px;
                                    color: #4a4a4a;">Melhor Desarmador</span>

                </div>



                <div class="row">



                    <div style="width: 30%;
                      height: 60px;

                    ">

                        <span style="font-family: Axiforma;
                        font-size: 60px;
                        font-weight: 600;
                        font-style: normal;
                        font-stretch: normal;
                        line-height: normal;
                        letter-spacing: -0.3px;
                        color: #d03014;" class="ml-2">62</span>

                    </div>

                    <div style="width: 30%;" class="mr-3 mt-3">
                        <div class="progress" data-percentage="60">
                            <span class="progress-left">
                              <span class="progress-bar"></span>
                            </span>
                            <span class="progress-right">
                              <span class="progress-bar"></span>
                            </span>
                            <div class="progress-value">

                            </div>
                        </div>
                    </div>




                </div>



                <div style="width: 100%;
                      height: 14px;
                      font-family: Axiforma;
                      font-size: 14px;
                      font-weight: 300;
                      font-style: normal;
                      font-stretch: normal;
                      line-height: normal;
                      letter-spacing: -0.1px;
                      color: #4a4a4a;
                      margin-top: 5%;
                    ">Desarmes certos em 2018</div>
            </div>


            <div class=" destaques" style="width: 20%; position:absolute; z-index: 1; /* put .green-box above .dashed-box */ ; right: 32em;  height: 300px;">

                <img src="/wp-content/themes/whistle/new_style/atletas/dani.jpg">

                <span style=" position: absolute;
                              top: 7em;
                              left: 16px; font-family: Axiforma;
                              /*font-size: 16px;*/
                              font-weight: 600;
                              font-style: normal;
                              font-stretch: normal;
                              line-height: normal;
                              letter-spacing: -0.1px;
                              color: #ffffff;">Danielle Lins</span>


                <div style="width: 100%;">

                    <!-- <div class="row"> -->

                    <span style=" font-family: Axiforma;
                                  font-family: Axiforma;
                                  /*font-size: 14px;*/
                                  font-weight: 300;
                                  font-style: normal;
                                  font-stretch: normal;
                                  line-height: normal;
                                  letter-spacing: -0.1px;
                                  color: #4a4a4a;">Vôlei</span>

                    <!-- </div> -->

                </div>



                <div style="width: 100%;">

                      <span style="font-family: Axiforma;
                                    font-size: 14px;
                                    font-weight: 600;
                                    font-style: normal;
                                    font-stretch: normal;
                                    line-height: normal;
                                    letter-spacing: -0.1px;
                                    color: #4a4a4a;">Melhor Saque</span>

                </div>


                <div class="row">



                    <div style="width: 30%;
                      height: 60px;

                    ">

                        <span style="font-family: Axiforma;
                        font-size: 60px;
                        font-weight: 600;
                        font-style: normal;
                        font-stretch: normal;
                        line-height: normal;
                        letter-spacing: -0.3px;
                        color: #d03014;" class="ml-3">13</span>

                    </div>

                    <div style="width: 30%;" class="mr-4 mt-3">
                        <div class="progress" data-percentage="10">
                            <span class="progress-left">
                              <span class="progress-bar"></span>
                            </span>
                            <span class="progress-right">
                              <span class="progress-bar"></span>
                            </span>
                            <div class="progress-value">

                            </div>
                        </div>
                    </div>




                </div>

                <!-- <div class="col-sm-3 col-md-2">/ -->

                <!-- </div> -->


                <div style="width: 100%;
                      height: 14px;
                      font-family: Axiforma;
                      font-size: 14px;
                      font-weight: 300;
                      font-style: normal;
                      font-stretch: normal;
                      line-height: normal;
                      letter-spacing: -0.1px;
                      color: #4a4a4a;
                      margin-top: 5%;
                    ">ACEs temporada 2018</div>
            </div>


            <div class=" destaques" style="width: 20%;  position:absolute; z-index: 1; /* put .green-box above .dashed-box */ ; right: 16em;  height: 300px;">
                <img src="/wp-content/themes/whistle/new_style/atletas/brandonn.jpg">

                <span style=" position: absolute;
                              top: 7em;
                              left: 16px; font-family: Axiforma;
                              /*font-size: 16px;*/
                              font-weight: 600;
                              font-style: normal;
                              font-stretch: normal;
                              line-height: normal;
                              letter-spacing: -0.1px;
                              color: #ffffff;">Brandonn Almeida</span>


                <div style="width: 100%;">

                    <!-- <div class="row"> -->

                    <span style=" font-family: Axiforma;
                                  font-family: Axiforma;
                                  /*font-size: 14px;*/
                                  font-weight: 300;
                                  font-style: normal;
                                  font-stretch: normal;
                                  line-height: normal;
                                  letter-spacing: -0.1px;
                                  color: #4a4a4a;">Natação</span>

                    <!-- </div> -->

                </div>



                <div style="width: 100%;">

                      <span style="font-family: Axiforma;
                                    font-size: 14px;
                                    font-weight: 600;
                                    font-style: normal;
                                    font-stretch: normal;
                                    line-height: normal;
                                    letter-spacing: -0.1px;
                                    color: #4a4a4a;">Melhor 400m medley</span>

                </div>

                <div style="width: 100%;width: 59px;
                      height: 60px;
                      font-family: Axiforma;
                      font-size: 60px;
                      font-weight: 600;
                      font-style: normal;
                      font-stretch: normal;
                      line-height: normal;
                      letter-spacing: -0.3px;
                      color: #d03014;
                    " class="mt-4">4’03’’</div>


                <div style="width: 100%;
                      height: 14px;
                      font-family: Axiforma;
                      font-size: 14px;
                      font-weight: 300;
                      font-style: normal;
                      font-stretch: normal;
                      line-height: normal;
                      letter-spacing: -0.1px;
                      color: #4a4a4a;
                      margin-top: 5%;
                    ">Bronze no mundial da China</div>
            </div>


            <div class="  destaques" style="width: 20%;  position:absolute; z-index: 1; /* put .green-box above .dashed-box */ ; right: 0em;  height: 300px;">
                <img src="/wp-content/themes/whistle/new_style/atletas/thiago.jpg">

                <span style=" position: absolute;
                              top: 7em;
                              left: 16px; font-family: Axiforma;
                              /*font-size: 16px;*/
                              font-weight: 600;
                              font-style: normal;
                              font-stretch: normal;
                              line-height: normal;
                              letter-spacing: -0.1px;
                              color: #ffffff;">Thiago Monteiro</span>


                <div style="width: 100%;">

                    <!-- <div class="row"> -->

                    <span style=" font-family: Axiforma;
                                  font-family: Axiforma;
                                  /*font-size: 14px;*/
                                  font-weight: 300;
                                  font-style: normal;
                                  font-stretch: normal;
                                  line-height: normal;
                                  letter-spacing: -0.1px;
                                  color: #4a4a4a;">Tênis</span>

                    <!-- </div> -->

                </div>



                <div style="width: 100%;">

                      <span style="font-family: Axiforma;
                                    font-size: 14px;
                                    font-weight: 600;
                                    font-style: normal;
                                    font-stretch: normal;
                                    line-height: normal;
                                    letter-spacing: -0.1px;
                                    color: #4a4a4a;">Melhor Tenista Brasileiro</span>

                </div>

                <div style="width: 100%;width: 59px;
                      height: 60px;
                      font-family: Axiforma;
                      font-size: 60px;
                      font-weight: 600;
                      font-style: normal;
                      font-stretch: normal;
                      line-height: normal;
                      letter-spacing: -0.3px;
                      color: #d03014;
                    " class="mt-4">126º</div>


                <div style="width: 100%;
                      height: 14px;
                      font-family: Axiforma;
                      font-size: 14px;
                      font-weight: 300;
                      font-style: normal;
                      font-stretch: normal;
                      line-height: normal;
                      letter-spacing: -0.1px;
                      color: #4a4a4a;
                      margin-top: 5%;
                    ">No Ranking da ATP</div>
            </div>

            <!-- </div> -->

        </div>



    </div>

    <!-- </div> -->


    <!-- </div> -->
</header>


<!-- </div> -->

<!-- <div class="row"> -->

<!-- <div class="container">

    <div class="col-md-12">

    </div>
</div> -->


<div class="col-md-12 container-h-100"" style="height: 20em;">



<!-- <div class="row"> -->



<!-- </div> -->


</div>


<div class="col-md-12 section-1 mt-5">



    <div class="row p-5">

        <div class="col-md-12 text-center mt-5">

            <h1 class="">Atleta, aumente suas chances de vencer.</h1>
            <p>Ganhe visibilidade, oportunidades de patrocínio, acesso à profissionais do esporte,
                conteúdos e descontos exclusivos.</p>
            <a href="https://www.atletasnow.com/app/cadastro/">  <button   class="btn m-3">Cadastre-se no AtletasNow</button></a>
        </div>

    </div>


</div>




<!-- PARA QUEM E O ATLETAS NOW -->
<div class="container">
    <div class="col-md-12 section-3 mt-3">

        <h1 class="first">Para quem é  AtletasNow?</h1>


        <!-- <div class="row"> -->


        <div class="col-md-12">

            <div class="row">
                <div class="col-md-6">
                    <h1>Atletas</br>
                        Profissionais</h1>

                    <a  href="https://www.atletasnow.com/app/cadastro/ ">  <button class="p-2">Sou atleta profissional</button> </a>

                </div>

                <div class="col-md-4 text-left mt-5">


                    <ul class="list-unstyled">
                        <ul style="font-family: Axiforma;
  /*font-size: 22px;*/
                              font-weight: 300;
                              font-style: normal;
                              font-stretch: normal;
                              line-height: 1.45;
                              letter-spacing: -0.1px;
                              color: #4a4a4a;">
                            <li>Estatísticas oficiais</li>
                            <li>Visibilidade</li>
                            <li>Oportunidades de patrocínio</li>
                            <li>Acesso à profissionais do esporte</li>
                            <li>Conteúdos e descontos exclusivos</li>
                        </ul>
                    </ul>

                </div>

            </div>

        </div>


        <div class="col-md-12">

            <div class="row">
                <div class="col-md-6">
                    <h1>Clubes e </br>
                        Universidades</h1>

                    <a  href="https://www.atletasnow.com/clubes/">  <button class="p-2">Represento um Clube</button> </a>
                    <!-- <button class="p-2">Represento um Clube</button> -->

                </div>

                <div class="col-md-6 text-left mt-5">


                    <ul class="list-unstyled">
                        <ul style="font-family: Axiforma;
  /*font-size: 22px;*/
                              font-weight: 300;
                              font-style: normal;
                              font-stretch: normal;
                              line-height: 1.45;
                              letter-spacing: -0.1px;
                              color: #4a4a4a;">
                            <li>Perfil oficial e atletas vinculados</li>
                            <li>Estatísticas de todos os jogadores</li>
                            <li>Busca avançada de atletas</li>
                            <li>Publicação, contato e seleção de atletas</li>
                            <li>Comunicação única com os atletas do clube</li>
                        </ul>
                    </ul>

                </div>

            </div>

        </div>




        <div class="col-md-12">

            <div class="row">
                <div class="col-md-6">
                    <h1>Profissionais</br>
                        do Esporte</h1>

                    <!-- <button class="p-2">Sou Profissional do Esporte</button> -->
                    <a  href="https://www.atletasnow.com/profissionais-do-esporte/">  <button class="p-2">Sou Profissional do Esporte</button> </a>

                </div>

                <div class="col-md-6 text-left mt-5">

                    <ul class="list-unstyled">
                        <ul style="font-family: Axiforma;
  /*font-size: 22px;*/
                              font-weight: 300;
                              font-style: normal;
                              font-stretch: normal;
                              line-height: 1.45;
                              letter-spacing: -0.1px;
                              color: #4a4a4a;">
                            <li> Perfil oficial </li>
                            <li> Atletas conectados ao profissional</li>
                            <li> Recomendações de atletas </li>
                            <li> Divulgação segmentada dos serviços </li>
                            <li>Busca avançada de atletas</li>

                        </ul>

                    </ul>

                </div>

            </div>

        </div>



        <div class="col-md-12">

            <div class="row">
                <div class="col-md-6">
                    <h1>Confederações</br>
                        e Federações</h1>

                    <!-- <button class="p-2">Represento uma Federação</button> -->
                    <a  href="https://www.atletasnow.com/confederacoes/ ">  <button class="p-2">Represento uma Federaçao</button> </a>

                </div>

                <div class="col-md-6 text-left mt-5">


                    <ul class="list-unstyled">
                        <ul style="font-family: Axiforma;
  /*font-size: 22px;*/
                              font-weight: 300;
                              font-style: normal;
                              font-stretch: normal;
                              line-height: 1.45;
                              letter-spacing: -0.1px;
                              color: #4a4a4a;">

                            <li> Perfil oficial e seus atletas </li>
                            <li> Estatísticas dos jogadores  </li>
                            <li> Busca avançada de atletas </li>
                            <li> Comunicação única com todos os atletas </li>

                        </ul>

                    </ul>

                </div>

            </div>

        </div>

        <!-- </div> -->


        <!-- </div> -->
    </div>


</div>




<div class="container-h-100" style="width: 100%">
    <img width="100%" src="/wp-content/themes/whistle/new_style/img/awards.jpeg">
</div>





<div class="col-md-12 section-4">


    <!-- <div class="col-md-12 section-4 text-center"> -->

    <div class="row" style="font-family: Axiforma;">
        <div class="col-md-12 p-2"><h1 class="first" style="font-family: Axiforma;">Conteúdos Exclusivos AtletasNow</h1></div>


        <?php
        $args = array(
            'numberposts' => 3,

        );

        $recent_posts = wp_get_recent_posts( $args );


        ?>

        <?php
        // $recent_posts = wp_get_recent_posts();
        foreach( $recent_posts as $recent ){



            ?>





            <!-- echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> '; -->

            <?php $acabar =  get_the_post_thumbnail( $recent["ID"], "thumbnail" );

            ?>

            <!-- <div class="row"> -->
            <div class="col-md-4">

                <img class="m-4" src="<?php echo
                $acabar;  ?>

                        <a href="<?php  echo get_permalink(  $recent["ID"]); ?>"><h2 class="text-left m-4"> <?php echo  $recent['post_title']; ?></h2></a>

                <p class="text-left m-4"><?php $trimmed_content = wp_trim_words( $recent['post_content'], 35, NULL );

                    echo $trimmed_content; ?></p>
            </div>
            <!-- </div> -->

            <?php
        }
        wp_reset_query();
        ?>


        <div class="col-md-12 text-center"><a href="https://www.atletasnow.com/blog"><button class="btn p-3 m-4">Mais Conteúdos</button></a></div>



    </div>

</div>









<!-- Footer -->
<footer class="page-footer pt-4">

    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-center">

        <!-- Grid row -->
        <div class="row m-5">

            <!-- Grid column -->
            <div class="col-md-4 text-left">

                <div class="col-md-4">

                    <img src="/wp-content/themes/whistle/new_style/img/logo-cor-2.png"  class="">

                </div>



                <!-- <div class="col-md-3"> -->
                <!-- Content -->
                <h5 class="text-uppercase"></h5>
                <p class="p_footer">Nossa plataforma conecta todas as pontas do esporte através de um meio digital e inovador. Nós somos o networking esportivo para quem quer se destacar no mundo dos esportes</p>
                <!-- </div> -->

                <!-- <span></span> -->

            </div>
            <!-- Grid column -->

            <!-- <hr class="clearfix w-100 d-md-none pb-3"> -->

            <!-- Grid column -->
            <div class="col-md-4 footer_left-column text-left">

                <!-- Links -->
                <!-- <h5 class="text-uppercase">Links</h5> -->

                <a href="https://www.atletasnow.com/app/cadastro/"><button class="btn btn-primary">Sou atleta profissional</button></a>

                <ul class="list-unstyled mt-3">
                    <li>
                        <a href="https://www.atletasnow.com/clubes/">Clubes</a>
                    </li>
                    <li>
                        <a href="https://www.atletasnow.com/profissionais-do-esporte/">Profissionais do Esporte</a>
                    </li>
                    <li>
                        <a href="https://www.atletasnow.com/confederacoes/">Confederações e Federações</a>
                    </li>

                    <hr>
                    <li>
                        <a href="#!">Sobre o AtletasNow</a>
                    </li>

                    <li><a href="https://www.atletasnow.com/blog">Nosso Blog</a></li>
                </ul>

            </div>
            <!-- Grid column -->


            <style type="text/css">

                .footer_right-column a{

                    color: #fff;
                }

            </style>

            <!-- Grid column -->
            <div style="font-family: Axiforma; text-decoration: none;" class="col-md-4 footer_right-column text-left">

                <!-- Links -->
                <h3>Contatos</h3>

                <div class="row">
                    <div class="col-md-4">
                        <span>Imprensa:</span>
                        <p><a href="mailto:press@atletasnow.com?Subject=Hello%20again" target="_top">press@atletasnow.com</a></p>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">

                        <span>Parcerias:</span>
                        <!-- <p>partner@atletasnow.com</p> -->
                        <p><a href="mailto:partner@atletasnow.com?Subject=Hello%20again" target="_top">partner@atletasnow.com</a></p>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <span>Suporte:</span>
                        <!-- <p>support@atletasnow.com</p> -->
                        <p><a href="mailto:support@atletasnow.com?Subject=Hello%20again" target="_top">support@atletasnow.com</a></p>
                    </div>
                </div>


                <style type="text/css">

                    .inner {
                        display: inline-block;
                        vertical-align: middle;
                        /*background: yellow;*/
                        padding: 3px 5px;
                        /*padding: 15px;*/
                        margin:5%;
                        width: 6em;
                        height: 45px;
                        border-radius: 5px;
                        background-image: linear-gradient(135deg, #ff5f00, #a0002a);
                    }
                </style>

                <!-- <div class="row"> -->
                <div class="col-md-4 d-flex justify-content-center ml-4" style="">

                    <div class="" style=""><a href="https://www.facebook.com/atletasnow/"><img width="64" height="64" src="https://www.atletasnow.com/wp-content/themes/whistle/new_style/img/Captura%20de%20Tela%202019-03-15%20a%CC%80s%2014.19.56.png" /></a></div>
                    <div class="mt-1" style=""><a href="https://www.instagram.com/atletas_now/"><img width="60"  height="60" src="/wp-content/themes/whistle/new_style/img/Captura de Tela 2019-03-15 às 14.25.30.png"></a></div>
                    <div class="mt-1" style=""><a href="https://twitter.com/atletasnow"><img width="60"  height="60" src="/wp-content/themes/whistle/new_style/img/Captura de Tela 2019-03-15 às 14.25.40.png"></a></div>
                </div>
                <!-- <div class="square "></div> -->

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="col-md-12 footer-copyright text-left">© 2019 - AtletasNow
        <!-- <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a> -->
    </div>
    <!-- Copyright -->




</footer>
<!-- Footer -->




<style type="text/css">
    @media only screen and (max-width: 408px) {
        .destaques_first  {

            display: block !important;
            float:left; width: 80% !important; position:absolute; z-index: 1; right: 2em;   height: 300px;

        }
        .destaques {

            display: none;
        }
    }

</style>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<script>


    $('.input_wp').on('input', function(){
        // alert('Input changed');


        if(document.querySelector('.input_wp').value.length >= 3){

            /* Mostrar combo */

            $(".box_search").css('display', 'block');

            console.log(document.querySelector('.input_wp').value);

            // Exemplo de requisição POST
            var ajax = new XMLHttpRequest();

            // Seta tipo de requisição: Post e a URL da API
            ajax.open("POST", "/wp-content/themes/whistle/api.php", true);
            ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

            // Seta paramêtros da requisição e envia a requisição
            ajax.send("nome="+ document.querySelector('.input_wp').value);

            // Cria um evento para receber o retorno.
            ajax.onreadystatechange = function() {

                // Caso o state seja 4 e o http.status for 200, é porque a requisiçõe deu certo.
                if (ajax.readyState == 4 && ajax.status == 200) {

                    var data = ajax.responseText;


                    var html = "";
                    var data2 = JSON.parse(data);

                    Object.keys(data2).forEach(function(k){
                        console.log(  ' - ' + data2["nome_completo"]);


                        html += "<div class='group_result'><a><h2 style=\"\n" +
                            "                    font-family: Axiforma;\n" +
                            "                    /* font-size: 36px; */\n" +
                            "                  font-weight: 200;\n" +
                            "                  font-style: normal;\n" +
                            "                  font-stretch: normal;\n" +
                            "                  line-height: normal;\n" +
                            "                  /*letter-spacing: -0.2px;*/\n" +
                            "                  text-align: left;\n" +
                            "                  color: #f8f9fa;\n" +
                            "                  \">"+data2["nome_completo"]+"</h2>\n" +
                            "                  <h5 style=\"\n" +
                            "                  font-family: Axiforma;\n" +
                            "                  /* font-size: 36px; */\n" +
                            "                  font-weight: 200;\n" +
                            "                  font-style: normal;\n" +
                            "                  font-stretch: normal;\n" +
                            "                  line-height: normal;\n" +
                            "                  /*letter-spacing: -0.2px;*/\n" +
                            "                  text-align: left;\n" +
                            "                  color: #fff;\n" +
                            "                  \">Futebol</h5></a></div>";

                    });


                    $( ".result_search" ).append( html );
                    // Retorno do Ajax
                    // console.log(data);
                }
            }

        }
    });

</script>
</body>
</html>