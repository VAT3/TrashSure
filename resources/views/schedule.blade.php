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
                                <th>Durasi</th>
                                <th>Petugas</th>
                                <th>Lokasi</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <form role="form" method="post" action="/assignSchedule">
                                    <input name="_token" hidden value="{!! csrf_token() !!}" />
                                        <td><input type="input" class="form-control" name="tanggal" value={{$Date}} readonly></td>
                                        <td>
                                            <div class="form-group">
                                                <select name="durasi" class="form-control">
                                                    <option>Durasi</option>
                                                    <option>05:00-06.00</option>
                                                    <option>06:00-07.00</option>
                                                    <option>07:00-08.00</option>
                                                    <option>08:00-09.00</option>
                                                    <option>09:00-10.00</option>
                                                    <option>10:00-11.00</option>
                                                    <option>11:00-12.00</option>
                                                    <option>12:00-13.00</option>
                                                    <option>13:00-14.00</option>
                                                    <option>14:00-15.00</option>
                                                    <option>15:00-16.00</option>
                                                    <option>16:00-17.00</option>
                                                    <option>17:00-18.00</option>
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <select name="petugas" class="form-control">
                                                    <option>Petugas</option>
                                                    @foreach($Petugas as $petugas)
                                                    <option>{{$petugas->nama}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <select name="lokasi" class="form-control">
                                                    <option>Lokasi</option>
                                                    <optgroup label="---TPA---"></optgroup>
                                                    @foreach($TPA as $tpa)
                                                    <option>{{$tpa->nama}} - {{$tpa->lokasi}}</option>
                                                    @endforeach
                                                    <optgroup label="---TPS---"></optgroup>
                                                    @foreach($TPS as $tps)
                                                    <option>{{$tps->nama}} - {{$tps->lokasi}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </td>
                                    <td>
                                        <input type="submit" name="submit" class="form-control" value="Submit" style="width:75px;">
                                        </form>
                                    </td>
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