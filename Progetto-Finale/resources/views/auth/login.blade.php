<x-main>
    <x-slot:title>Login</x-slot:title>
    <div class="container mt-4">
        <div class="row">
            <div class="col-6 mx-auto">
                <div class="card p-3">
                <form action="/login" method="POST">
                    @csrf
                    <h3>Accedi</h3>
                    <div class="col-12 mt-3">
                        <label for="email">Email</label>
                        <input class="form-control" type="email" name="email" id="email">
                        @error('email')<span class="small text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-12 mt-3">
                        <label for="password">Password</label>
                        <input class="form-control" type="password" name="password" id="password">
                        @error('password')<span class="small text-danger">{{ $message }}</span> @enderror
                    </div>
                   <div class="col-12 mt-3">
                    <button type="submit">Accedi</button>
                   </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</x-main>