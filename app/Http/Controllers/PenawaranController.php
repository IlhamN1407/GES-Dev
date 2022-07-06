<?php

namespace App\Http\Controllers;

use App\Http\Requests\DataPenawaran;
use App\Models\Penawaran;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PenawaranController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.penawaran', [
            'title' => 'Penawaran',
            'active' => 'penawaran',
        ]);
    }

    public function store(DataPenawaran $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        Penawaran::create($data);


        return redirect('/')->with('success', 'Tunggu Konfirmasi Dari staff kami');
        
    }
}
