<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Admin | CV Laksana Abadi</title>

    {{-- <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/"> --}}

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- Custom css -->
    <link rel="stylesheet" href="/css/style.css">
    <link href="/css/admin-login.css" rel="stylesheet">
</head>

<body>
    <main class="form-signin">
        <div class="image">
            <img src="{{ $image->regular }}" alt="Gambar Halaman Masuk" width="100%" height="100%">
        </div>
        <div class="card__login w-75 position-absolute">
            <form action="/login" method="POST">
                @csrf
                @if (session()->has('loginError'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('loginError') }}
                    </div>
                @endif
                <h3 class="text-center mb-4 fwmed">Selamat Datang!</h3>

                <div class="form-floating">
                    <input type="text" name="username" class="form-control @error('username') is-invalid @enderror"
                        id="username" placeholder="username" value="{{ old('username') }}" required>
                    <label for="username">username</label>
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="position-relative mt-2">
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control" id="password"
                            placeholder="Password" required>
                        <label for="password">Password</label>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="eye-icon position-absolute" onclick="showPass()">
                        <i class="fa-solid fa-eye" id="eye"></i>
                    </div>
                </div>
                <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Masuk</button>
                <!-- <p class="mt-5 mb-3 text-muted">2022</p> -->
            </form>
        </div>
    </main>

    <!-- Fontawesome Icon -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"
        integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    {{-- Show hide password --}}
    <script>
        var state = false;
        const input = document.getElementById("password");

        function showPass() {
            if (state) {
                input.setAttribute("type", "password");
                state = false;
            } else {
                input.setAttribute("type", "text");
                state = true;
            }
        }
    </script>
</body>

</html>
