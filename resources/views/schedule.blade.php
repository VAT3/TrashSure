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
                                <th>-</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 0; $i < 24; $i++)
                            <tr>
                                <form role="form" method="post" action="/assignSchedule">
                                <input name="_token" hidden value="{!! csrf_token() !!}" />
                                    <td><input type="input" class="form-control" name="tanggal" value={{$Date}} readonly></td>
                                    <td><input type="input" class="form-control" name="waktuMulai" value="{{$i}}:00" readonly></td>
                                    @if ($i == 23)
                                    <td><input type="input" class="form-control" name="waktuSelesai" value="0:00" readonly></td>
                                    @else
                                    <td><input type="input" class="form-control" name="waktuSelesai" value="{{$i+1}}:00" readonly></td>
                                    @endif
                                    <td>
                                        <div class="form-group">
                                            <select name="petugas" class="form-control">
                                                <option>Petugas</option>
                                                @foreach($Petugas as $petugas)
                                                <option>{{$petugas->nama}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <span class="additional"></span>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-primary" onclick="add();">Add Petugas</button>
                                </td>
                                <td>
                                    <input type="submit" name="submit" class="form-control" value="Submit" style="width:75px;">
                                    </form>
                                </td>
                            </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /.row -->
	</div>
</div>
<script type="text/javascript">
    function add(){
        var tr = '<div class="additional"><div class="form-group"><select name="petugas-{{$i}}[]" class="form-control"><option>Petugas</option>@foreach($Petugas as $petugas)<option>{{$petugas->nama}}</option>@endforeach</select></div></div>';
        $("span.additional").append(tr);
    }
</script>
@endsection