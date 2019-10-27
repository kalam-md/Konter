@extends('layouts.app')

@section('title', 'Create Kartu Perdana')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0 text-dark">Kartu Perdana</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('kartu.index') }}">Kartu Perdana</a></li>
                <li class="breadcrumb-item active">Create</li>
            </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<section class="content">
    <div class="container-fluid">
    <div class="row">
            <div class="col-md-12">
                <!-- Tambah Voucher-->
                <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                    <i class="ion ion-clipboard mr-1"></i>
                    Tambah Kartu Perdana
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <!-- form start -->
                    <form role="form">
                        <div class="form-group">
                            <label for="Kartu">Kartu Perdana ID</label>
                            <input type="text" class="form-control" id="Kartu" placeholder="KP8909" disabled>
                        </div>
                        <div class="form-group">
                            <label for="Kartu">Kartu Perdana</label>
                            <input type="text" class="form-control" id="Kartu" placeholder="Kartu">
                        </div>
                        <div class="form-group">
                            <label for="stok">Stok</label>
                            <input type="number" class="form-control" id="stok" placeholder="100" disabled>
                        </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    <button type="button" class="btn btn-info float-right"><i></i> Save</button>
                </div>
                </form>
                </div>
                <!-- /.card -->
            </div>
            </div>
        </div>
    </div>
</section>

</div>

@endsection