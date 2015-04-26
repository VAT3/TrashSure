@extends('admin')


@section('content')
<!-- Main Page -->
<div id="page-wrapper">
	<div class="container-fluid">
		<!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Update Form for Petugas
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="{{url('TrashSure')}}">Dashboard</a>
                    </li>
                    <li>
                        <i class="fa fa-table"></i>  <a href="{{url('inventoryPetugas')}}">InventoryPetugas</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-edit"></i> UpdatePetugas
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
	                    <label>Nama Petugas</label>
	                    <input class="form-control" name="nama" placeholder="<?php echo Session::get('namaPetugas'); ?>">
	                </div>
                    <div class="form-group">
                        <label>NIP Petugas</label>
                        <input class="form-control" name="nip" placeholder="<?php echo Session::get('NIP'); ?>">
                    </div>
                    <div class="form-group">
                        <label>Pekerjaan Petugas</label>
                        <input class="form-control" name="pekerjaan" placeholder="<?php echo Session::get('pekerjaan'); ?>">
                    </div>
	                <div class="form-group">
	                    <label>Username</label>
	                    <input class="form-control" name="username" placeholder="<?php echo Session::get('username'); ?>">
	                </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="<?php echo Session::get('password'); ?>">
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