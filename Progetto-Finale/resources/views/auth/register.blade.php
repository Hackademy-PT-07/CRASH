<x-main>
    <x-navbar />
    <x-slot:title>Registrati</x-slot:title>
    <div class="container ">
        <div class="row">
            <div class="col-6 mx-auto my-5 ">
                <div class="card p-3 text-white background-green ">
                    <form action="/register" method="POST">
                        @csrf
                        <h3 class="mt-3">{{__('ui.register')}}</h3>
                        <div class="col-12 mt-3  ">
                            <label for="name">{{__('ui.name')}}</label>
                            <input class="form-control focus-ring focus-ring-danger " type="text" name="name" id="name">
                            @error('name')<p class="small rounded my-2 errorBackground text-danger">{{ $message }}
                            </p> @enderror
                        </div>
                        <div class="col-12 mt-3">
                            <label for="email">{{__('ui.email')}}</label>
                            <input class="form-control focus-ring focus-ring-danger" type="email" name="email"
                                id="email">
                            @error('email')<p class="small rounded my-2 errorBackground text-danger">{{ $message }}
                            </p> @enderror
                        </div>
                        <div class="col-12 mt-3">
                            <label for="password">Password</label>
                            <input class="form-control focus-ring focus-ring-danger" type="password" name="password"
                                id="password">
                            @error('password')<p class="small rounded my-2 errorBackground text-danger">{{ $message }}
                            </p> @enderror
                        </div>
                        <div class="col-12 mt-3">
                            <label for="password_confirmation">{{__('ui.confirmPassword')}}</label>
                            <input class="form-control focus-ring focus-ring-danger" type="password"
                                name="password_confirmation" id="password_confirmation">
                            @error('password')<p class="small rounded my-2 errorBackground text-danger">{{ $message }}
                            </p> @enderror
                        </div>
                        <div class="col-12 my-3">
                            <button type="submit" class="btn text-white buttonColor">{{__('ui.register')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="background-green text-center fixed-bottom text-white">
        <!-- Grid container -->
        <div class="container p-4">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a class="btn btn-outline-light btn-floating m-1" href="" role="button"><i
                        class="bi bi-facebook"></i></a>

                <!-- Instagram -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="bi bi-instagram"></i></a>

                <!-- Linkedin -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="bi bi-linkedin"></i></a>

                <!-- Github -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="bi bi-github"></i></a>
            </section>
            <!-- Section: Social media -->

            <!-- Section: Form -->
            <section class="">
                <form action="">
                    <!--Grid row-->
                    <div class="row d-flex justify-content-center">
                        <!--Grid column-->
                        <div class="col-auto">
                            <p class="pt-2">
                                <strong>Lavora con noi</strong>
                            </p>
                        </div>
                        <!--Grid column-->



                        <!--Grid column-->
                        <div class="col-auto">
                            <!-- Submit button -->
                            <a href="{{ route('become.revisor')}}" class="btn btn-outline-light mb-4">Diventa
                                revisore</a>

                        </div>
                        <!--Grid column-->
                    </div>
                    <!--Grid row-->
                </form>
            </section>
            <!-- Section: Form -->

            <!-- Section: Text -->
            <section class="mb-4">
                <p>
                    <strong>Presto.it</strong>
                </p>
            </section>
            <!-- Section: Text -->


        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2023 Copyright:
            <a class="text-white" href="/">Crash Team</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
</x-main>