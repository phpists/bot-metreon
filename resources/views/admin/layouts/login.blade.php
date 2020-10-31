<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('admin_data/bootstrap.css') }}">

    <title>Бот админка</title>
</head>

<body>
<header class="navbar sticky-top navbar-expand-sm navbar-dark bg-dark">
    <a class="navbar-brand" href="index.html">Бот админка</a>
</header>

<link rel="stylesheet" href="{{ asset('admin_data/jquery-3.js') }}">
<link rel="stylesheet" href="{{ asset('admin_data/popper.js') }}">
<link rel="stylesheet" href="{{ asset('admin_data/bootstrap.js') }}">

<main>
    <style>
        tbody tr {
            cursor: pointer;
        }

        #nav-breadcrumb {
            position: relative;
        }

        #nav-breadcrumb-add {
            position: absolute;
            right: 1rem;
            top: 50%;
            transform: translateY(-50%);
        }
    </style>

    <nav id="nav-breadcrumb" class="breadcrumb-fixed" aria-label="breadcrumb">
        <ol class="breadcrumb m-0">
            <li class="breadcrumb-item active" aria-current="page">Sign-in</li>
        </ol>
    </nav>

    <div class="container-fluid py-5 bg-light">
        <div class="container">
            <div class="col-md-6 mx-auto">

                <form method="POST" class="form-signin" action="{{ route('login') }}">
                    @csrf
                    <input type="hidden" name="admin_panel" value="1">
                    @if(count($errors))
                        <div class="alert alert-danger">
                            <label>
                                @foreach ($errors->all() as $error)
                                    {{ $error }}
                                @endforeach
                            </label>
                        </div>
                    @endif

                    <h1 class="h3 mb-3 font-weight-normal text-center">Admin Panel</h1>

                    <div class="form-group row">
                        <label for="inputEmail" class="sr-only">Email address</label>
                        <input type="email" name="email" class="form-control" placeholder="Email address" value="{{ old('email') }}" required autofocus>
                    </div>

                    <div class="form-group row">
                        <label for="inputPassword" class="sr-only">Password</label>
                        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
                    </div>

                    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                </form>

            </div>
        </div>
    </div>

</main>

</body>
</html>