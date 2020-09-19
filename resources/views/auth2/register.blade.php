<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>Student Management System </title>
</head>

<body>
    @include('navbar')

    <div class="row header-container justify-content-center">
        <div class="header">
            <h1>Student Register Form</h1>
        </div>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <!-- @foreach($errors->all() as $error)
    <p class="alert alert-danger">{{ $error }}</p>
    @endforeach -->
    <div class="row justify-content-center">
        <div class="col-md-4">
            <form method="post" action="{{ action('Auth\RegisterController@register') }}">
                @csrf
                <div class="form-group">
                    <input type="text" value="{{ old('name') }}" name="name" placeholder="Enter Username" class="form-control">
                </div>
                <div class="form-group">
                    <input type="text" value="{{ old('email') }}" name="email" placeholder="Enter Email" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="Enter Password" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" name="password_confirmation" placeholder="Confirm Password" class="form-control">
                </div>
                <button type="submit" class="btn bnt-primary">Register</button>
                <button type="reset" class="btn bnt-secondary">Cancel</button>
            </form>
        </div>
    </div>

</body>

</html>