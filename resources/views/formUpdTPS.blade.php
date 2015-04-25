@extends('admin')


@section('content')
<!-- Main Page -->
<div id="page-wrapper">
	<div class="container-fluid">
		<!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Update Form for TPS
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="{{url('TrashSure')}}">Dashboard</a>
                    </li>
                    <li>
                        <i class="fa fa-table"></i>  <a href="{{url('inventoryTPS')}}">InventoryTPS</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-edit"></i> UpdateTPS
                    </li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3">
            </div>
            <div class="col-lg-6">
            	<form method="post">
	            	<div class="form-group">
	                    <label>Nama TPS</label>
	                    <input class="form-control" name="nama" placeholder="<?php echo Session::get('namaTPS'); ?>">
	                </div>
                    <div class="form-group">
                        <label>Lokasi TPS</label>
                        <input class="form-control" name="lokasi" placeholder="<?php echo Session::get('lokasiTPS'); ?>">
                    </div>
	                <input type="hidden" name="_token" value="{{ csrf_token() }}">
	                <button type="submit" class="btn btn-primary">Submit</button>
	                <button type="reset" class="btn btn-primary">Reset</button>
	            </form>
            </div>
            <div class="col-lg-3">
            </div>
        </div>
	</div>
</div>

@endsection