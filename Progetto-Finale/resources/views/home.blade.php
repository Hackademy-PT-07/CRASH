<x-main>
    <x-slot:title>Presto.it</x-slot:title>

    <header class="p-0">
        <img class="img-fluid"
            src="https://cdn.discordapp.com/attachments/1139637535828607086/1139642025701023755/header.jpg" alt="">
        <div class="container">
            <div class="row ">
                <div class="col-12">


                </div>
            </div>
        </div>

    </header>
    <x-navbar />

    <div class="container mt-4 ">
        <div class="my-5 text-center">


            <section class="container mt-5">
                <div class="my-5">
                    <h2>Tutti gli annunci</h2>
                </div>
                <div class="row mt-5">
                    <livewire:insertion-list />
                </div>
            </section>
</x-main>