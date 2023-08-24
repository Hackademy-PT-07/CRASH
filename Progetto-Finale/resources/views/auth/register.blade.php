<x-main>
    <x-navbar />
    <x-slot:title>Registrati</x-slot:title>
    <div class="container  mt-5">
        <div class="row">
            <div class="col-6 mx-auto mt-5 ">
                <div class="card p-3 text-white background-lite-blue ">
                    <form action="/register" method="POST">
                        @csrf
                        <h3 class="mt-3">Registrati</h3>
                        <div class="col-12 mt-3  ">
                            <label for="name">Nome</label>
                            <input class="form-control focus-ring focus-ring-danger " type="text" name="name" id="name">
                            @error('name')<p class="small rounded my-2 errorBackground text-danger">{{ $message }}
                            </p> @enderror
                        </div>
                        <div class="col-12 mt-3">
                            <label for="email">Email</label>
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
                            <label for="password_confirmation">Conferma Password</label>
                            <input class="form-control focus-ring focus-ring-danger" type="password"
                                name="password_confirmation" id="password_confirmation">
                            @error('password')<p class="small rounded my-2 errorBackground text-danger">{{ $message }}
                            </p> @enderror
                        </div>
                        <div class="col-12 my-3">
                            <button type="submit" class="btn text-white buttonColor">Registrati</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-main>