@extends('layouts.app')

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>ToDo List</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->

    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css" rel="stylesheet') }}">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Impact
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>


@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero">
        <div class="container position-relative">
            <div class="row gy-5" data-aos="fade-in">
                <div
                    class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
                    <h2 id='texto'>Bem vindo ao ToDo List</h2>
                    <p id='texto'>Organize suas tarefas e pare de procrastinar :)</p>
                    @auth
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="/crialista" class="btn-get-started" id='texto btn'>Criar Lista</a>

                    </div>
                    @else
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="/login" class="btn-get-started" id='texto btn'>Criar Lista</a>

                    </div>
                    @endauth
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <img src="{{ asset('assets/img/hero-bg.png') }}" class="img-fluid" alt="" data-aos="zoom-out"
                        data-aos-delay="100" width="500">
                </div>

            </div>
        </div>
@auth

        <div class="icon-boxes position-relative" style="margin-top: -5%">
            <div class="container position-relative">
                <div class="row gy-4 mt-5">
                    <h4>Suas Listas:</h4>
                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="list-group">
                            <a href="/lista" class="list-group-item list-group-item-action cor" aria-current="true">
                                Aniversário
                            </a>
                            <button type="button" class="list-group-item list-group-item-action">Buscar o Bolo</button>
                            <button type="button" class="list-group-item list-group-item-action">Arrumar a
                                decoração</button>
                            <button type="button" class="list-group-item list-group-item-action">Comprar as
                                bebidas</button>
                        </div>
                    </div><!--End Icon Box -->

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="list-group">
                            <button type="button" class="list-group-item list-group-item-action cor" aria-current="true">
                                Escola
                            </button>
                            <button type="button" class="list-group-item list-group-item-action">Fazer trabalho do Rogi</button>
                            <button type="button" class="list-group-item list-group-item-action">Prova de biologia</button>
                            <button type="button" class="list-group-item list-group-item-action">Prova de quimica</button>
                            <button type="button" class="list-group-item list-group-item-action">Redação</button>
                        </div>
                    </div><!--End Icon Box -->

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="list-group">
                            <button type="button" class="list-group-item list-group-item-action cor" aria-current="true">
                                Casa
                            </button>
                            <button type="button" class="list-group-item list-group-item-action">Lavar a louça</button>
                            <button type="button" class="list-group-item list-group-item-action">Arrumar o quarto</button>
                            <button type="button" class="list-group-item list-group-item-action">Comprar as
                                bebidas</button>
                        </div>
                    </div><!--End Icon Box -->


                </div>
            </div>
        </div>
        @else
        <div class="espaco"> </div>
        @endauth
        </div>
    </section>



    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
@endsection
