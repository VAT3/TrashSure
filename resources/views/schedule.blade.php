@extends('admin')


@section('content')
<!-- Main Page -->
<div id="page-wrapper">
	<div class="container-fluid">
		<!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Assign Schedule
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="{{url('TrashSure')}}">Dashboard</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-edit"></i> Assign Schedule
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
                                <th>Waktu Mulai</th>
                                <th>Waktu Selesai</th>
                                <th>Petugas</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 0; $i < 24; $i++)
                            <tr>
                                <td>{{$Date}}</td>
                                <td>{{$i}}:00</td>
                                @if ($i == 23)
                                <td>00:00</td>
                                @else
                                <td>{{$i+1}}:00</td>
                                @endif
                                <td>
                                    <select class="form-control">
                                        <option>Nama Petugas</option>
                                        @foreach($Petugas as $petugas)
                                            <option>{{$petugas->nama}}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            @endfor
                        </tbody>
                    </table>
                    <button type="button" class="btn btn-sm btn-primary" onclick="redirect();">Submit</button>
                        <script type="text/javascript">
                        function redirect(){
                            window.location = "{{url('assignSchedule')}}";
                        }
                        </script>
                </div>
            </div>
        </div>
        <!-- /.row -->
	</div>
</div>

@endsection