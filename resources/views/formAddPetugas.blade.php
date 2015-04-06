@extends('admin')


@section('content')
<!-- Main Page -->
<div id="page-wrapper">
	<div class="container-fluid">
		<!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Add Form for Petugas
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="{{'TrashSure'}}">Dashboard</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-edit"></i> AddPetugas
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
	                    <input class="form-control" name="nama" placeholder="Contoh : Kaito">
	                </div>
                    <div class="form-group">
                        <label>NIP Petugas</label>
                        <input class="form-control" name="nip" placeholder="Contoh : 13512034">
                    </div>
                    <div class="form-group">
                        <label>Pekerjaan Petugas</label>
                        <input class="form-control" name="pekerjaan" placeholder="Contoh : Bos">
                    </div>
	                <div class="form-group">
	                    <label>Username</label>
	                    <input class="form-control" name="username">
	                </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input class="form-control" name="password">
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