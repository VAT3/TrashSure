@extends('admin')

@section('content')
<!-- Main Page -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Header -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Inventory TPS
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="{{'TrashSure'}}">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> InventoryTPS
                            </li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-10">
                        <h2>TPS</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>Lokasi</th>
                                        <th>Volume</th>
                                        <th> - </th>
                                        <th> - </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($TPS as $tps)
                                    <tr>
                                        <td>TPS - {{$tps->id}}</td>
                                        <td>{{$tps->nama}}</td>
                                        <td>{{$tps->lokasi}}</td>
                                        <td>{{$tps->volume}}</td>
                                        <td><i class="fa fa-recycle"></i> <a href="{{'delTPS/'.$tps->id}}"> Delete</a></td>
                                        <td><i class="fa fa-refresh"></i> <a href="{{'updTPS/'.$tps->id}}"> Update</a></td>
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

            </div>
            <br>
            <br>
        </div>
@endsection
