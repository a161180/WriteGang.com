<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>LOGIN</title>
    <link rel="stylesheet" href="{{ asset("CSS/bootstrap.min.css") }}">
	<link rel="stylesheet" href="{{ asset("css/navbar-style.css") }}">
</head>

<body class="my-login-page">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand webname" href="/homepage">
            <img src="IMG/penink.png" width="40" height="45" class="d-inline-block align-top" alt=""> WriteGang.com
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse test" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/homepage">Home
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
                    <a class="nav-link" href="/signin">Sign In</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/signup">Sign Up</a>
                </li>
            </ul>

            </form>
        </div>
    </nav>

	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Login</h4>
							<form method="POST" action="{{ route('login.submit') }}">
								@csrf
								<div class="form-group">
									<label for="email">E-Mail Address</label>

									<input id="email" type="email" class="form-control" name="email" value="" required autofocus>
								</div>

								<div class="form-group">
									<label for="password">Password
										<a href="forgot.html" class="float-right">
											Forgot Password?
										</a>
									</label>
									<input id="password" type="password" class="form-control" name="password" required data-eye>
								</div>

								<div class="form-group">
									<label>
										<input type="checkbox" name="remember"> Remember Me
									</label>
								</div>

								<div class="form-group no-margin">
									<button type="submit" class="btn btn-primary btn-block">
										Login
									</button>
								</div>
								<div class="margin-top20 text-center">
									Don't have an account?
									<a href="register.html">Create One</a>
								</div>
							</form>
						</div>
					</div>
					<div class="footer">
						Copyright &copy; 2017 &mdash; Your Company
					</div>
				</div>
			</div>
		</div>
	</section>

    <script src="{{ asset("JS/jquery-3.3.1.slim.min.js") }}"></script>
    <script src="{{ asset("JS/popper.min.js") }}"></script>
    <script src="{{ asset("JS/bootstrap.min.js") }}"></script>
</body>

</html>