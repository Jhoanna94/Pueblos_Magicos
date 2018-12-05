<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Proyecto Papaya</title>
        <link rel="stylesheet" href="../css/docsupport/prism.css">
        <link rel="stylesheet" href="../css/chosen.css">
        <link href="../css/simple-sidebar2.css" rel="stylesheet">
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="../css/bootstrap-select.css">
        <link rel="stylesheet" href="../css/style2.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/bootstrap-select.js"></script>
        <script src="../js/jquery.js"></script>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <script type="text/javascript">
            function initialize(lat, long) {
                var latlng = new google.maps.LatLng(lat, long);//Vista del mapa
                var settings = {
                    zoom: 15,
                    center: latlng,
                    mapTypeControl: true,
                    mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
                    navigationControl: true,
                    navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
                    mapTypeId: google.maps.MapTypeId.ROADMAP};
                var map = new google.maps.Map(document.getElementById("map_canvas"), settings);
                var contentString = '<div id="content">'+
                    '<div id="siteNotice">'+
                    '</div>'+
                    '<h1 id="firstHeading" class="firstHeading">OTRO</h1>'+
                    '<div id="bodyContent">'+
                    '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>'+
                    '</div>'+
                    '</div>';
                
                var companyImage = new google.maps.MarkerImage('images/logo.png',
                    new google.maps.Size(100,50),
                    new google.maps.Point(0,0),
                    new google.maps.Point(50,50)
                );

                var companyShadow = new google.maps.MarkerImage('images/logo_shadow.png',
                    new google.maps.Size(130,50),
                    new google.maps.Point(0,0),
                    new google.maps.Point(65, 50));

                var companyPos = new google.maps.LatLng(lat, long);//Posicion del marcador

                var companyMarker = new google.maps.Marker({
                    position: companyPos,
                    map: map,
                    icon: companyImage,
                    shadow: companyShadow,
                    title:"OTRO",
                    zIndex: 3});

            }
        </script>
    </head>
    <body>
        <div id="wrapper">
            <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                    <li class="sidebar-brand">
                        <a href="#">
                            Bienvenido Erick
                        </a>
                    </li>
                    <li>
                        <a href="#">Mi Perfil</a>
                    </li>
                    <li>
                        <a href="#">Itinerario</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Servicios <spasn class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li class="dropdown-header"></li>
                            <li><a href="#">Trivago</a></li>
                            <li><a href="#">Uber</a></li>
                            <li><a href="#">Otro</a></li>
                            <li><a href="#">Otro</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Contacto</a>
                    </li>
                    <li>
                        <a href="#">Acerca de</a>
                    </li>
                </ul>
            </div>
            <!-- /#sidebar-wrapper -->
            <!-- Page Content -->
            <div style="position:absolute;  right:220px;"> 
                            <img src="../fonts/Logo1.png" id="imagenLogo">
                            </div>
            <div id="page-content-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="container" id="select">
                            </div>
                            
                            <img src="../fonts/menu.png" id="imagenMenu">
                              <div style="position:absolute; top:10px; right:10px; ">
                                  <img src="../fonts/g+.png" id="imagenLoc">
                                  <img src="../fonts/fb.png" id="imagenLoc">
                                  <img src="../fonts/tw.png" id="imagenLoc">
                                  <img src="../fonts/avatar.png" id="imagenLoc"> 
                                  
                                  <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" > idioma <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li class="dropdown-header"></li>
                            <li><a href="#">espanol</a></li>
                            <li><a href="#">ingles</a></li>
                            <li><a href="#">frances</a></li>
                            <li><a href="#">Otro</a></li>
                        </ul>
                    </li>  
                                  </div>
                            <div class="container" id="select">
                                <div id="info">
                                    <font color="white" face="Comic Sans MS, Arial, MS Sans Serif" size="+3"><i><?php echo $_POST["selector"] ?></i></font>
                                    <p></p>
                                    <font color="white" face="Comic Sans MS, Arial, MS Sans Serif" size="+.5"><i><?php echo $_POST["selector"] ?> es un estado con X pueblos y Y puntos turisticos.</i></font>
                                </div>
                                <div id="cuadros" class="form-group">
                                    <iframe id="iframe" src="frame.php"></iframe>
                                    <script type="text/javascript">
                                        $('iframe').load(function(){
                                            $(this).contents().find("body").on('click', function(event) { 
                                                $(this).click(function(e){
                                                    var id = e.target.id;
                                                    if(id=="imagenFace"){
                                                        initialize(19.96943659999999,-101.14191849999997);
                                                    }else if (id=="imagenFace2") {
                                                        initialize(16.178951,-95.1976113);
                                                    }else if (id=="imagenFace3") {
                                                        initialize(19.6196444,-100.2835336);
                                                    }else if (id=="imagenFace4") {
                                                        initialize(16.1790585,-95.19728409999999);
                                                    }
                                                });
                                            });
                                        });
                                    </script>
                                </div>
                                <div id="mapa" class="col-lg-10">
                                    <div id="map_canvas" style="width:500px; height:300px"></div>
                                </div>
                                <div id="boton">
                                    <a href="dopag.html"><img src="../fonts/boton.png" id="imagenBoton"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /#page-content-wrapper -->
        </div>
        <!-- /#wrapper -->
        <!-- Menu Toggle Script -->
        <script>
            $("#wrapper").toggleClass("toggled");
            $("#imagenMenu").click(function (e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });
        </script>
    </body>
</html>