@extends('admin')

@section('content')
<!-- Main Page -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Header -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Inventory Sarana
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="{{'TrashSure'}}">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> InventorySarana
                            </li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-10">
                        <h2>Sarana</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Jenis</th>
                                        <th>Plat</th>
                                        <th> - </th>
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
                                        <td><i class="fa fa-refresh"></i> <a href="{{'updSarana/'.$sarana->id}}"> Update</a></td>
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
                </div>
                <!-- /.row -->
            </div>
            <br>
            <br>
        </div>
@endsection
