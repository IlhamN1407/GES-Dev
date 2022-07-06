@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Penawaran</h1>
            <a href="{{ route('DataPenawaran.create') }}" class="btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data Penawaran
            </a>
        </div>
        <div class="d-sm-flex align-items-center justify-content-between mb-2">
            <h1 class="h3 mb-0 text-gray-800"> </h1>
            <a href="{{ url('/admin/cetak') }}" class="btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-solid fa-print"></i>
                Export Data</a>
        </div>


        <div class="row">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>id_penawaran</th>
                                <th>email</th>
                                <th>nama perusahaan</th>
                                <th>Alamat</th>
                                <th>tanggal penawaran</th>
                                <th>No HP</th>
                                <th>Perihal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($items as $item)
                                <tr>
                                    <th>{{ $item->id_penawaran }}</th>
                                    <th>{{ $item->email }}</th>
                                    <th>{{ $item->nama_PT }}</th>
                                    <th>{{ $item->Alamat }}</th>
                                    <th>{{ $item->created_at }} </th>
                                    <th>{{ $item->No_HP }}</th>
                                    <th>{{ $item->Perihal }}</th>
                                    <td>
                                        <a href="{{ route('DataPenawaran.edit', $item->id_penawaran) }}"
                                            class="btn btn-info">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>
                                        <form action="{{ route('DataPenawaran.destroy', $item->id_penawaran) }}"
                                            method="POST" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="text-center" colspan="7">
                                        Data Kosong
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
