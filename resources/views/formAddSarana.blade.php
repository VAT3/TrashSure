@extends('admin')


@section('content')
<!-- Main Page -->
<div id="page-wrapper">
	<div class="container-fluid">
		<!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Add Form for Sarana
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="{{'TrashSure'}}">Dashboard</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-edit"></i> AddSarana
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
	                    <label>Jenis Sarana</label>
	                    <input class="form-control" name="jenis" placeholder="Contoh : Limusin">
	                </div>
	                <div class="form-group">
	                    <label>No Plat Sarana</label>
	                    <input class="form-control" name="plat" placeholder="Contoh : T 3 O">
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