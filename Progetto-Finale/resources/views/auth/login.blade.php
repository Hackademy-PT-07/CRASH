<x-main>
    <x-navbar />
    <x-slot:title>Login</x-slot:title>
    <div class="container ">

        <div class="row  ">
            <div class="col-6 mx-auto my-5">
                <div class="card p-3 background-green text-white w-100">
                    <form action="/login" method="POST">
                        @csrf
                        <h3 class="mt-3">{{__('ui.logIn')}}</h3>
                        <div class="col-12 mt-3">
                            <label for="email">{{__('ui.email')}}</label>
                            <input class="form-control focus-ring focus-ring-danger" type="email" name="email"
                                id="email">
                            @error('email')<p class="small rounded my-2 errorBackground text-danger">{{ $message }}
                            </p> @enderror
                        </div>
                        <div class="col-12 mt-3">
                            <label for="password">{{__('ui.password')}}</label>
                            <input class="form-control focus-ring focus-ring-danger" type="password" name="password"
                                id="password">
                            @error('password')<p class="small rounded my-2 errorBackground text-danger">{{ $message }}
                            </p> @enderror
                        </div>
                        <div class="col-12 mt-3">
                            <a href="/register" class="text-white">{{__('ui.notRegister')}}</a>
                        </div>
                        <div class="col-12 my-3">
                            <button type="submit" class="btn buttonColor">{{__('ui.logIn')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</x-main>