<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DataPenawaran as RequestsDataPenawaran;
use App\Models\Penawaran;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class DataPenawaran extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Penawaran::all();

        return view('pages.admin.DataPenawaran.index', [
            'items' => $items,
            'active' => 'penawaran',
        ]);
    }

    public function cetakPenawaran()
    {
        $items = Penawaran::all();
        view()->share('items', $items);
        $pdf = PDF::loadView('pages.admin.DataPenawaran.cetak');
        return $pdf->download('DataPenawaran.pdf');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.DataPenawaran.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RequestsDataPenawaran $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        Penawaran::create($data);
        return redirect()->route('DataPenawaran.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Penawaran::findOrFail($id);

        return view('pages.admin.DataPenawaran.edit',[
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        $item = Penawaran::findOrFail($id);

        $item->update($data);

        return redirect()->route('DataPenawaran.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Penawaran::findorFail($id);
        $item->delete();

        return redirect()->route('DataPenawaran.index');
    }
}
