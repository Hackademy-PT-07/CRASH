<x-main>
    <x-slot:title>Presto.it</x-slot:title>

    <div class="p-0">
        <img class="img-fluid" src="\images\header3.jpg" alt="">
    </div>
    <x-navbar />
    <div class="container p-0">
        <div class="row m-5 p-0">
            <div class="col-12 mt-4">
                <h2 class="d-flex justify-content-center">{{__('ui.categories')}}</h2>
            </div>
            @foreach($categories as $category)
            <div class="col-4 col-md-3 col-lg-2">
                <div class="d-flex flex-column justify-content-center align-items-center py-3">
                    <a href="{{route('categoryShow', compact('category'))}}"><i
                            class="{{ $category->icon }} icon px-4 rounded"></i></a>
                    <h5 class="mt-3 text-center">{{__('ui.category_' . $category->id)}}</h5>
                </div>
            </div>
            @endforeach
        </div>

    </div>






    <div class="container my-5">
        <div class="row d-flex BackGroundIllustration  " data-aos="fade-right" data-aos-duration="3000">
            <div class="col-12 col-md-6   ">
                <img class=" img-fluid " src="https://hbswk.hbs.edu/PublishingImages/norton-shake.jpg" alt="">
            </div>
            <div class="col-12 col-md-6 my-5   fs-3 ">
                <p class="p-3 ">Lorem ipsum dolor sit amet, consectetur adipisicing
                    elit. Illo perspiciatis
                    amet
                    dolor quasi a consequatur, eius distinctio modi ratione. Modi esse ab labore, consectetur
                    laboriosam
                    fuga animi? Rerum, dicta eaque!</p>
            </div>
        </div>
        <div class="row  my-5  BackGroundIllustrationReverse" data-aos="fade-left" data-aos-duration="3000">
            <div class="col-12 col-md-6 my-5  r fs-3 ">
                <p class="p-3">Lorem ipsum dolor sit amet, consectetur adipisicing
                    elit. Illo perspiciatis
                    amet
                    dolor quasi a consequatur, eius distinctio modi ratione. Modi esse ab labore, consectetur
                    laboriosam
                    fuga animi? Rerum, dicta eaque!</p>
            </div>
            <div class="col-12 col-md-6 d-flex justify-content-end ">
                <img class="img-fluid"
                    src="https://economiacircolare.com/wp-content/uploads/2021/01/vestiti-abiti-clothes-1068x712.jpg"
                    alt="">
            </div>
        </div>

        <div class="row d-flex BackGroundIllustration" data-aos="fade-right" data-aos-duration="3000">
            <div class="col-12 col-md-6  ">
                <img class="img-fluid" src="https://www.gemius.com/files/GL/content/online%20shopping.JPG" alt="">
            </div>
            <div class="col-12 col-md-6 my-5  r fs-3 ">
                <p class="p-3">Lorem ipsum dolor sit amet, consectetur adipisicing
                    elit. Illo perspiciatis
                    amet
                    dolor quasi a consequatur, eius distinctio modi ratione. Modi esse ab labore, consectetur
                    laboriosam
                    fuga animi? Rerum, dicta eaque!</p>
            </div>
        </div>


    </div>


    <div class="container mt-4 ">
        <div class="my-5 text-center">


            <section class="container mt-5">
                <div class="row ">
                    <div class="p-4 d-flex justify-content-between">
                        <h2>{{__('ui.lastestInsertions')}}</h2>
                        <a href="{{ route('insertions.index') }}" class=" buttonColor text-white text-end  btn ">
                            {{__('ui.goToAllInsertions') }}</a>

                    </div>

                </div>
                <div class="row mt-4">

                    @foreach($insertions as $insertion)
                    <div class="col-12  col-sm-6 col-md-4 ">

                        <x-card :title="$insertion->title" :category="$insertion->category->name"
                            :categoryid="$insertion->category->id" :price="$insertion->price"
                            :description="$insertion->description" :body="$insertion->body"
                            :date="$insertion->created_at->diffForHumans()" :link="route('insertions.show', $insertion)"
                            :isAccepted="$insertion->is_accepted" />

                    </div>
                    @endforeach
                </div>
            </section>

</x-main>