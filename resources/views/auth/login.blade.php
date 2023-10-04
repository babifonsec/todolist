@extends('layouts.app')

@section('content')
    <section class="text-center text-lg-start">
        <style>
            .cascading-right {
                margin-right: -50px;
            }

            @media (max-width: 991.98px) {
                .cascading-right {
                    margin-right: 0;
                }
            }
        </style>

        <!-- Jumbotron -->
        <div class="container py-4">
            <div class="row g-0 align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="card cascading-right"
                        style="
            background: hsla(0, 0%, 100%, 0.55);
            backdrop-filter: blur(30px);
            ">
                        <div class="card-body p-5 shadow-5 text-center">
                            <h2 class="fw-bold mb-5">Sign in</h2>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <input type="email" id="email" name="email" class="form-control" required />
                                    <label class="form-label" for="email">Email address</label>
                                </div>

                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                    <input type="password" id="password" name="password" class="form-control" required />
                                    <label class="form-label" for="password">Password</label>
                                </div>

                                <!-- Submit button -->
                                <button type="submit" class=" custom-button">
                                    Sign in
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-5 mb-lg-0">
                    <img src="{{ asset('assets/img/login.png') }}" alt="Moça lendo" width='500'
                        style="margin-left: 100px">
                </div>
            </div>
        </div>
        <!-- Jumbotron -->
    </section>
@endsection
