<x-main>
    <x-navbar />
    <div class="container text-center text-white my-5   rounded-3 ">
        <div class="row">
            <h4 class="my-3 p-2 background-green rounded-3">Tutti gli annunci della categoria {{$category->name }}</h4>
            @forelse($category->insertions as $insertion)
            <div class="col-12 col-md-3">
                <x-card :title="$insertion->title" :category="$insertion->category->name" :price="$insertion->price"
                    :description="$insertion->description" :body="$insertion->body"
                    :date="$insertion->created_at->diffForHumans()" :link="route('insertions.show', $insertion)"
                    :isAccepted="$insertion->is_accepted" />
            </div>
            @empty
            <div class="col-12 my-5 mx-auto background-green  rounded-3">
                <h2>Non ci sono annunci della categoria {{$category->name}}</h2>
                <h3>Pubblicane uno: <a href="{{route('insertions.create')}}">
                        <div class="btn buttonColor">Inseriscine uno</div>
                    </a></h3>
            </div>
            @endforelse
        </div>
    </div>

    <!-- Footer -->
    <footer class="background-green text-center fixed-bottom  text-white">
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
                    <div class="row d-flex justify-content-center ">
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
        <div class="text-center p-3 col-auto" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2023 Copyright:
            <a class="text-white" href="/">Crash Team</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->

</x-main>