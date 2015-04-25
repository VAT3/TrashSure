@extends('admin')

@section('content')
<!-- Main Page -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Header -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard <small>Statistics Overview</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-info-circle"></i> Overview
                            </li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                    <!-- Left -->
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-trash fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">{{count($TPA)}}</div>
                                        <div>Jumlah TPA</div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{'inventory'}}">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- 2nd Left -->
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-trash fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">{{count($TPS)}}</div>
                                        <div>Jumlah TPS</div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{'inventory'}}">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- 3rd Left -->
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-car fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">{{count($Sarana)}}</div>
                                        <div>Jumlah Sarana</div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{'inventory'}}">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- 4th Left -->
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-gear fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">{{count($Petugas)}}</div>
                                        <div>Jumlah Petugas</div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{'inventory'}}">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-tasks fa-fw"></i> Tasks Panel</h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group">
                                    <a href="#" class="list-group-item">
                                        <span class="badge">just now</span>
                                        <i class="fa fa-fw fa-calendar"></i> Schedule updated
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">23 minutes ago</span>
                                        <i class="fa fa-fw fa-truck"></i> Jl. Dago had been cleaned
                                    </a>
                                     <a href="#" class="list-group-item">
                                        <span class="badge">46 minutes ago</span>
                                        <i class="fa fa-fw fa-truck"></i> Jl. Cisitu Lama 8 had been cleaned
                                    </a>
                                     <a href="#" class="list-group-item">
                                        <span class="badge">48 minutes ago</span>
                                        <i class="fa fa-fw fa-truck"></i> Jl. Tubagus Ismail had been cleaned
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">1 hour ago</span>
                                        <i class="fa fa-fw fa-user"></i> A new user has been added
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">yesterday</span>
                                        <i class="fa fa-fw fa-globe"></i> Saved the world
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">yesterday</span>
                                        <i class="fa fa-fw fa-calendar"></i> Schedule updated
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">2 days ago</span>
                                        <i class="fa fa-fw fa-calendar"></i> Schedule updated
                                    </a>
                                </div>
                                <div class="text-right">
                                    <a href="#">View All Activity <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Input Panel</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>ID #</th>
                                                <th>Name</th>
                                                <th>Input Date</th>
                                                <th>Occupation</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>13512004</td>
                                                <td>Tito</td>
                                                <td>10/21/2015</td>
                                                <td>Penyapu Jalan</td>
                                                <td>Done</td>
                                            </tr>
                                            <tr>
                                                <td>13512058</td>
                                                <td>Andrey</td>
                                                <td>10/21/2015</td>
                                                <td>Petugas TPA</td>
                                                <td>Done</td>
                                            </tr>
                                            <tr>
                                                <td>13512052</td>
                                                <td>Try Aji</td>
                                                <td>10/21/2015</td>
                                                <td>Petugas TPS</td>
                                                <td>Done</td>
                                            </tr>
                                            <tr>
                                                <td>13512050</td>
                                                <td>Teofebano</td>
                                                <td>10/21/2015</td>
                                                <td>Penyapu Jalan</td>
                                                <td>Done</td>
                                            </tr>
                                            <tr>
                                                <td>13512034</td>
                                                <td>Vidia</td>
                                                <td>10/21/2015</td>
                                                <td>Bos</td>
                                                <td>Done</td>
                                            </tr>
                                            <tr>
                                                <td>13512004</td>
                                                <td>Tito</td>
                                                <td>10/20/2015</td>
                                                <td>Penyapu Jalan</td>
                                                <td>Done With Style</td>
                                            </tr>
                                            <tr>
                                                <td>13512058</td>
                                                <td>Andrey</td>
                                                <td>10/20/2015</td>
                                                <td>Petugas TPA</td>
                                                <td>Done</td>
                                            </tr>
                                            <tr>
                                                <td>13512052</td>
                                                <td>Try Aji</td>
                                                <td>10/21/2015</td>
                                                <td>Petugas TPS</td>
                                                <td>Huaum</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="text-right">
                                    <a href="#">View All Transactions <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection