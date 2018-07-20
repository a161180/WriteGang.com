<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>USER</title>

        <link rel="stylesheet" href="{{ asset("CSS/bootstrap.min.css") }}">
        <link rel="stylesheet" href="{{ asset("css/style3.css") }}">
        <link rel="stylesheet" href="{{ asset("css/jquery.mCustomScrollbar.min.css") }}">
        
    <style>
        .cont{
            background-color:gainsboro;
            border-radius: 25px;
            padding-top: 15px;
            padding-bottom: 15px;
            padding-right: 15px;
            padding-left: 15px;
            margin-bottom: 30px;

        }
    </style>

    </head>
    <body>

        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div id="dismiss">
                    <i class="glyphicon glyphicon-arrow-left"></i>
                </div>

                <div class="sidebar-header">
                    <h3>MENU</h3>
                </div>


                    </li>
                    <ul class="list-unstyled components">

                        <ul class="list-unstyled components">
                            <li class="active">
                                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Post a write up</a>
                                <ul class="collapse list-unstyled" id="homeSubmenu">
                                    <li><a href="/userpostwriteupoem">Poem</a></li>
                                    <li><a href="/userpostwriteuparticle">Article</a></li>
                                </ul>
                                <li>
                                        <a href="/userpostedwriteups">View posted write ups</a>
                                    </li>

                    </ul>

                <ul class="list-unstyled CTAs">
                    <li><a href="#" class="download">Save Changes</a></li>
                    <li><a href="/homepage" class="article">Go Home</a></li>
                </ul>
            </nav>

            <!-- Page Content Holder -->
            <div id="content">

                <nav class="navbar navbar-default">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                <i class="glyphicon glyphicon-align-left"></i>
                                <span>MENU</span>
                            </button>
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <h2>Submit your Article</h2>
                <div class="line"></div>

                <div class="container cont">
                    <div class="d-flex">
                        <h4 style="margin-right: 15px">Type of Write Up: ARTICLE</h4>
                        
                    </div>
                    <br/>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Title</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Title" aria-label="Title" style="font-style: italic">
                    </div>
                    <br/>
                    <div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1" style="font-size: 25px">Content of Write Up</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
                        </div>
                    </div>
                    <br/>
                    <button type="button" class="btn btn-primary but">Submit</button>
                </div>

                

            </div>
        </div>
        



        <div class="overlay"></div>


            <script src="{{ asset("js/jquery-1.12.0.min.js") }}"></script>
            <script src="{{ asset("js/bootstrap.min.js") }}"></script>
            <script src="{{ asset("js/jquery.mCustomScrollbar.concat.min.js") }}"></script>

        <script type="text/javascript">
            $(document).ready(function () {
                $("#sidebar").mCustomScrollbar({
                    theme: "minimal"
                });

                $('#dismiss, .overlay').on('click', function () {
                    $('#sidebar').removeClass('active');
                    $('.overlay').fadeOut();
                });

                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar').addClass('active');
                    $('.overlay').fadeIn();
                    $('.collapse.in').toggleClass('in');
                    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                });
            });
        </script>
    </body>
</html>
