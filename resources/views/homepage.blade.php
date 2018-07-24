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

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="background-image: url('IMG/images.png')">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active" style="height: 350px">
                <div class="container cora">
                    <div class="row">
                        <div class="col-3 tet">
                            <img src="IMG/poetry-512 (1).png" class="coraimage">
                        </div>
                        <div class="col-6 tet">
                            <br/>
                            <h1 class="h1cora" style="color: black">Poem</h1>
                            <h4 class="h4cora">Wonderful poems are available here. You can view poems here.</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" style="height: 350px">
                <div class="container cora">
                    <div class="row">
                        <div class="col-3 tet">
                            <img src="IMG/poetry-512 (1).png" class="coraimage">
                        </div>
                        <div class="col-6 tet">
                            <br/>
                            <h1 class="h1cora" style="color: black">Article</h1>
                            <h4 class="h4cora">Wonderful articles are available here. You can view articles here.</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" style="height: 350px">
                <div class="container cora">
                    <div class="row">
                        <div class="col-3 tet">
                            <img src="IMG/images (1).png" class="coraimage">
                        </div>
                        <div class="col-6 tet">
                            <br/>
                            <h1 class="h1cora" style="color: black">Posting</h1>
                            <h4 class="h4cora">Users can post their own poems and articles here on this website which will then be published.</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container contai1" style="background-color: aquamarine">
        <div class="row">
            <img src="IMG/POEMSemboss.png" class="poemwordhomepage">
        </div>
        <div class="row">
            <h4 style="margin-left: 10px">A piece of writing in which the expression of feelings and ideas is given intensity by particular attention to
                diction (sometimes involving rhyme), rhythm, and imagery.</h4>
        </div>
        <br/>
    </div>


    <div class="container contai1" style="background-color: aquamarine">
        <div class="row">
            <img src="IMG/picturetopeople.org-a86b9f38d7da48420129bcf489da4e66f577e7a9a7336a5c3a.png" class="poemwordhomepage">
        </div>
        <div class="row">
            <h4 style="margin-left: 10px">An article is a word used to modify a noun, which is a person, place, object, or idea. Technically, an article
                is an adjective, which is any word that modifies a noun. Usually adjectives modify nouns through description,
                but articles are used instead to point out or refer to nouns.</h4>
        </div>
        <br/>
    </div>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset("JS/jquery-3.3.1.slim.min.js") }}"></script>
    <script src="{{ asset("JS/popper.min.js") }}"></script>
    <script src="{{ asset("JS/bootstrap.min.js") }}"></script>


</body>

</html>