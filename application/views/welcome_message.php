
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">


    <title>Lost-and-Found</title>

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/welcome.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/fonts/css/font-awesome.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="<?=base_url()?>assets/css/jumbotron.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

</head>

<body>

<nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bak-gd-color">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">Lost-and-Found</a>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <!--<ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>

        </ul>-->
        <div class="m-auto">
            <div class="input-group">
                <div class="input-group-addon search-panel">
                    <a type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <span id="search_concept">Filter by</span> <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#contains">Electronics</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a href="#its_equal">Cloth's</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a href="#greather_than">Stationery</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a href="#less_than">Toy's </a></li>
                        <div class="dropdown-divider"></div>
                        <li><a href="#all">Anything</a></li>
                    </ul>
                </div>

                <input type="hidden" name="search_param" value="all" id="search_param">
                <input type="text" class="form-control" name="x" size="50" placeholder="Search term...">
                <span class="input-group-addon">
                    <a class="btn btn-default" type="button"><i class="fa fa-search" aria-hidden="true"></i>
</a>
                </span>
            </div>
        </div>
        <button class="text-color btn btn-outline-success btn-sm m-2 my-sm-0" >Upload</button>
        <button class="btn btn-outline-success m-2 my-sm-0" >Login</button>
        <button class="btn btn-outline-success m-2 my-sm-0" >Signup</button>
        <!-- <form class="form-inline my-2 my-lg-0">
             <input class="form-control mr-sm-2" type="text" placeholder="Search">
             <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
         </form>-->

    </div>
</nav>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <!--        <div class="row">-->
        <!--            <div class="col-xs-8 col-xs-offset-2 m-auto">-->
        <!--                <div class="input-group">-->
        <!--                    <div class="input-group-btn search-panel">-->
        <!--                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">-->
        <!--                            <span id="search_concept">Filter by</span> <span class="caret"></span>-->
        <!--                        </button>-->
        <!--                        <ul class="dropdown-menu" role="menu">-->
        <!--                            <li><a href="#contains">Contains</a></li>-->
        <!--                            <li><a href="#its_equal">It's equal</a></li>-->
        <!--                            <li><a href="#greather_than">Greather than ></a></li>-->
        <!--                            <li><a href="#less_than">Less than < </a></li>-->
        <!--                            <li class="divider"></li>-->
        <!--                            <li><a href="#all">Anything</a></li>-->
        <!--                        </ul>-->
        <!--                    </div>-->
        <!--                    <input type="hidden" name="search_param" value="all" id="search_param">-->
        <!--                    <input type="text" class="form-control" name="x" placeholder="Search term...">-->
        <!--                    <span class="input-group-btn">-->
        <!--                    <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>-->
        <!--                </span>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
    </div>
</div>

<div class="container">
    <!-- Example row of columns -->
    <hr>

    <footer>
        <p>&copy; Company 2017</p>
    </footer>
</div> <!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script>window.jQuery || document.write('<script src="<?=base_url()?>assets/js/jquery.min.js"><\/script>')</script>
<script src="<?=base_url()?>assets/js/tether.js"></script>
<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function (e) {
        $('.search-panel .dropdown-menu').find('a').click(function (e) {
            e.preventDefault();
            var param = $(this).attr("href").replace("#", "");
            var concept = $(this).text();
            $('.search-panel span#search_concept').text(concept);
            $('.input-group #search_param').val(param);
        });
    });
</script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
</body>
</html>
