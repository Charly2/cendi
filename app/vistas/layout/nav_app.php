<!--<nav class="navbar navbar-expand-md navbar-dark bg-primary fixed-left">
    <a class="navbar-brand" href="<?/*=URL_BASE*/?>app/index"><img src="<?/*=URL_BASE*/?>public/images/logo/logo_header.png" alt=""> </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse pt-5" id="navbarsExampleDefault">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="<?/*=_setUrl('app/alumno')*/?>">Niños Inscritos</a>
            </li>


        </ul>



    </div>
</nav>

<div class="main">
    <nav class="navbar navbar-inverse navbar-embossed navbar-expand-lg " style="min-height: 75px" role="navigation" id="navin_1">

        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse-01"></button>
        <div class="collapse navbar-collapse" id="navbar-collapse-01">
            <ul class="nav navbar-nav mr-auto">

            </ul>

            <div class="navbar-form form-inline my-2 my-lg-0">
                <ul class="nav navbar-nav mr-auto">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?/*=$_SESSION['app']['usuario']*/?></a>
                        <span class="dropdown-arrow"></span>
                        <ul class="dropdown-menu">
                            <li><a href="#">Notificaciones</a></li>
                            <li><a href="#">Mensajes</a></li>
                            <li><a href="#">Configuración</a></li>
                            <li class="divider"></li>
                            <li><a href="<?/*=URL_BASE*/?>/app/usuario/logout">Cerrar Sesión</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>-->


<div class="page-wrapper chiller-theme toggled">
    <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
        <i class="fas fa-bars"></i>
    </a>
    <nav id="sidebar" class="sidebar-wrapper">
        <div class="sidebar-content">
            <div class="sidebar-brand">
                <a href="#">Cocendi</a>
                <div id="close-sidebar">
                    <i class="fas fa-times"></i>
                </div>
            </div>
            <div class="sidebar-header">
                <div class="user-pic">
                    <img class="img-responsive img-rounded" src="<?=URL_BASE."store/_store/_users/".$_SESSION['derecho']['idtrabajadora']."/img_perfil.jpg"?>"
                         alt="User picture">
                </div>
                <div class="user-info">
          <span class="user-name"><?=$_SESSION['derecho']['nombre']?>
            <strong><?=$_SESSION['derecho']['appaterno']?></strong>
          </span>
                    <span class="user-role">Derechohabiente</span>
                    <span class="user-status">
            <i class="fa fa-circle"></i>
            <span>En linea</span>
          </span>
                </div>
            </div>
            <!-- sidebar-header
            <div class="sidebar-search">
                <div>
                    <div class="input-group">
                        <input type="text" class="form-control search-menu" placeholder="Buscar...">
                        <div class="input-group-append">
              <span class="input-group-text">
                <i class="fa fa-search" aria-hidden="true"></i>
              </span>
                        </div>
                    </div>
                </div>
            </div>
             -->
            <!-- sidebar-search  -->
            <div class="sidebar-menu">
                <ul>
                    <li class="header-menu">
                        <span>General</span>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="<?=_setUrl('app/alumno')?>">
                            <i class="fa fa-tachometer-alt"></i>
                            <span>Niños Inscritos</span>
                            <span class="badge badge-pill badge-warning">1</span>
                        </a>
                        <!--<div class="sidebar-submenu">
                            <ul>
                                <li>
                                    <a href="#">Dashboard 1
                                        <span class="badge badge-pill badge-success">Pro</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Dashboard 2</a>
                                </li>
                                <li>
                                    <a href="#">Dashboard 3</a>
                                </li>
                            </ul>
                        </div>-->
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="#">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Menu Item</span>
                            <span class="badge badge-pill badge-danger">3</span>
                        </a>
                        <!--<div class="sidebar-submenu">
                            <ul>
                                <li>
                                    <a href="#">Products

                                    </a>
                                </li>
                                <li>
                                    <a href="#">Orders</a>
                                </li>
                                <li>
                                    <a href="#">Credit cart</a>
                                </li>
                            </ul>
                        </div>-->
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="#">
                            <i class="far fa-gem"></i>
                            <span>Menu Item</span>
                        </a>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="#">
                            <i class="fa fa-globe"></i>
                            <span>Menu Item</span>
                        </a>
                        <!--<div class="sidebar-submenu">
                            <ul>
                                <li>
                                    <a href="#">Google maps</a>
                                </li>
                                <li>
                                    <a href="#">Open street map</a>
                                </li>
                            </ul>
                        </div>-->
                    </li>
                    <li class="header-menu">
                        <span>Menu Item</span>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-book"></i>
                            <span>Menu Item</span>
                            <span class="badge badge-pill badge-primary">Beta</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-calendar"></i>
                            <span>Menu Item</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-folder"></i>
                            <span>Menu Item</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- sidebar-menu  -->
        </div>
        <!-- sidebar-content  -->
        <div class="sidebar-footer">
            <a href="#">
                <i class="fa fa-bell"></i>
                <span class="badge badge-pill badge-warning notification">3</span>
            </a>
            <a href="#">
                <i class="fa fa-envelope"></i>
                <span class="badge badge-pill badge-success notification">7</span>
            </a>
            <a href="#">
                <i class="fa fa-cog"></i>
                <span class="badge-sonar"></span>
            </a>
            <a href="<?=URL_BASE?>/app/usuario/logout">
                <i class="fa fa-power-off"></i>
            </a>
        </div>
    </nav>