

<!--Bootstrap cdn-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<!--Icons-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">

<!--style principale-->
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/styleDashboard.css">

<!--calendar JS-->


@extends('layouts.layout-principal')

@section('contenu')
    <div class="for-body">
        <div class="container">

            <!--Welcome message-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-primary alert-dismissible fade show wlcmsg" role="alert ">
                        <p>
                            Bienvenue || Heureux de vous revoir, <strong>$administrateur->name</strong>.
                        </p>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
            <!--statistics cards-->
            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-five">
                                <div class="stat-icon dib flat-color-3">
                                    <i class="fa fa-user"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib">
                                        <div class="stat-text"><span class="count">569</span></div>
                                        <div class="stat-heading">Etudiants</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-five">
                                <div class="stat-icon dib comm-stat">
                                    <i class="ti-comments"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib">
                                        <div class="stat-text"><span class="count">942</span></div>
                                        <div class="stat-heading">Commentaires<sup class="moy"> en moy</sup></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-five">
                                <div class="stat-icon commu-stat">
                                    <i class="ti-layout"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib">
                                        <div class="stat-text"><span class="count">92</span></div>
                                        <div class="stat-heading">Communiqués <sup class="moy2">publié</sup></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Table statistiques-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="box-title">Statistiques</h4>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-body">
                                    <div id="line_top_x"></div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body"></div>
                    </div>
                </div>

            </div>

            <!--resume communiqués-->
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header bg-dark">
                            <strong class="card-title text-white">Communiqués récents <a href="#" class="btn btn-warning btn-sm float-right ">Nouveau</a>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="alert alert-warning" role="alert">
                                        <h4 class="alert-heading title-comRec"><b>$titre</b></h4>
                                        <p>
                                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                                            took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row state-resComm">
                                        <div class="col-lg-4">
                                            <i class="ti-flag-alt-2 text-dark float-right"></i>
                                        </div>
                                        <div class="col-lg-8">
                                            <span class="badge badge-warning">Publié</span>
                                        </div>
                                    </div>
                                    <div class="row state-resComm">
                                        <div class="col-lg-4">
                                            <i class="fa fa-user text-dark float-right"></i>
                                        </div>
                                        <div class="col-lg-8 ">
                                            <span class="badge badge-info">02/11/19  07:25</span>
                                        </div>
                                    </div>
                                    <div class="row state-resComm">
                                        <div class="col-lg-4">
                                            <i class="ti-user text-dark float-right"></i>
                                        </div>
                                        <div class="col-lg-8">
                                            <span class="badge badge-secondary">$auteur->nom</span>
                                        </div>
                                    </div>
                                    <div class="row state-resComm">
                                        <div class="col-lg-4">
                                            <i class="ti-eye text-dark float-right"></i>
                                        </div>
                                        <div class="col-lg-8">
                                            <span class="badge badge-danger">55 Vues</span>
                                        </div>
                                    </div>
                                    <div class="row state-resComm">
                                        <div class="col-lg-4">
                                            <i class="fa fa-comment-o text-dark float-right"></i>
                                        </div>
                                        <div class="col-lg-8">
                                            <span class="badge badge-success">Commentaires</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <a href="#" class="btn btn-outline-primary float-right">Accéder aux communiqués <span class="fa fa-hand-o-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <!-- <h4 class="box-title">Chandler</h4> -->
                            <div class="calender-cont widget-calender">
                                <div id="calendar"></div>
                            </div>
                        </div>
                    </div><!-- /.card -->
                </div>
            </div>

        </div>
    </div>

    <!--scripts charts-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['line']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Mois');
        data.addColumn('number', 'Utilisateurs');
        data.addColumn('number', 'Commentaires');


        data.addRows([
            ['Jan',  37.8, 80.8],
            ['Fev',  30.9, 69.5],
            ['Mar',  25.4,   57],
            ['Avr',  11.7, 18.8],
            ['Mai',  11.9, 17.6],
            ['Juin',   8.8, 13.6],
            ['Juil',   7.6, 12.3],
            ['Aout',  12.3, 29.2],
            ['Sept',  16.9, 42.9],
            ['Oct', 12.8, 130.9],
            ['Nov',  5.3,  7.97],
            ['Dec',  6.6,  8.4]
        ]);

        var options = {
            chart: {
            title: ' ',
            subtitle: ' '
            },
            width: 900,
            height: 400,
            axes: {
            x: {
                0: {side: ''}
            }
            }
        };

        var chart = new google.charts.Line(document.getElementById('line_top_x'));

        chart.draw(data, google.charts.Line.convertOptions(options));
        }
    </script>

    <!--calendar scripts-->

@endsection
