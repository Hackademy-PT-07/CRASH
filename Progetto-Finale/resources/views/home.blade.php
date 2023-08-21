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

    <div>
        <div class="container my-5">
            <div class="row d-flex BackGroundIllustration ">
                <div class="col-12 col-md-6  ">
                    <img class="img-fluid imgSize" src="https://hbswk.hbs.edu/PublishingImages/norton-shake.jpg" alt="">
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
            <div class="row  my-5 ">
                <div class="col-12 col-md-6 my-5  r fs-3 ">
                    <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Illo perspiciatis
                        amet
                        dolor quasi a consequatur, eius distinctio modi ratione. Modi esse ab labore, consectetur
                        laboriosam
                        fuga animi? Rerum, dicta eaque!</p>
                </div>
                <div class="col-12 col-md-6 d-flex justify-content-end ">
                    <img class="img-fluid  imgSize" src="https://hbswk.hbs.edu/PublishingImages/norton-shake.jpg"
                        alt="">
                </div>
            </div>

            <div class="row d-flex ">
                <div class="col-12 col-md-6  ">
                    <img class="img-fluid imgSize" src="https://hbswk.hbs.edu/PublishingImages/norton-shake.jpg" alt="">
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
                <div class="my-5">
                    <h2>Tutti gli annunci</h2>
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