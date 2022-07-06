@extends('layouts.app')
@section('title')
    Garuda Elang Sakti
@endsection
@section('content')
    <!-- header -->
    <header class="text-center">
        <div class="container">
            <h1>OUTSOURCING SECURITY</h1><br>
            <p>Gunakan layanan outsourcing security dari PT. Garuda Elang Sakti, <br> lebih berani beri solusi yang lebih
                efisien
                dan lebih efektif.
            </p>
            <a href="{{ url('/Penawaran') }}" class="btn btn-Penawaran px-4 mt-4">Penawaran</a>
        </div>
    </header>
    <!-- END of HEADER -->
@endsection
