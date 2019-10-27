@extends('layouts.app')

@section('title', 'Transaksi Pembelian')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0 text-dark">Pembelian</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('pembelian.index') }}">Pembelian</a></li>
                <li class="breadcrumb-item active">Create</li>
            </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<section class="content">
    <div class="container-fluid">
        <!-- voucher -->
        <div class="row">
            <div class="col-md-12">
                <!-- Tambah Voucher-->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                        <i class="ion ion-clipboard mr-1"></i>
                        Voucher
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
                        <form role="form" action="{{ route('pembelian.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="Nama">Nama</label>
                            <input name="name" type="text" class="form-control" id="Nama" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label for="Provider">Provider</label>
                            <input name="provider" type="text" class="form-control" id="Provider" placeholder="Provider">
                        </div>
                        <div class="form-group">
                            <label for="Satuan">Satuan</label>
                            <input name="quantity" type="number" class="form-control" id="Satuan" placeholder="Satuan">
                        </div>
                        <div class="form-group">
                            <label for="Saldo">Saldo</label>
                            <input name="saldo" type="number" class="form-control" id="Saldo" placeholder="Saldo">
                        </div>
                        <div class="form-group">
                            <label for="Price">Price</label>
                            <input name="price" type="number" class="form-control" id="Price" placeholder="Price">
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- kartu -->
        <div class="row">
            <div class="col-md-12">
                <!-- Tambah Voucher-->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                        <i class="ion ion-clipboard mr-1"></i>
                        Kartu Perdana
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
                        <div class="form-group">
                            <label for="Nama">Nama</label>
                            <input name="name" type="text" class="form-control" id="Nama" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label for="Provider">Provider</label>
                            <input name="provider" type="text" class="form-control" id="Provider" placeholder="Provider">
                        </div>
                        <div class="form-group">
                            <label for="Satuan">Satuan</label>
                            <input name="quantity" type="number" class="form-control" id="Satuan" placeholder="Satuan">
                        </div>
                        <div class="form-group">
                            <label for="Saldo">Saldo</label>
                            <input name="saldo" type="number" class="form-control" id="Saldo" placeholder="Saldo">
                        </div>
                        <div class="form-group">
                            <label for="Price">Price</label>
                            <input name="price" type="number" class="form-control" id="Price" placeholder="Price">
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 float-right">
                <div class="card-footer clearfix">
                    <button type="button" class="btn btn-info float-right"><i></i> Save</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</section>

</div>

@endsection