<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
    <title>@yield('title', 'Online Store')</title>
</head>
<body>
<!-- header -->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary py-4">
    <div class="container">
        <a class="navbar-brand" href="#">Lab 5a
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                <a class="nav-link active" href="#">Home</a>
                <a class="nav-link active" href="#">About</a>
            </div>
        </div>
    </div>
</nav>

<header class="masthead bg-primary text-white text-center py-4">
    <div class="container d-flex align-items-center flex-column">
        <h2>@yield('subtitle', 'Lab 8')</h2>
    </div>
</header>
<!-- header -->
@if($errors->any())
    <div>
        Errors:
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
@if(session('message'))
    <p><b>{{session('message')}}</b></p>
@endif
<div class="container my-4">
    @yield('content')
</div>
<!-- footer -->
<div class="copyright py-4 text-center text-white">
    <div class="container">
        <small>
            Copyright - <a class="text-reset fw-bold text-decoration-none" target="_blank"
                           href="https://twitter.com/ashleyeatly">
                Ashley Eatly
            </a> - <b>Swansea University</b>
        </small>
    </div>
</div>
<!-- footer -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
</script>
</body>
</html>
