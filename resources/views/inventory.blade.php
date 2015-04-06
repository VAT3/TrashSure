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
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($TPA as $tpa)
                                    <tr>
                                        <td>{{$tpa->id}}</td>
                                        <td>{{$tpa->nama}}</td>
                                        <td>{{$tpa->lokasi}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <button type="button" class="btn btn-sm btn-primary" onclick="redirect();">Add TPA</button>
                                <script type="text/javascript">
                                function redirect(){
                                    window.location = "{{url('add')}}";
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
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($TPS as $tps)
                                    <tr>
                                        <td>{{$tps->id}}</td>
                                        <td>{{$tps->nama}}</td>
                                        <td>{{$tps->lokasi}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <button type="button" class="btn btn-sm btn-primary">Add TPS</button>
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
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($Sarana as $sarana)
                                    <tr>
                                        <td>{{$sarana->id}}</td>
                                        <td>{{$sarana->jenis}}</td>
                                        <td>{{$sarana->plat}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <button type="button" class="btn btn-sm btn-primary">Add Sarana</button>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h2>Petugas</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>NIP</th>
                                        <th>Pekerjaan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($Petugas as $petugas)
                                    <tr>
                                        <td>{{$petugas->id}}</td>
                                        <td>{{$petugas->nama}}</td>
                                        <td>{{$petugas->nip}}</td>
                                        <td>{{$petugas->pekerjaan}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <button type="button" class="btn btn-sm btn-primary">Add Petugas</button>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <br>
            <br>
        </div>
@endsection
