<x-main>
    <x-slot:title>Presto.it</x-slot:title>

    <header class="p-0">
        <img class="img-fluid" src="\images\header.jpg" alt="">
        <div class="container">
            <div class="row ">
                <div class="col-12">


                </div>
            </div>
        </div>

    </header>
    <x-navbar />


    <div class="slider ">

        <div class="slide-track">

            <div class="slide">
                <img src="https://deov19kjit2mc.cloudfront.net/uploads/06_vintage-3-1024x1280.jpg">
            </div>
            <div class="slide">
                <img src="https://images.photowall.com/products/55390/classic-vintage-car.jpg?h=699&q=85">
            </div>
            <div class="slide">
                <img
                    src="https://revival-strapi.s3.eu-west-2.amazonaws.com/wpuploads/uploads/2020/12/Header-1-1024x421.jpg">
            </div>
            <div class="slide">
                <img
                    src="https://e1.pxfuel.com/desktop-wallpaper/905/12/desktop-wallpaper-retro-computer-aesthetic-for-pc-aesthetic-vintage.jpg">
            </div>
            <div class="slide">
                <img src="https://wisioi.com/cdn/shop/articles/square-blog-banners-1-1664985847136.jpg?v=1674146326">
            </div>
            <div class="slide">
                <img src="https://i.pinimg.com/564x/d5/03/07/d503079fdc5c25495e83d29dd6300912.jpg">
            </div>
            <div class="slide">
                <img src="https://i.pinimg.com/1200x/05/89/e5/0589e590c680a2d599646fcc2a86a959.jpg">
            </div>
            <div class="slide">
                <img
                    src="https://www.outletarredamento.it/images/arredo-giardino/midolino-artigianale-divano-da-giardino-in-offerta-outlet_n1_749213.webp">
            </div>
            <div class="slide">
                <img
                    src="https://gridfiti.com/wp-content/uploads/2021/06/Gridfiti_iOSIcons_Pastel_Multipack_ProdImages_Mock.jpg">
            </div>

        </div>

    </div>

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
                    <div class="col-6 justify-content-end">

                        <h2>Annunci piu recenti</h2>

                    </div>
                    <div class="col-6 ">
                        <a href="{{ route('insertions.index') }}" class=" buttonColor text-white   btn ">Vai
                            a
                            tutti gli annunci
                        </a>
                    </div>
                </div>
                <div class="row mt-5">

                    @foreach($insertions as $insertion)
                    <div class="col-12 col-md-3">

                        <x-card :title="$insertion->title" :category="$insertion->category->name"
                            :price="$insertion->price" :description="$insertion->description" :body="$insertion->body"
                            :date="$insertion->created_at->diffForHumans()"
                            :link="route('insertions.show', $insertion)" />

                    </div>
                    @endforeach
                </div>
            </section>

</x-main>
<x-footer />