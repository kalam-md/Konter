@extends('layouts.app')

@section('title', 'Transaksi Penjualan')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0 text-dark">Penjualan</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('penjualan.index') }}">Penjualan</a></li>
                <li class="breadcrumb-item active">Create</li>
            </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<section class="content">
    <div class="container-fluid">
        <!-- Penjualan -->
        <div class="row">
            <div class="col-md-12">
                <!-- Tambah Voucher-->
                <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                    <i class="ion ion-clipboard mr-1"></i>
                    Penjualan Item
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
                            <label for="name">Nama Barang</label>
                            <input name="name" type="text" class="form-control" id="name" >
                        </div>
                        <div class="form-group">
                            <label for="satuan">Satuan</label>
                            <input name="satuan" type="text" class="form-control" id="satuan">
                        </div>
                        <div class="form-group">
                            <label for="Total Satuan">Total Satuan</label>
                            <input name="total_satuan" type="number" class="form-control" id="Total Satuan" placeholder="Total Satuan" disabled>
                        </div>
                        <div class="form-group">
                            <label for="Total Harga">Total Harga</label>
                            <input name="harga" type="number" class="form-control" id="Total Harga" placeholder="Rp.12.000" disabled>
                        </div>
                        <div class="form-group">
                            <label id="tanggal">Tanggal Keluar Barang</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="far fa-clock"></i></span>
                                </div>
                                <input type="date" class="form-control float-right" id="tanggal" disabled>
                            </div>
                            <!-- /.input group -->
                        </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    <button type="submit" class="btn btn-info float-right"><i></i> Simpan</button>
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