@extends('admin')

@section('content')
<!-- Main Page -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Header -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Inventory
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="{{'TrashSure'}}">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Tables
                            </li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <h2>TPA</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>Lokasi</th>
                                        <th> - </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($TPA as $tpa)
                                    <tr>
                                        <td>TPA - {{$tpa->id}}</td>
                                        <td>{{$tpa->nama}}</td>
                                        <td>{{$tpa->lokasi}}</td>
                                        <td><i class="fa fa-recycle"></i> <a href="{{'delTPA/'.$tpa->id}}"> Delete</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <button type="button" class="btn btn-sm btn-primary" onclick="redirect();">Add TPA</button>
                                <script type="text/javascript">
                                function redirect(){
                                    window.location = "{{url('addTPA')}}";
                                }
                                </script>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h2>TPS</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>Lokasi</th>
                                        <th> - </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($TPS as $tps)
                                    <tr>
                                        <td>TPS - {{$tps->id}}</td>
                                        <td>{{$tps->nama}}</td>
                                        <td>{{$tps->lokasi}}</td>
                                        <td><i class="fa fa-recycle"></i> <a href="{{'delTPS/'.$tps->id}}"> Delete</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <button type="button" class="btn btn-sm btn-primary" onclick="redirect2();">Add TPS</button>
                            <script type="text/javascript">
                                function redirect2(){
                                    window.location = "{{url('addTPS')}}";
                                }
                            </script>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">
                        <h2>Sarana</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Jenis</th>
                                        <th>Plat</th>
                                        <th> - </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($Sarana as $sarana)
                                    <tr>
                                        <td>Sarana - {{$sarana->id}}</td>
                                        <td>{{$sarana->jenis}}</td>
                                        <td>{{$sarana->plat}}</td>
                                        <td><i class="fa fa-recycle"></i> <a href="{{'delSarana/'.$sarana->id}}"> Delete</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <button type="button" class="btn btn-sm btn-primary" onclick="redirect3();">Add Sarana</button>
                            <script type="text/javascript">
                                function redirect3(){
                                    window.location = "{{url('addSarana')}}";
                                }
                            </script>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h2>Petugas</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>NIP</th>
                                        <th>Pekerjaan</th>
                                        <th> - </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($Petugas as $petugas)
                                    <tr>
                                        <td>{{$petugas->nama}}</td>
                                        <td>{{$petugas->nip}}</td>
                                        <td>{{$petugas->pekerjaan}}</td>
                                        <td><i class="fa fa-recycle"></i> <a href="{{'delPetugas/'.$petugas->id}}"> Delete</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <button type="button" class="btn btn-sm btn-primary" onclick="redirect4();">Add Petugas</button>
                            <script type="text/javascript">
                                function redirect4(){
                                    window.location = "{{url('addPetugas')}}";
                                }
                            </script>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <br>
            <br>
        </div>
@endsection
