@extends('layouts.app')
@section('title', 'Form Penawaran')

@section('content')
    <!-- form -->
    <div class="container">
        <form class="row g-3" action="/Penawaran" method="POST">
            @csrf
            <div class="col-sm-12" bis_skin_checked="1">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="inputEmail4" required />
                <span style="color:red">
                    @error('email')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="col-sm-12" bis_skin_checked="1">
                <label for="inputnamaPT" class="form-label">Nama Perusahaan</label>
                <input type="text" class="form-control" name="nama_PT" id="inputnamaPT" required />
                <span style="color:red">
                    @error('nama_PT')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="col-12" bis_skin_checked="1">
                <label for="inputAddress" class="form-label">Alamat</label>
                <textarea class="form-control" name="Alamat" id="Alamat" rows="3" required></textarea>
                <span style="color:red">
                    @error('Alamat')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="col-sm-12" bis_skin_checked="1">
                <label for="inputPhone" class=" form-label">No Telpon</label>
                <input type="text" class="form-control" id="phoneNumber" name="No_HP" pattern="[0-9]+" />
                <span style="color:red">
                    @error('No_HP')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="col-12" bis_skin_checked="1">
                <label for="inputAddress" class="form-label">Ada Yang bisa kami bantu?</label>
                <textarea class="form-control" name="Perihal" id="bantuan" rows="3"
                    placeholder="Saya ingin menanyakan terkait tarif" required></textarea>
                <span style="color:red">
                    @error('bantuan')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="col-12" bis_skin_checked="1">
                <button type="submit" class="btn btn-primary">Kirim</button>
            </div>
        </form>
    </div>
    <!-- End Form -->
@endsection
