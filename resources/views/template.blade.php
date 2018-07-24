<!doctype html>
<html lang="en">



<head>



    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset("CSS/bootstrap.min.css") }}">
	<link rel="stylesheet" href="{{ asset("css/navbar-style.css") }}">

    <title>HOME</title>

</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand webname" href="/">
            <img src="IMG/penink.png" width="40" height="45" class="d-inline-block align-top" alt=""> WriteGang.com
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse test" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        Collection
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/poemhome">Poem</a>
                        <a class="dropdown-item" href="/articlehome">Article</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/login">Sign In</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/register">Sign Up</a>
                </li>
            </ul>

            </form>
        </div>
    </nav>
    @yield('content')

        <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset("JS/jquery-3.3.1.slim.min.js") }}"></script>
    <script src="{{ asset("JS/popper.min.js") }}"></script>
    <script src="{{ asset("JS/bootstrap.min.js") }}"></script>

</body>