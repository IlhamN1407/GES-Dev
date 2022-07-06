@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Data Penawaran {{ $item->nama_PT }}</h1>
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
                <form action="{{ route('DataPenawaran.update', $item->id_penawaran) }}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="email">email</label>
                        <input type="text" class="form-control" name="email" placeholder="email"
                            value="{{ $item->email }}">
                    </div>
                    <div class="form-group">
                        <label for="nama_PT">Nama Perusahaan</label>
                        <input type="text" class="form-control" name="nama_PT" placeholder="Location"
                            value="{{ $item->nama_PT }}">
                    </div>
                    <div class="form-group">
                        <label for="Alamat">Alamat</label>
                        <textarea name="Alamat" rows="10" class="d-block w-100 form-control">{{ $item->Alamat }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="No_HP">No HP</label>
                        <input type="text" class="form-control" name="No_HP" placeholder="Featured Event"
                            value="{{ $item->No_HP }}">
                    </div>
                    <div class="form-group">
                        <label for="Perihal">Perihal</label>
                        <textarea name="Perihal" rows="10" class="d-block w-100 form-control">{{ $item->Perihal }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">
                        Ubah
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
