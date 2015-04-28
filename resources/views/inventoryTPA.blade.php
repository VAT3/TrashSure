@extends('admin')

@section('content')
<!-- Main Page -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Header -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Inventory TPA
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="{{'TrashSure'}}">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> InventoryTPA
                            </li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-10">
                        <h2>TPA</h2>
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
                                    @foreach($TPA as $tpa)
                                    <tr>
                                        <td>TPA - {{$tpa->id}}</td>
                                        <td>{{$tpa->nama}}</td>
                                        <td>{{$tpa->lokasi}}</td>
                                        <td>{{$tpa->volume}}</td>
                                        <td><i class="fa fa-recycle"></i> <a href="{{'delTPA/'.$tpa->id}}"> Delete</a></td>
                                        <td><i class="fa fa-refresh"></i> <a href="{{'updTPA/'.$tpa->id}}"> Update</a></td>
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
                </div>
                <!-- /.row -->

            </div>
            <br>
            <br>
        </div>
@endsection
