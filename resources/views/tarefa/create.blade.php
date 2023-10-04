@extends('layouts.app')

@section('content')
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">


            <div class="section-header">
                <h2>Crie sua Tarefa!</h2>
            </div>


            <div class="row gx-lg-0 gy-4">


                <div class="col-lg-4">

                    <div>
                        <img src="{{ asset('assets/img/tarefa.png') }}" alt="" width='370'>
                    </div>

                </div>


                <div class="col-lg-8">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="col-md-6mt-3 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Título"
                                required>
                        </div>
                        <div class="col-md-6mt-3 form-group">
                            <label for="datahora">Data-hora:</label>
                            <input type="datetime-local" name="datahora" class="form-control" id="datahora"
                                placeholder="Data-Hora" required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="7" placeholder="Descrição" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Carregando</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Tarefa criada com sucesso!</div>
                        </div>
                        <div class="text-center">
                            <a href="/tarefa" class="custom-button">Salvar Tarefa</a>
                        </div>
                    </form>
                </div><!-- End Contact Form -->



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
