<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Alitas FEI</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="#top" onclick=$("#menu-close").click();>Gerente</a>
            </li>
            <li>
                <a href="#menu" onclick=$("#menu-close").click();>Menú</a>
            </li>
            <li>
                <a href="#almacen" onclick=$("#menu-close").click();>Almacén</a>
            </li>
            <li>
                <a href="#registro_e" onclick=$("#menu-close").click();>Registro de empleado</a>
            </li>
            <li>
                <a href="#portfolio" onclick=$("#menu-close").click();>Mesas asignadas</a>
            </li>
            <li>
                <a href="#contact" onclick=$("#menu-close").click();>Reportes</a>
            </li>
        </ul>
    </nav>

    <!-- Header -->
    <header id="top" class="header">
        <div class="text-vertical-center" >
            <h1>Bienvenido gerente</h1>
        </div>
    </header>

    <div id="empleados" class="container-fluid">
    <div class="row">
        <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
            <div class="text-center">
                        <h1>Empleados</h1>
            </div>
            <table class="table table-bordered table-hover table-condensed">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Puesto</th>
                        <th>Sueldo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->apellido }}</td>
                        <td>{{ $user->puesto }}</td>
                        <td>{{ $user->sueldo }}</td>
                        <td>ver</td>
                        <td>editar</td>
                        <td>borrar</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $users->render() !!}
            <a href="{{ route('gerente.create') }}" class="btn btn-lg btn-success">Nuevo empleado   <span class="glyphicon glyphicon-ok"></span></a>
        </div>
    </div>
    </div>

    <!-- About  aqui abajo va el menu-->
    <section id="menu" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h2><strong>Nuestro menú</strong></h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/menu1.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/menu2.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/menu3.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/menu4.jpg">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                    <a href="#" class="btn btn-lg btn-success">Editar <span class="glyphicon glyphicon-pencil"></span></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio -->
    <section id="almacen" class="portfolio">
    <!--
        <div class="container">
         <div class="col-lg-10 col-lg-offset-1 text-center">
        <h2><strong>Almacén</strong></h2>
  
        <div id="almacen" class="container-fluid">
        <div class="row">
        <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
            <table class="table table-bordered table-hover table-condensed">
                <thead>
                    <tr>
                        <th>
                            Producto
                        </th>
                        <th>
                            Cantidad
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="success">
                        <td>
                            Alitas
                        </td>
                        <td>
                            100 Kg
                        </td>
                    </tr>
                    <tr class="success">
                        <td>
                            Cebolla
                        </td>
                        <td>
                            10 Kg
                        </td>
                    </tr>
                    <tr class="success">
                        <td>
                            Habaneros
                        </td>
                        <td>
                            100 Kg
                        </td>
                    </tr>
                    <tr class="success">
                        <td>
                            Apio
                        </td>
                        <td>
                            6 Kg
                        </td>
                    </tr>
                    <tr class="success">
                        <td>
                            Queso manchego
                        </td>
                        <td>
                            16 Kg
                        </td>
                    </tr>
                </tbody>
            </table>
            <a href="#" class="btn btn-lg btn-success">Editar almacén <span class="glyphicon glyphicon-pencil"></span></a>
            <a href="#" class="btn btn-lg btn-warning">Actualizar almacen <span class="glyphicon glyphicon-refresh"></span></a>
        </div>
    </div>
    </div>
    -->
    <div class="row">
        <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
                <div class="text-center">
                    <h1>Almacén</h1>
                </div>
                </span>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Cantidad</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col-md-9"><em>Alitas</em></h4></td>
                            <td class="col-md-1" style="text-align: center"> 2 </td>
                        </tr>
                        <tr>
                            <td class="col-md-9"><em>Papas a la francesa</em></h4></td>
                            <td class="col-md-1" style="text-align: center"> 2 </td>
                        </tr>
                        <tr>
                            <td class="col-md-9"><em>Aros de cebolla</em></h4></td>
                            <td class="col-md-1" style="text-align: center"> 2 </td>
                        </tr>
                    </tbody>
                </table>
                <a href="#" class="btn btn-lg btn-success">Editar<span class="glyphicon glyphicon-pencil"></span></a>
            </div>
        </div>
    </section>

    <!-- registro empleado -->
    <section id="registro_e" class="portfolio">
        <div class="container">
         <div class="col-lg-10 col-lg-offset-1 text-center">
         <h2><strong>Registro empleado</strong></h2>


  
        </div>
    </section>
    <!-- termina registro empleado-->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#],[data-toggle],[data-target],[data-slide])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    //#to-top button appears after scrolling
    var fixed = false;
    $(document).scroll(function() {
        if ($(this).scrollTop() > 250) {
            if (!fixed) {
                fixed = true;
                // $('#to-top').css({position:'fixed', display:'block'});
                $('#to-top').show("slow", function() {
                    $('#to-top').css({
                        position: 'fixed',
                        display: 'block'
                    });
                });
            }
        } else {
            if (fixed) {
                fixed = false;
                $('#to-top').hide("slow", function() {
                    $('#to-top').css({
                        display: 'none'
                    });
                });
            }
        }
    });
    // Disable Google Maps scrolling
    // See http://stackoverflow.com/a/25904582/1607849
    // Disable scroll zooming and bind back the click event
    /*var onMapMouseleaveHandler = function(event) {
        var that = $(this);
        that.on('click', onMapClickHandler);
        that.off('mouseleave', onMapMouseleaveHandler);
        that.find('iframe').css("pointer-events", "none");
    }*/
    var onMapClickHandler = function(event) {
            var that = $(this);
            // Disable the click handler until the user leaves the map area
            that.off('click', onMapClickHandler);
            // Enable scrolling zoom
            that.find('iframe').css("pointer-events", "auto");
            // Handle the mouse leave event
            that.on('mouseleave', onMapMouseleaveHandler);
        }
        // Enable map zooming with mouse scroll when the user clicks the map
    $('.map').on('click', onMapClickHandler);
    </script>

</body>

</html>
