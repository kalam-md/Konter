@extends('layouts.app')

@section('title', 'Voucher')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0 text-dark">Voucher</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Voucher</a></li>
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
                            <h3 class="card-title">List Voucher</h3>

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
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Provider</th>
                                        <th>Satuan</th>
                                        <th>Saldo</th>
                                        <th>Harga</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($vouchers as $i => $v)
                                    <tr>
                                        <td>{{ $i+1 }}</td>
                                        <td>{{ $v->name }}</td>
                                        <td>{{ $v->provider }}</td>
                                        <td>{{ $v->quantity }}</td>
                                        <td>{{ $v->saldo }}</td>
                                        <td>{{ $v->price }}</td>
                                        <td>
                                            <a href="" class="badge badge-success">Edit</a>
                                            <a href="" class="badge badge-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                        <a href="{{ route('voucher.create') }}" class="btn btn-sm btn-info float-left">Voucher Baru</a>
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