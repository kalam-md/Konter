@extends('layouts.app')

@section('title', 'Pembelian')

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
                <li class="breadcrumb-item"><a href="#">Pembelian</a></li>
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
                    <!-- TABLE: LATEST ORDERS -->
                    <div class="card">
                        <div class="card-header border-transparent">
                            <h3 class="card-title">Pembelian Barang</h3>

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
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table m-0">
                                <thead>
                                    <tr>
                                        <th>ID Barang</th>
                                        <th>Item</th>
                                        <th>Harga</th>
                                        <th>Jumlah</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="pages/examples/invoice.html">BR9842</a></td>
                                        <td>Kartu Simpati</td>
                                        <td>Rp.10.000</td>
                                        <td>10</td>
                                        <td>Rp.100.000</td>
                                    </tr>
                                    <tr>
                                        <td><a href="pages/examples/invoice.html">BR1848</a></td>
                                        <td>Voucher XL 20 GB</td>
                                        <td>Rp.12.000</td>
                                        <td>4</td>
                                        <td>Rp.56.000</td>
                                    </tr>
                                    <tr>
                                        <td><a href="pages/examples/invoice.html">BR7429</a></td>
                                        <td>Kartu Tri</td>
                                        <td>Rp.20.000</td>
                                        <td>9</td>
                                        <td>Rp.180.000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                        <a href="{{ route('pembelian.create') }}" class="btn btn-sm btn-info float-left">Pembelian Baru</a>
                        <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">Histori Pembelian</a>
                    </div>
                    <!-- /.card-footer -->
                    </div>
                </div>
            </div>  
        </div>
    </section>
</div>

@endsection