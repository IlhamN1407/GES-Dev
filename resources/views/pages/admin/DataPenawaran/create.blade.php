@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Data Penawaran</h1>
        </div>

        <!-- Content Row -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card shadow">
            <div class="card-body">
                <form action="{{ route('DataPenawaran.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="email">email</label>
                        <input type="text" class="form-control" name="email" placeholder="email"
                            value="{{ old('email') }}">
                    </div>
                    <div class="form-group">
                        <label for="nama_PT">Nama Perusahaan</label>
                        <input type="text" class="form-control" name="nama_PT" placeholder="Nama Perusahaan"
                            value="{{ old('nama_PT') }}">
                    </div>
                    <div class="form-group">
                        <label for="Alamat">Alamat</label>
                        <textarea name="Alamat" rows="10" class="d-block w-100 form-control">{{ old('Alamat') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="No_HP">No HP</label>
                        <input type="text" class="form-control" name="No_HP" placeholder="Nomor HP"
                            value="{{ old('No_HP') }}">
                    </div>
                    <div class="form-group">
                        <label for="Perihal">Perihal</label>
                        <input type="text" class="form-control" name="Perihal" placeholder="Perihal"
                            value="{{ old('Perihal') }}">
                    </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block">
                Simpan
            </button>
            </form>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
