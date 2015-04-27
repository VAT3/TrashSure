@extends('admin')


@section('content')
<!-- Main Page -->
<div id="page-wrapper">
	<div class="container-fluid">
		<!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Schedule
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="{{url('TrashSure')}}">Dashboard</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-edit"></i> Schedule
                    </li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-10">
                
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Durasi</th>
                                <th>Petugas</th>
                                <th>Lokasi</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    @foreach ($Jadwal as $jadwal)
                                    @if ($jadwal->tanggal == $Date)
                                        <td>{{$jadwal->tanggal}}</td>
                                        <td>
                                            {{$jadwal->durasi}}
                                        </td>
                                        <td>
                                            {{$jadwal->petugas}}
                                        </td>
                                        <td>
                                            {{$jadwal->lokasi}}
                                        </td>
                                    @endif
                                    @endforeach
                                </tr>
                                
                                
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /.row -->
	</div>
</div>
@endsection