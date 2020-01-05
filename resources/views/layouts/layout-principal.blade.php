<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>OpenAdmin+</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Bootstrap cdn-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <!--style principale-->
    <link rel="stylesheet" href="assets/css/style.css">




</head>

<body>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.html"><i class="menu-icon fa fa-desktop"></i>Dashboard </a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th-large"></i>Menu avec dropdown</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-bookmark-o"></i><a href="#">Sub-menu item</a></li>
                            <li><i class="fa fa-bookmark-o"></i><a href="#">Sub-menu item</a></li>
                            <li><i class="fa fa-bookmark-o"></i><a href="#">Sub-menu item</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"> <i class="menu-icon fa fa-info"></i>Menu sans dropdown</a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th-large"></i>Menu avec dropdown</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-bookmark-o"></i><a href="#">Sub-menu item</a></li>
                            <li><i class="fa fa-bookmark-o"></i><a href="#">Sub-menu item</a></li>
                            <li><i class="fa fa-bookmark-o"></i><a href="#">Sub-menu item</a></li>
                            <li><i class="fa fa-bookmark-o"></i><a href="#">Sub-menu item</a></li>
                            <li><i class="fa fa-bookmark-o"></i><a href="#">Sub-menu item</a></li>
                            <li><i class="fa fa-bookmark-o"></i><a href="#">Sub-menu item</a></li>
                            <li><i class="fa fa-bookmark-o"></i><a href="#">Sub-menu item</a></li>
                            <li><i class="fa fa-bookmark-o"></i><a href="#">Sub-menu item</a></li>
                            <li><i class="fa fa-bookmark-o"></i><a href="#">Sub-menu item</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"> <i class="menu-icon fa fa-info"></i>Menu sans dropdown</a>
                    </li>
                    <li>
                        <a href="#"> <i class="menu-icon fa fa-info"></i>Menu sans dropdown</a>
                    </li>



                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/"><img src="images/logo.png" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="/"><img src="images/logo2.png" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>

            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left ">
                        <div class="dropdown for-notification ">
                            <a class="nav-link dropdown-toggle" href="#" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell my-3"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>

                    <div class="user-area dropdown float-right">
                        <a href="#" class="" >
                            <img class="user-avatar rounded-circle my-2" src="images/admin.jpg" alt="User Avatar">
                        </a>
                    </div>
                </div>
                </div>
        </header>
        <!-- /#header -->
        @yield('contenu')
    </div>

    <!-- Scripts-->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <!--Menu toggle scipts-->
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
