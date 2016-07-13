<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" media="screen" href="../bootstrap/css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../bootstrap/css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../bootstrap/css/grid_12.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../bootstrap/css/slider.css">
    <link href='http://fonts.googleapis.com/css?family=Condiment' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
    <script src="../bootstrap/js/jquery-1.7.min.js"></script>
    <script src="../bootstrap/js/jquery.easing.1.3.js"></script>
    <script src="../bootstrap/js/tms-0.4.x.js"></script>
    <script>
        $(document).ready(function(){                   
            $('.slider')._TMS({
                show:0,
                pauseOnHover:true,
                prevBu:false,
                nextBu:false,
                playBu:false,
                duration:1000,
                preset:'fade',
                pagination:true,
                pagNums:false,
                slideshow:7000,
                numStatus:true,
                banners:'fromRight',
                waitBannerAnimation:false,
                progressBar:false
            })      
        });
    </script>
</head>
<body>
  <div class="main">
  <!--==============================header=================================-->
    <header>
        <h1><a href="Inicio.php"><img src="../bootstrap/images/logo.png" alt=""></a></h1>
        <div class="form-search">
            <form id="form-search" method="post">
              <input type="text" value="Type here..." onBlur="if(this.value=='') this.value='Type here...'" onFocus="if(this.value =='Type here...' ) this.value=''"  />
              <a href="#" onClick="document.getElementById('form-search').submit()" class="search_button"></a>
            </form>
        </div>   
        <div class="clear"></div>    
        <nav class="box-shadow">
            <div>
                <ul class="menu">
                        
                        <li class="home-page current"><a href="Inicio.php"><span></span></a></li>
                        <li><a href="FormularioPreAprobacion.php">Solicitud</a></li>
                        <li><a href="BusquedaSolicitudes.php">Busqueda Solicitudes</a></li>
                        <li><a href="EstadoSolicitud.php">Estado Solicitud</a></li>
                        <li><a href="ListarSolicitudes.php">Listar Solicitudes</a></li>
                        <li><a href="Registro.php">Registro</a></li>
                        <li><a href="../index.php" class="btn btn-Danger btn-primary btn-cons">Salir</a></li>
                </ul>
                <div class="clear"></div>
            </div>
        </nav>
    </header> 
    <html><center>
    <div id="page-wrapper">
        <div class="container-fluid">
        <div id="subviewPlaceHolder_id">
    </div> 
<!--==============================footer=================================-->
    <footer>
        <p>Wappen Hage Web Responsiva <a href="http://www.wappenhage.com" target="_blank"></a>.</p>
        <p>© 2012 Global</p>
    </footer>       

</body>
</html>