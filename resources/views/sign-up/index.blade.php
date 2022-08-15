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

    <title>Sign Up &middot Stagram</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">    {{-- First card --}}
            <div class="card col-lg-3 mt-5 rounded-1">
                <div class="card-body">
                    <div class="card-text text-center mb-3">
                        <img src="/assets/img/logo-text-2.png" alt="Stagram" class="img-fluid my-4" style="max-width:200px">
                        <h6 class="card-subtitle text-muted mb-2">Sign up to see photos and videos from your friends.</h6>
                        <div class="row justify-content-center">
                            <div class="col-lg-11">
                                <form action="/signup" method="POST" class="needs-validation">
                                    @csrf
                                    <input type="email" class="form-control rounded-1" style="font-size: 14px" placeholder="Email" name="email" id="email" value="{{ old('email') }}" required>
                                    @error('email')
                                        <div class="invalid-feedback d-block" role="alert">{{ $message }}</div>
                                    @enderror
                                    <input type="text" class="form-control rounded-1 my-2" style="font-size: 14px" placeholder="Full Name" name="name" id="name" value="{{ old('name') }}" required>
                                    @error('name')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                    <input type="text" class="form-control rounded-1" style="font-size: 14px" placeholder="Username" name="username" id="username" value="{{ old('username') }}" required>
                                    @error('username')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror   
                                    <input type="password" class="form-control mt-2 rounded-1" style="font-size: 14px" placeholder="Password" name="password" id="password" required>
                                    @error('password')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                    <button type="submit" class="btn btn-primary mt-3 rounded-1" style="width: 100%; font-size: 14px">Sign Up</button>
                                </form>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>  {{-- End of first card --}}
        <div class="row justify-content-center">    {{-- Second card --}}
            <div class="card col-lg-3 mt-2 rounded-1">
                <div class="card-body">
                    <div class="card-subtitle text-center">
                        <span style="font-size: 14px">Have an account? <a href="/login" class="text-decoration-none text-primary">Log In</a></span>
                    </div>
                </div>
            </div>
        </div>  {{-- End of second card --}}
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    {{-- <script src="/assets/js/script.js"></script> --}}
</body>
</html>