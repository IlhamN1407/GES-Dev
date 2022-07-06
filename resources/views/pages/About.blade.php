@extends('layouts.app')
@section('content')
    <main>
        <section class="section-intro" id="intro">
            <div class="container">
                <div class="section-intro-heading row">
                    <div class="col-sm-6">
                        <h2>Garuda Elang Sakti <br> Siap Memberikan Layanan <br>Jasa Security Terbaik</h2>
                    </div>
                    <div class="col-sm-6">
                        <h2>Visi</h2>
                        <p>Menjadi mitra yang solid, capable dan terbaik didasari profesionalisme dan tanggung jawab.
                        </p>
                    </div>
                    <div class="col-sm-6 offset-md-6">
                        <h2>Misi</h2>
                        <ul>
                            <li>Mengelola organisasi perusahaan dengan baik</li>
                            <li>Menjalankan prosedur sesuai dengan system manajemen pengamanan</li>
                            <li>Merekrut, Mendidik dan melatih SDM yang handal dan siap ditempatkan untuk pelayanan</li>
                            <li>Mencetak security yang sigap, simpatik, tanggap dan kritis terhadap situasi lapangan
                            </li>
                            <li>Menjalin hubungan kerja yang harmonis dengan aparat dan lingkungan</li>
                            <li>Selalu berinovasi dan tanggap terhadap perubahan</li>
                        </ul>
                    </div>
                </div>
                <div class="section-documentation-heading row">
                    <div class="col-sm-6 text-center">
                        <h2>Documentation</h2>
                    </div>
                </div>
                <div class="card-image row">
                    <div class="col-sm-6 col-lg-3">
                        <img src="{{ url('Frontend/images/dirut.staff.jpg') }}" width="300" height="300"
                            alt="">
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <img src="{{ url('Frontend/images/ruang kerja.jpg') }}" width="300" height="300"
                            alt="">
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <img src="{{ url('Frontend/images/ruang meeting.jpg') }}" width="300" height="300"
                            alt="">
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <img src="{{ url('Frontend/images/perlengkapan.jpg') }}" width="300" height="300"
                            alt="">
                    </div>
                </div>
        </section>
    </main>
@endsection
