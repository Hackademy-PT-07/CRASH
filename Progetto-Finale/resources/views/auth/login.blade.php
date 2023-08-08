<x-main>
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
                    </div>
                    <div class="col-12 mt-3">
                        <label for="password">Password</label>
                        <input class="form-control" type="password" name="password" id="password">
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