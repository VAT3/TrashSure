@extends('admin')

@section('content')
<!-- Main Page -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Header -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Inventory Petugas
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="{{'TrashSure'}}">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> InventoryPetugas
                            </li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-10">
                        <h2>Petugas</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>NIP</th>
                                        <th>Pekerjaan</th>
                                        <th> - </th>
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
                                        <td><i class="fa fa-refresh"></i> <a href="{{'updPetugas/'.$petugas->id}}"> Update</a></td>
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
