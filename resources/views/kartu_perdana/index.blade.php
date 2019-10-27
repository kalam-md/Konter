@extends('layouts.app')

@section('title', 'Kartu Perdana')

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
                <li class="breadcrumb-item"><a href="#">Kartu Perdana</a></li>
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
                            <h3 class="card-title">List Kartu Perdana</h3>

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
                                        <th>Kartu ID</th>
                                        <th>Item</th>
                                        <th>Stok</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="pages/examples/invoice.html">KP9842</a></td>
                                        <td>Kartu Simpati</td>
                                        <td><span class="badge badge-info">100</span></td>
                                        <td>
                                            <a href="" class="badge badge-success">Edit</a>
                                            <a href="" class="badge badge-danger">Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="pages/examples/invoice.html">KP1848</a></td>
                                        <td>Kartu XL</td>
                                        <td><span class="badge badge-info">20</span></td>
                                        <td>
                                            <a href="" class="badge badge-success">Edit</a>
                                            <a href="" class="badge badge-danger">Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="pages/examples/invoice.html">KP7429</a></td>
                                        <td>Kartu Tri</td>
                                        <td><span class="badge badge-info">40</span></td>
                                        <td>
                                            <a href="" class="badge badge-success">Edit</a>
                                            <a href="" class="badge badge-danger">Delete</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                        <a href="{{ route('kartu.create') }}" class="btn btn-sm btn-info float-left">Kartu Perdana Baru</a>
                        <a href="" class="btn btn-sm btn-secondary float-right">Histori</a>
                    </div>
                    <!-- /.card-footer -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection