@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                    <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-user"></i></span>

                    <div class="info-box-content">
                    <span class="info-box-text">Administrator</span>
                    <span class="info-box-number">
                        2
                    </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

                    <div class="info-box-content">
                    <span class="info-box-text">Member</span>
                    <span class="info-box-number">
                        2
                    </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-success elevation-1"><i class="fas fa-inbox"></i></span>

                    <div class="info-box-content">
                    <span class="info-box-text">Voucher</span>
                    <span class="info-box-number">41</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-inbox"></i></span>

                    <div class="info-box-content">
                    <span class="info-box-text">Kartu Perdana</span>
                    <span class="info-box-number">76</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- report view -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Rekap Bulanan</h5>

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
                        <div class="row">
                            <div class="col-md-8">
                                <p class="text-center">
                                <strong>Penjualan: 1 Jan, 2019 - 30 Jul, 2019</strong>
                                </p>

                                <div class="chart">
                                <!-- Sales Chart Canvas -->
                                <canvas id="salesChart" height="180" style="height: 180px;"></canvas>
                                </div>
                                <!-- /.chart-responsive -->
                            </div>
                            <!-- /.col -->
                            <div class="col-md-4">
                                <p class="text-center">
                                <strong>Hal yang tercapai</strong>
                                </p>

                                <div class="progress-group">
                                    Penambahan Produk Baru
                                    <span class="float-right"><b>160</b>/200</span>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-primary" style="width: 80%"></div>
                                    </div>
                                </div>
                                <!-- /.progress-group -->

                                <div class="progress-group">
                                    Pembelian yang Gagal
                                    <span class="float-right"><b>310</b>/400</span>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-danger" style="width: 75%"></div>
                                    </div>
                                </div>

                                <!-- /.progress-group -->
                                <div class="progress-group">
                                    <span class="progress-text">Pembelian yang Berhasil</span>
                                    <span class="float-right"><b>480</b>/800</span>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-success" style="width: 60%"></div>
                                    </div>
                                </div>

                                <!-- /.progress-group -->
                                <div class="progress-group">
                                    Produk Cacat
                                    <span class="float-right"><b>250</b>/500</span>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-warning" style="width: 50%"></div>
                                    </div>
                                </div>
                                <!-- /.progress-group -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- ./card-body -->
                    <div class="card-footer">
                        <div class="row">
                        <div class="col-sm-3 col-6">
                            <div class="description-block border-right">
                                <span class="description-percentage text-primary"><i class="fas fa-caret-up"></i> 20</span>
                                <h5 class="description-header">Rp.2.000.000</h5>
                                <span class="description-text">TOTAL BIAYA</span>
                            </div>
                            <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-3 col-6">
                            <div class="description-block border-right">
                                <span class="description-percentage text-danger"><i class="fas fa-caret-down"></i> 5</span>
                                <h5 class="description-header">Rp.500.000</h5>
                                <span class="description-text">TOTAL RUGI</span>
                            </div>
                            <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-3 col-6">
                            <div class="description-block border-right">
                                <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 13</span>
                                <h5 class="description-header">Rp.1.500.000</h5>
                                <span class="description-text">TOTAL PENDAPATAN</span>
                            </div>
                            <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-3 col-6">
                            <div class="description-block">
                                <span class="description-percentage text-warning"><i class="fas fa-caret-down"></i> 2</span>
                                <h5 class="description-header">Rp.150.000</h5>
                                <span class="description-text">TOTAL CACAT</span>
                            </div>
                            <!-- /.description-block -->
                        </div>
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
</div>

@endsection