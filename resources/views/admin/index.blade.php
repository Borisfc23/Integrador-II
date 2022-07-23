@extends('adminlte::page')

@section('title', 'Dashboard | Administrador')

@section('content_header')
    <div class="container-fluid">
        <div class="p-2" style="background: #417290;color:#fff">
            <h2>
                <i class="fas fa-signal"></i>
                Home
            </h2>
        </div>
        @can('admin.index')
            <div class="row mt-4">
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{ $products }}</h3>
                            <p>Products</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-tools"></i>
                        </div>
                        <a data-bs-toggle="modal" data-bs-target="#stockModal" class="small-box-footer"
                            style="cursor: pointer;">View Stock <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{ $providers }}</h3>
                            <p>Providers</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-store"></i>
                        </div>
                        <a href="{{ route('admin.providers.index') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{ $outputs }}</h3>
                            <p>Outputs</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-door-open"></i>
                        </div>
                        <a data-bs-toggle="modal" data-bs-target="#outputModal" class="small-box-footer">View Line Time <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box " style="background:#FF795F ">
                        <div class="inner">
                            <h3>{{ $users }}</h3>
                            <p>Users</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <a href="{{ route('admin.users.index') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        @endcan
        <div class="row mt-5">
            <div class="col-lg-6 col-6">
                <div class="small-box bg-primary">
                    <div class="inner">
                        <p>Curso</p>
                        <h3>Integrador II</h3>
                        <p>Integrantes</p>
                        <ul>
                            <li>Boris Flores Cordova</li>
                            <li>Anthony Mayhuasca Salvatierra</li>
                        </ul>
                        <p>Docente</p>
                        <ul>
                            <li>J. Valverde</li>
                        </ul>
                    </div>
                    <div class="icon">
                        <i class="fas fa-book"></i>
                    </div>
                    <a class="small-box-footer"> -</a>
                </div>
            </div>
            <div class="col-lg-6 col-6">
                <div class="small-box bg-secondary">
                    <div class="inner">
                        <p>Proyecto</p>
                        <h3>Sistema de Inventario</h3>
                        <p>CONSTRUCTORA RF, es una empresa peruana constituida en 1993. Es un equipo de profesionales que
                            elaboran y desarrollan proyectos de Ingeniería y Construcción, acorde a las necesidades de sus
                            clientes, brindando consultoría diferenciada en cada especialidad.
                        <p>*Elaborar un Sistema web de inventario para el control de materiales y equipos en una empresa de
                            Construcción basado en la metodología SCRUM que permita a los trabajadores una mejor gestión y
                            manejo de los materiales y equipos de construcción, además el sistema debe ser amigable para
                            todos los usuarios.
                        </p>
                        </p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-boxes"></i>
                    </div>
                    <a class="small-box-footer"> -</a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="stockModal" tabindex="-1" aria-labelledby="stockModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Warehouse bar chart</h5>
                    <button type="button" class="btn-close bg-danger" data-bs-dismiss="modal" aria-label="Close">X</button>
                </div>
                <div class="modal-body">
                    <div id="container"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="outputModal" tabindex="-1" aria-labelledby="outputModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Warehouse bar chart</h5>
                    <button type="button" class="btn-close bg-danger" data-bs-dismiss="modal" aria-label="Close">X</button>
                </div>
                <div class="modal-body">
                    <div id="container2"></div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('content')

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <script>
        Highcharts.chart('container', {
            chart: {
                type: 'column'
            },
            title: {
                align: 'left',
                text: 'Stock of Productos, 2022'
            },
            accessibility: {
                announceNewData: {
                    enabled: true
                }
            },
            xAxis: {
                type: 'category'
            },
            yAxis: {
                title: {
                    text: 'Total products of Warehouse'
                }

            },
            legend: {
                enabled: false
            },
            plotOptions: {
                series: {
                    borderWidth: 0,
                    dataLabels: {
                        enabled: true,
                        format: '{point.y:.0f}'
                    }
                }
            },

            tooltip: {
                headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
            },

            series: [{
                name: "Browsers",
                colorByPoint: true,
                data: <?= $data ?>
            }],

        });
        Highcharts.chart('container2', {

            title: {
                text: 'Count of Ouputs, 2010 - 2022'
            },
            yAxis: {
                title: {
                    text: 'Number of Outpus '
                }
            },

            xAxis: {
                categories: ['2010', '2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020',
                    '2021', '2022'
                ]
            },

            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },

            plotOptions: {
                series: {
                    label: {
                        connectorAllowed: false
                    },
                    pointStart: 2010
                }
            },

            series: [{
                name: 'Outputs',
                data: <?= $data2 ?>
            }, ],

            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 500
                    },
                    chartOptions: {
                        legend: {
                            layout: 'horizontal',
                            align: 'center',
                            verticalAlign: 'bottom'
                        }
                    }
                }]
            }

        });
    </script>
@stop
