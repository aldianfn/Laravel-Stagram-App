<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="icon" href="/assets/img/logo.png">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <title>Login &middot Stagram</title>
</head>
<body>
    <div class="container">
        @if (session()->has('success'))
        <div class="row justify-content-center">
            <div class="col-md-3 mt-3">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
        @endif
        @if (session()->has('loginError'))
        <div class="row justify-content-center">
            <div class="col-md-3 mt-3">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
        @endif
        {{-- @if ($errors->any())
        <div class="row justify-content-center">
            <div class="col-md-3 mt-3">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Login Failed!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
        @endif --}}
        <div class="row justify-content-center">    {{-- First card --}}
            <div class="card col-md-3 mt-5 rounded-1">
                <div class="card-body">
                    <div class="card-text text-center">
                        <img src="/assets/img/logo-text-2.png" alt="Stagram" class="img-fluid my-4" style="max-width:200px">
                        <div class="row justify-content-center">
                            <div class="col-md-11">
                                    <form action="/login" method="POST">
                                        @csrf
                                        <input type="text" class="form-control rounded-1" style="font-size: 14px" placeholder="Username" name="username" id="username" required>
                                        <input type="password" class="form-control mt-2 rounded-1" style="font-size: 14px" placeholder="Password" name="password" id="password" required>
                                        <button type="submit" class="btn btn-primary mt-3 rounded-1" style="width: 100%; font-size: 14px">Log In</button>
                                    </form>
                                </div>
                            </div>
                        </div>  
                    <div class="card-subtitle text-center mt-4">
                        <a href="#" class="text-decoration-none text-muted" style="font-size: 12px">Forgot password?</a>
                    </div>
                </div>
            </div>
        </div>  {{-- End of first card --}}
        <div class="row justify-content-center">    {{-- Second card --}}
            <div class="card col-md-3 mt-2 rounded-1">
                <div class="card-body">
                    <div class="card-subtitle text-center">
                        <span style="font-size: 14px">Don't have an account? <a href="/signup" class="text-decoration-none text-primary">Sign up</a></span>
                    </div>
                </div>
            </div>
        </div>  {{-- End of second card --}}
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>