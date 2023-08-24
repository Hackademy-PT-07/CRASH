<x-main>
    <x-slot:title>Presto.it</x-slot:title>

    <header class="p-0">
        <img class="img-fluid" src="\images\header3.jpg" alt="">
        <x-navbar />
    </header>



    <section class="mt-3">


        <div class="container ">
            <h2 class="d-flex mt-5 align-item-center justify-content-center fs-2 BackGroundcolor "> Categorie </h2>
            <div>
                <div class="row d-flex  ">
                    <div class="col-12  icon-size-color d-flex  justify-content-center ">
                        <a href=""><i class="bi  bi-truck" data-aos="fade-right"></i></a>
                        <a href=""><i class="bi bi-pc-display " data-aos="fade-down"></i></a>
                        <a href=""><i class="bi bi-gear-fill" data-aos="fade-down"></i></a>
                        <a href=""><i class="bi bi-bicycle" data-aos="fade-down"></i></a>
                        <a href=""><i class="bi bi-house" data-aos="fade-left"></i></a>


                    </div>


                    <div class="col-12 col-md-12 icon-size-color d-flex  justify-content-center">
                        <a href=""><i class="bi bi-phone" data-aos="fade-right"></i></a>
                        <a href=""><i class="bi bi-bag" data-aos="fade-up"></i></a>
                        <a href=""><i class="bi bi-book" data-aos="fade-up"></i></a>
                        <a href=""><i class="bi bi-github" data-aos="fade-up"></i></a>
                        <a href=""><i class="bi bi-coin" data-aos="fade-left"></i></a>



                    </div>
                </div>

            </div>

    </section>


    <div>
        <div class="container my-5">
            <div class="row d-flex BackGroundIllustration" data-aos="fade-right" data-aos-duration="3000">
                <div class="col-12 col-md-6 ">
                    <img class=" img-fluid imgSize img-parallax"
                        src="https://hbswk.hbs.edu/PublishingImages/norton-shake.jpg" alt="">
                </div>
                <div class="col-12 col-md-6 my-5   fs-3 ">
                    <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Illo perspiciatis
                        amet
                        dolor quasi a consequatur, eius distinctio modi ratione. Modi esse ab labore, consectetur
                        laboriosam
                        fuga animi? Rerum, dicta eaque!</p>
                </div>
            </div>
            <div class="row  my-5  BackGroundIllustrationReverse" data-aos="fade-left" data-aos-duration="3000">
                <div class="col-12 col-md-6 my-5  r fs-3 ">
                    <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Illo perspiciatis
                        amet
                        dolor quasi a consequatur, eius distinctio modi ratione. Modi esse ab labore, consectetur
                        laboriosam
                        fuga animi? Rerum, dicta eaque!</p>
                </div>
                <div class="col-12 col-md-6 d-flex justify-content-end ">
                    <img class="img-fluid  imgSize img-parallax"
                        src="https://economiacircolare.com/wp-content/uploads/2021/01/vestiti-abiti-clothes-1068x712.jpg"
                        alt="">
                </div>
            </div>

            <div class="row d-flex BackGroundIllustration" data-aos="fade-right" data-aos-duration="3000">
                <div class="col-12 col-md-6  ">
                    <img class="img-fluid imgSize img-parallax"
                        src="https://www.gemius.com/files/GL/content/online%20shopping.JPG" alt="">
                </div>
                <div class="col-12 col-md-6 my-5  r fs-3 ">
                    <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Illo perspiciatis
                        amet
                        dolor quasi a consequatur, eius distinctio modi ratione. Modi esse ab labore, consectetur
                        laboriosam
                        fuga animi? Rerum, dicta eaque!</p>
                </div>
            </div>


        </div>
    </div>

    <div class="container mt-4 ">
        <div class="my-5 text-center">


            <section class="container mt-5">
                <div class="row my-5 d-flex">
                    <div class="col-6 justify-content-end BackGroundcolor">

                        <h2>Annunci piu recenti</h2>

                    </div>
                    <div class="col-6 ">
                        <a href="{{ route('insertions.index') }}" class=" buttonColor text-white   btn "> Vaia tutti gli
                            annunci</a>
                    </div>
                </div>
                <div class="row mt-5">

                    @foreach($insertions as $insertion)
                    <div class="col-12 col-md-3 " data-aos="zoom-out-up" data-aos-duration="1000">

                        <x-card :title="$insertion->title" :category="$insertion->category->name"
                            :price="$insertion->price" :description="$insertion->description" :body="$insertion->body"
                            :date="$insertion->created_at->diffForHumans()" :link="route('insertions.show', $insertion)"
                            :isAccepted="$insertion->is_accepted" />

                    </div>
                    @endforeach
                </div>
            </section>

</x-main>
<x-footer />